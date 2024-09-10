@props(['imageUrl'=>'','pageTitle'=>'','pageSubTitle'=>'','container'=>false])
            
<!-- Page Title Module -->
<section id="page-title" {{ $attributes->merge(['class' => '']) }} style="background-image: url({{ $imageUrl }})">
    @if ($container)
    <div class="container">
        <div class="grid">
    @endif
        <div class="page-title-wrapper">
            <h2>{!! $pageTitle !!}</h2> 
            @if ($pageSubTitle)
                <p >{{$pageSubTitle}}</p>
            @endif
        </div>
    @if ($container)
        </div>
    </div>
    @endif
</section>