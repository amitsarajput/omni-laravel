@props(['tyres'])
<div {{ $attributes->merge(['class' => 'tyres-showcase']) }}>
    @foreach ($tyres as $tyre)
        <div class="tyre {{ $tyre->premium_tyre?'premium_tyre':'' }}">
            <h3 class="title">
                <a href="{{url($tyre->country->slug.'/'.$tyre->brand->slug.'/'.$tyre->slug)}}">
                    {!! htmlspecialchars_decode($tyre->preview_name) !!}
                </a>
            </h3>
            
            <div class="meta">{{ implode(" | ", $tyre->tyre_categories->pluck('name')->toArray()) }}</div>
            @if($tyre->premium_tyre)
                <div class="premium-tyre--badge">PREMIUM COLLECTION</div>
            @endif
            <div class="image">
                <a href="{{url($tyre->country->slug.'/'.$tyre->brand->slug.'/'.$tyre->slug)}}">
                    <img 
                        data-src="{{asset('storage/tire_images/'.$tyre->catalogue_image)}}" 
                        src="{{asset('storage/tire_images/'.$tyre->catalogue_image)}}" 
                        alt="{{ $tyre->name }}" class="lozad"  data-loaded="true" >
                </a>
            </div>
            <!-- Read more button -->
            <a class="tyre--readmore" href="{{url($tyre->country->slug.'/'.$tyre->brand->slug.'/'.$tyre->slug)}}">READ MORE  <x-icon-tyre-line-2 /><x-icon-right-angle-arrow class="arrow"/></a>
        </div>
    @endforeach
</div>