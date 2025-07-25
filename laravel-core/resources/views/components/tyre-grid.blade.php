@props(['tyres'])
<div {{ $attributes->merge(['class' => 'tyres-showcase']) }}>
    @foreach ($tyres as $tyre)
        <div class="tyre {{ $tyre->premium_tyre?'premium_tyre':'' }}">
            <h3 class="title">
                <!-- <a href="{{url($tyre->region->slug.'/'.$tyre->region->slug.'/'.$tyre->brand->slug.'/'.$tyre->slug)}}"> -->
                <a href="{{safeRoute('tyre.single',['brand' => $tyre->brand->slug, 'tyre' => $tyre->slug])}}">
                    {!! htmlspecialchars_decode($tyre->preview_name) !!}
                </a>
            </h3>
            
            <div class="meta">{{ __(implode(" | ", $tyre->tyre_categories->pluck('name')->toArray())) }}</div>
            <div class="testfreaks-item" data-product-id="{{$tyre->slug}}"></div>
            @if($tyre->premium_tyre)
                <a href="{{route('pages.premium-collection')}}" class="premium-tyre--badge">{{__('PREMIUM COLLECTION')}}</a>
            @endif
            <div class="image {{ $tyre->region->code=='eu'?'car-n':''}}">
                <a href="{{safeRoute('tyre.single',['brand' => $tyre->brand->slug, 'tyre' => $tyre->slug])}}">
                    
                    <img 
                        data-src="{{asset('storage/tire_images/'.$tyre->catalogue_image)}}" 
                        src="{{asset('storage/tire_images/'.$tyre->catalogue_image)}}" 
                        alt="{{ $tyre->name }}" class="lozad"  data-loaded="true" >
                </a>
            </div>
            <!-- Read more button -->
            <a class="tyre--readmore" href="{{safeRoute('tyre.single',['brand' => $tyre->brand->slug, 'tyre' => $tyre->slug])}}">{{__('READ MORE')}}  <x-icon-tyre-line-2 /><x-icon-right-angle-arrow class="arrow"/></a>
        </div>
    @endforeach
</div>