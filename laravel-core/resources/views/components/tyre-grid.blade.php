@props(['tyres'])
<div {{ $attributes->merge(['class' => 'tyres-showcase']) }}>
    @foreach ($tyres as $tyre)
        <div class="tyre">
            <h3 class="title">
                <a href="{{url($tyre->brand->slug.'/'.$tyre->slug)}}">
                    {!! htmlspecialchars_decode($tyre->preview_name) !!}
                </a>
            </h3>
            
            <div class="meta">{{ implode(" | ", $tyre->tyre_categories->pluck('name')->toArray()) }}</div>
            <div class="image">
                <a href="{{url($tyre->brand->slug.'/'.$tyre->slug)}}">
                    <img 
                        data-src="{{asset('storage/tire_images/'.$tyre->catalogue_image)}}" 
                        src="{{asset('storage/tire_images/'.$tyre->catalogue_image)}}" 
                        alt="{{ $tyre->name }}" class="lozad"  data-loaded="true" >
                </a>
            </div>
        </div>
    @endforeach
</div>