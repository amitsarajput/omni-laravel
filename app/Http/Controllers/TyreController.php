<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Country;
use App\Models\Icon;
use App\Models\Region;
use App\Models\SearchTag;
use App\Models\Tyre;
use App\Models\TyreCategory;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Stevebauman\Location\Facades\Location;

class TyreController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except(['tyre_grid','tyre_single']);
    }
    /**
     * Display a listing of the resource.
     */
    
    protected $catlog_path='/public/tire_images';
    protected $other_path='/public/tire_images/other';
    protected $feature_path='/public/features';

    

    public function handleFile($file, $path){
        $fileName = $file->getClientOriginalName(); 
        $fileStore=$file->storeAs($path, $fileName);
        return $fileName;
    }

    public function tyre_grid($brand=null, $country=null, $region=null )
    {
        $omni_data=session('omni_data');
        //Set variables//
        $region_str= ($region!==null) ? $region : $omni_data['region'];
        $country_str= ($country!==null) ? $country : $omni_data['country'];
        $brand_str= ($brand!==null) ? $brand : $omni_data['brand'];
        //dd($brand_str,$country_str);
        //Set session data//
        $omni_data['region']=$region_str;
        $omni_data['country']=$country_str;
        $omni_data['preffered_location']=strtoupper($country_str);
        $omni_data['brand']=$brand_str;
        session(['omni_data'=>$omni_data]);
        //set view
        $brand_country=strtolower($omni_data['brand'].'-'.$omni_data['country']);
        //Find tyres
        $region=Region::where('slug', $region_str)->first();
        $country=Country::where('slug', $country_str)->first();
        if (empty($country)){
            abort(404);
        }
        $brand=Brand::with('search_tags')->where(['slug'=> $brand_str.'-'.$country_str, 'country_id'=>$country->id])->first();
        if (empty($brand)){
            abort(404);
        }
        $search_tags=$brand->search_tags;
        if (empty($search_tags)){
            abort(404);
        }
        $tyres=Tyre::with('country','brand','search_tag','icons','tyre_categories')->where(['country_id'=>$country->id,'brand_id'=>$brand->id])->get();
        
        return view('tyre-grid',compact('tyres','search_tags','brand_country'));
    }
    

    /**
     * Display the specified resource.
     */
    public function tyre_single($brand=null,$country=null, Tyre $tyre)
    {
        return view('tyre-single',compact('tyre'));
    }
    
    public function index()
    {
        $tyre=Tyre::with('country','brand','search_tag')->get();
        return view('admin.tyre.index',compact('tyre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country=Country::all()->pluck('name','id')->map(function (string $item, string $key) {
            return strtoupper($item);
        });
        $brand=Brand::all()->pluck('name','id')->map(function (string $item, string $key) {
            return strtoupper($item);
        });;
        $searchtag=SearchTag::all()->pluck('name','id');
        $tyrecategory=TyreCategory::all()->pluck('name','id');
        $icon=Icon::all()->pluck('name','id');

        return view('admin.tyre.create',compact('country','brand','searchtag','icon','tyrecategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'country' => ['required', 'integer'],
            'brand' => ['required', 'integer'],
            'searchtag' => ['required', 'integer'],
            'icon' => ['required', 'array'],
            'name' => ['required', 'string', 'max:255'],
            'previewname' => ['required', 'string', 'max:255'],
            'tyrecategory' => ['required', 'array'],
            'externallink' => ['string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'slug' => ['required', 'string', 'max:255', 'unique:'.Tyre::class],
            'catalogue_image' => ['file','mimes:webp,jpg,png','max:6024'],
            'product_images' => ['array'],
            'product_images.*' => ['file','mimes:webp,jpg,png','max:6024'],
        ]);

        $tyre = Tyre::create([
            'country_id' => $request->country,
            'brand_id' => $request->brand,
            'search_tag_id' => $request->searchtag,
            'name' => $request->name,
            'preview_name' => htmlspecialchars($request->previewname),
            'slug' => strtolower($request->slug),
            'external_link' => $request->externallink,
            'description' => htmlspecialchars($request->description),
        ]);
        
        if ($request->hasFile('catalogue_image')&& $request->file('catalogue_image')->isValid()) {
            $file=$this->handlefile($request->catalogue_image, $this->catlog_path);
            $tyre->catalogue_image=$file;
            $tyre->save();
        }
        if ($request->hasFile('product_images')&& $request->file('product_images')->isValid()) {
            $files=[];
            foreach($request->product_images as $key=>$value){
                $file=$this->handlefile($value, $this->other_path);
                $files[]=$file;
            }
            $tyre->product_images=json_encode($files);
            $tyre->save();
        }
        $tyre->icons()->attach($request->icon);
        $tyre->tyre_categories()->attach($request->tyrecategory);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tyre $tyre)
    {   
        //$search_tags=Brand::find($brand)->search_tags;
        //dd($tyre->with('country','brand','search_tag','icons'));
        //$tyre=Tyre::with('country','brand','search_tag','icons')->where(['country_id'=>$tyre->country,'brand_id'=>$tyre->brand,'slug'=>$tyre->slug])->first();
        //dump($tyre);
        //$tyre=$tyre->with('country','brand','search_tag','icons');
        return view('tyre-single',compact('tyre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tyre $tyre)
    {
        $country=Country::all()->pluck('name','id')->map(function (string $item, string $key) {
            return strtoupper($item);
        });
        $brand=Brand::all()->pluck('name','id')->map(function (string $item, string $key) {
            return strtoupper($item);
        });
        $searchtag=SearchTag::all()->pluck('name','id');
        $tyrecategory=TyreCategory::all()->pluck('name','id');
        $icon=Icon::all()->pluck('name','id');

        return view('admin.tyre.edit',compact('tyre','country','brand','searchtag','icon','tyrecategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tyre $tyre)
    {
        //dd($request->icon);
        $request->validate([
            'country' => ['required', 'integer'],
            'brand' => ['required', 'integer'],
            'searchtag' => ['required', 'integer'],
            'icon' => ['required', 'array'],
            'name' => ['required', 'string', 'max:255'],
            'previewname' => ['required', 'string', 'max:255'],
            'tyrecategory' => ['required', 'array'],
            'externallink' => ['string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'catalogue_image' => ['file','mimes:webp,jpg,png','max:6024'],
            'product_images' => ['array'],
            'product_images.*' => ['file','mimes:webp,jpg,png','max:6024'],
        ]);
        
        $tyre->update([
            'country_id' => $request->country,
            'brand_id' => $request->brand,
            'search_tag_id' => $request->searchtag,
            'name' => $request->name,
            'preview_name' => htmlspecialchars($request->previewname),
            'slug' => strtolower($request->slug),
            'external_link' => $request->externallink,
            'description' => htmlspecialchars($request->description),
        ]);
        if ($request->hasFile('catalogue_image')&& $request->file('catalogue_image')->isValid()) {
            $file=$this->handlefile($request->catalogue_image, $this->catlog_path);
            $tyre->catalogue_image=$file;
            $tyre->save();
        }
        if ($request->hasFile('product_images')&& $request->file('product_images')->isValid()) {
            $files=[];
            foreach($request->product_images as $key=>$value){
                $file=$this->handlefile($value, $this->other_path);
                $files[]=$file;
            }
            $tyre->product_images=json_encode($files);
            $tyre->save();
        }
        $t_icon=[];
        foreach ($request->icon as $key => $value) { 
            $t_icon[$value]=['kram'=>$key];
        }
        $tyre->icons()->sync($t_icon);
        
        $t_cat=[];
        foreach ($request->tyrecategory as $key => $value) {
            $t_cat[$value]=['kram'=>$key];
        }
        $tyre->tyre_categories()->sync($t_cat);
        
        return redirect()->back();
    }
    
    /**
     * Update the size of specified resource in storage.
     */
    public function size(Request $request, Tyre $tyre)
    {
        if($request->method()==='GET'){
            $tyre_sizes_array=json_decode( $tyre->sizes, true );
            if (!empty($tyre_sizes_array['sizes'])) {
                $old_file=$this->createfile($tyre_sizes_array['sizes'], $tyre->slug, array_keys($tyre_sizes_array['sizes'][0]));
            }else{
                $old_file='No-File.xlsx';
            }
            return view('admin.tyre.size', compact('tyre', 'old_file'));
            //dd($old_file);						
        }
        if($request->method()=='POST'|| $request->method()=='PUT'){
            $request->validate([
                'sizes' => ['file','mimes:xlsx','max:6024'],
                'extra_cols'=>['array'],
                'extra_cols.*'=>['string'],
                'legends'=>['string']
            ]);
            $tyre_array=json_decode($tyre->sizes,true);
            $tyre_sizes=$tyre_array['sizes'];
            $tyre_extra_cols=$tyre_array['extra_cols'];
            $tyre_legends=$tyre_array['legends'];
            
            $extra_cols_object=[
                "s_w"=>"S.W.",
	            "weather"=>"Weather",
	            "fuel"=>"Fuel",
	            "noise_db"=>"Noise",
	            "eulabel"=>"EU Label",
            ];
            $request_extra_cols=[];
            foreach ($request->extra_cols as $key => $value) {
                if (array_key_exists($value, $extra_cols_object)) {
                    $request_extra_cols[$value]=$extra_cols_object[$value];
                }
            }
            if($request_extra_cols!==$tyre_extra_cols){
                $tyre_array['extra_cols']=$request_extra_cols;
            }
            if(htmlspecialchars($request->legends)!==$tyre_legends){
                $tyre_array['legends']=htmlspecialchars($request->legends);
            }
            if ($request->hasFile('sizes')&& $request->file('sizes')->isValid()) {
                $sizes=$this->readxlfile($request->sizes);
                //dd($sizes);
                if ($tyre_array['sizes']!==$sizes) {
                    $tyre_array['sizes']=$sizes;
                }
            }
            
            $tyre_array=json_encode($tyre_array);
            $tyre->sizes=$tyre_array;
            $tyre->save();
            
            return back()->with('status','Data Updated.');
            
        }
    }
    
    /**
     * Update the clone of specified resource in storage.
     */
    public function clone(Request $request, Tyre $tyre)
    {
            $new_tyre = $tyre->replicate();
            $new_tyre->slug = $tyre->slug.'-1';
            $new_tyre->created_at = Carbon::now();
            $new_tyre->save();

            $new_tyre->icons()->sync($tyre->icons);
            $new_tyre->tyre_categories()->sync($tyre->tyre_categories);
            return redirect()->route('admin.tyre.edit', [ 'tyre' =>$new_tyre->id]);
    }
    
    /**
     * Update the clone of specified resource in storage.
     */
    public function tyrereorder(Request $request)
    {
        $input_data=[
            'country'=>'',
            'brand'=>'',
            'searchtag'=>'',
        ];
        $tyres=[];

        $country=Country::all()->pluck('name','id')->map(function (string $item, string $key) {
            return strtoupper($item);
        });
        $brand=Brand::all()->pluck('name','id')->map(function (string $item, string $key) {
            return strtoupper($item);
        });
        $searchtag=SearchTag::all()->pluck('name','id');
        
        if($request->method()==='POST'){
            $input = $request->only(['country', 'brand', 'searchtag']);
            $input_data=[
                'country'=>$input['country'],
                'brand'=>$input['brand'],
                'searchtag'=>$input['searchtag'],
            ];
            $tyres=Tyre::where(['country_id'=>$input['country'],'brand_id'=>$input['brand'],'search_tag_id'=>$input['searchtag']])->orderBy('order')->pluck('name','id');
        }
        return view('admin.tyre.reorder',compact('country','brand','searchtag', 'input_data', 'tyres'));
        
    }

    /**
     * Update the size of specified resource in storage.
     */
    public function feature(Request $request, Tyre $tyre)
    {
        if($request->method()==='GET'){
            return view('admin.tyre.feature', compact('tyre'));
        }
        if($request->method()=='POST'|| $request->method()=='PUT'){
            $request->validate([
                'title' => ['array'],
                'title.*' => ['required','string','max:6024'],
                'description' => ['array'],
                'description.*' => ['required','string','max:6024'],
                'image' => ['array'],
                'image.*' => ['file','mimes:webp,jpg,png','max:6024'],
            ]);
            $f=json_decode($tyre->features_benifits,true);
            $req_f=[];
            foreach ($request->title as $key => $value) {
                $req_f[$key]['title']=htmlspecialchars($value);
                $req_f[$key]['description']=htmlspecialchars($request->description[$key]);
                if(array_key_exists($key,$request->image)){
                    $req_f[$key]['image']=$this->handlefile($request->image[$key],$this->feature_path);
                }else{
                    $req_f[$key]['image']=$f[$key]['image'];
                }
            }
            //Update tyre
            $tyre_array=json_encode($req_f);
            $tyre->features_benifits=$tyre_array;
            $tyre->save();
            
            return back()->with('status','Data Updated.');
            
        }
    }

    // Read uploaded xl file
    public function readxlfile( $file )
    {
        $inputFileType = 'Xlsx';
        $inputFileName = $file;
        $sheetname = 'sizes';
        $reader = IOFactory::createReader($inputFileType);
        $reader->setLoadSheetsOnly($sheetname);
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($inputFileName);
        $worksheet = $spreadsheet->getActiveSheet();
        // Get the highest row and column numbers referenced in the worksheet
        $highestRow = $worksheet->getHighestRow(); // e.g. 10
        $highestColumn = $worksheet->getHighestColumn();//$worksheet->getHighestColumn(); // 'I';e.g 'F'


        $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
        

        $headingsArray = $worksheet->rangeToArray('A1:' . $highestColumn . '1', null, false, false, false);

        $headingsArray = $headingsArray[0];
        foreach ($headingsArray as $key => $value) {
            if ($value==null) {
                unset($headingsArray[$key]);
            }
        }
        $atoz=range('A', 'Z');
        $highestColumn=$atoz[count($headingsArray)-1];
        
        $namedDataArray = array();
        $sizes=array();
        for ($row = 2; $row <= $highestRow; ++$row) {
            $rowa=$worksheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, null, false, false, false);
            $rowa=$rowa[0];
            if ($rowa[0]!==null || $rowa[1]!==null) {
                foreach ($headingsArray as $columnKey => $columnHeading) {
                    if ($columnKey=='name') {
                        continue;
                    }
                    $namedDataArray[$columnHeading] = $rowa[$columnKey];
                }
                $sizes[]=$namedDataArray;
            }
        }
        return $sizes;
    }
    //Create file to download
    public function createfile( $data , $filename, $headerkeys=null )
	{        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('sizes');
        $startrow=1;
        if ($headerkeys!=null) {
            $startrow=2;
            array_unshift($headerkeys,'name');
            $sheet->getStyle('A1:Z1')->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('ffff00');
            $a2z=array_combine(range(0, 25), range('A', 'Z'));
            $a2keys=array();
            foreach ($headerkeys as $key => $value) {
                $row=1;
                $a2keys[$a2z[$key]]=$value;
                $sheet->setCellValue($a2z[$key].$row, $value);
            }
        }

        foreach($data as $key => $domain) {
          $row = (int)$key+$startrow;
          foreach ($a2keys as $key => $value) {
            $cellval = $key!=='A' ? $domain[$value] : $filename;
            if ($value=='lr' && $domain[$value]==null) {
                $cellval='- ';
            }
            $sheet->setCellValue($key.$row, $cellval);
          } 
        }

        $writer = new Xlsx($spreadsheet);
        $filename = $filename.'.xlsx';
        $writer->save('./xlsx/'.$filename);
        return $filename;
	}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tyre $tyre)
    {
        if($tyre->id){
            $tyre->icons()->detach();
            $tyre->tyre_categories()->detach();
            $tyre->delete();
            return redirect()->route('admin.tyre.index')->with('status','Tyre deleted');
        }
    }
}
