@props(['imageUrl'=>'','pageTitle'=>'','pageSubTitle'=>''])
            
<!-- Page Title Module -->
<section id="page-title" style="background-image: url({{ $imageUrl }})">
    <div class="page-title-wrapper">
        <h2>{{$pageTitle}}</h2>
        @if ($pageSubTitle)
            <p >{{$pageSubTitle}}</p>
        @endif
    </div>
</section>