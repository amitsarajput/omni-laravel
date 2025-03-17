<x-guest-layout>
    @push('styles') 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    @endpush
    <!-- Implement Slider From Brand Database -->
    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ asset('images/banner--group-page.webp') }}" container="true" page-title="REAL PEOPLE, REAL PERFORMANCE<br>– THE EXPERTS BEHIND RADAR TYRES" class="page-title--bottom el-height-70 uppercase pb-3" />
    
    <!-- Content -->
    <section id="content" class="pb-4">
        <div class="container">
            <div class="grid">
                <div class="col-md-12 col-bleed-y mb-4">
                    <h3 class="no-top-margin dark-100">At Radar Tyres, we believe that premium performance isn’t just about technology—it’s about the people who push the limits of innovation, safety and design</h3>
                    <p>Our commitment to making high-quality tyres accessible to all is driven by the expertise of world-class professionals who ensure every tyre meets the highest standards.</p>
                </div>
            </div>
            
            <div class="grid grid-bleed align-center">
                <div class="col-md-6 col-sm-12">
                    <a href="{{ route('pages.olli-seppala') }}">
                        <img src="{{asset('images/Olli.webp')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="ma-xxs-2 ma-xs-2 ma-sm-2 ma-md-2 mx-lg-7">
                        <h3 class="dark-100  no-top-margin">{{ __("CUTTING-EDGE R&D") }}</h3>
                        <p>Olli Seppälä, Head of R&D, leads the charge in engineering tyres that combine state-of-the-art materials and advanced manufacturing techniques. His vision is to deliver premium quality through a global network—without the premium price. <br><a class="knopf link red heading-font sharp ls-1" href="{{ route('pages.olli-seppala') }}">READ MORE</a></p>
                        <a class="knopf red heading-font sharp ls-1" href="{{ route('pages.why-radar') }}">WATCH VIDEO</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-bleed align-center">
                <div class="col-md-6 col-sm-12 order-md-2" >
                    <a href="{{ route('pages.stephane-clepkens') }}">
                        <img src="{{asset('images/Stephane.webp')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="ma-xxs-2 mx-lg-7">
                        <h3 class="dark-100  no-top-margin">{{ __("TESTING EXCELLENCE") }}</h3>
                        <p>Test driver Stephane Clepkens pushes every Radar tyre to the limit, rejecting anything that doesn’t outperform expectations. His mission? To ensure Radar Tyres rival and even surpass premium brands in real-world performance. <br><a class="knopf link red heading-font sharp ls-1" href="{{ route('pages.stephane-clepkens') }}">READ MORE</a></p>
                        <a class="knopf red heading-font sharp ls-1" href="{{ route('pages.why-radar') }}">WATCH VIDEO</a>
                        <!-- <h5 class="black">DIMAX SPORT | DIMAX SPRINT | DIMAX ALL SEASON | DIMAX WINTER</h5> -->
                    </div>
                </div>
            </div>
            <div class="grid grid-bleed align-center">
                <div class="col-md-6 col-sm-12">
                    <a href="{{ route('pages.fabrizio-giugiaro') }}">
                        <img src="{{asset('images/Fabrizio.webp')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="ma-xxs-2 ma-xs-2 ma-sm-2 ma-md-2 mx-lg-7">
                        <h3 class="dark-100  no-top-margin">{{ __("ICONIC DESIGN") }}</h3>
                        <p>Legendary automotive designers Giorgetto and Fabrizio Giugiaro (GFG Style) bring the same ethos of luxury car design to Radar Tyres. Their philosophy? High-end aesthetics and performance shouldn’t be reserved for a select few but should be accessible to every driver. <br><a class="knopf link red heading-font sharp ls-1" href="{{ route('pages.fabrizio-giugiaro') }}">READ MORE</a></p>
                        <a class="knopf red heading-font sharp ls-1" href="{{ route('pages.why-radar') }}">WATCH VIDEO</a>
                        <!-- <h5 class="black">DIMAX SPORT | DIMAX SPRINT | DIMAX ALL SEASON | DIMAX WINTER</h5> -->
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-12 col-bleed-y mt-4">
                    <p>With their passion and expertise, Radar Tyres is redefining what it means to drive on premium tyres —delivering world-class quality, safety, and style at a price that’s within reach. Because real performance starts with real people.
                    </p>
                </div>
            </div>


        </div>
        <div class="section no-padding">
        </div>
        
    </section>
    
</x-guest-layout>