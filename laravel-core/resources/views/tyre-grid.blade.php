<x-guest-layout>
    @push('styles') 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    @endpush
    <!-- Implement Slider From Brand Database -->
    <!-- Slider main container -->
    <section class="slider">
        <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" >
                    <!-- Slides -->
                    <a href="#" class="swiper-slide bg-image" style="background-image:url(images/slides/radar-eu-banner-renegade-at-sport.webp)"></a>
                    <a href="#" class="swiper-slide bg-image" style="background-image:url(images/slides/radar-eu-carbon-neutral-banner.webp)"></a>
                    <div class="swiper-slide bg-image" style="background-image:url(images/slides/RadarEU_Performance-Collection.webp)"></div>
                    <div class="swiper-slide bg-image" style="background-image:url(images/slides/RadarEU_BCRF-Banner_1920x950.webp)"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <a href="#" data-scrollto="#content" data-offset="70" class="light one-page-arrow">
                    <i class="icon-angle-down infinite animate__animated animate__fadeInDown animate__infinite"></i>
                </a>
        </div>
    </section>
    <section id="content">
        <div class="section no-padding">
            <div class="grid grid-bleed align-center">
                <div class="col-6">
                    <img src="{{asset('images/tyre-grid/premium-col.jpg')}}" alt="Premium Collection">
                </div>
                <div class="col-6">
                    <div class="ml-7 mr-7">
                        <h5>PREMIUM COLLECTION</h5>
                        <h2 class="dark-100 mt-0">WORLDWIDE PROVEN SAFETY
                        AND PERFORMANCE</h2>
                    </div>
                </div>
            </div>
            <div class="grid grid-bleed align-center">
                <div class="col-6">
                    <div class="ml-9 mr-9">
                        <h5>WHY RADAR</h5>
                        <h2 class="dark-100 mt-0">THE SAME HIGH
                        PERFORMANCE, SAFETY AND
                        DURABILITY, BUT WITHOUT
                        THE HEFTY PRICE TAG</h2>
                        <a  class="knopf red heading-font sharp ls-1" href="#">READ MORE</a>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{asset('images/tyre-grid/wet-braking.jpg')}}" alt="Wet Braking">
                </div>
            </div>
        </div>
        <!-- Implement This Text From Brand Database -->
        <!-- <div class="section bg-gray">
			<div class="container">
				<div class="grid">
					<div class="col-12">
                        @foreach( $branddetailstext as $text)
                        <p>{{ __($text) }}</p>
                        @endforeach
                    </div>
				</div>
			</div>
        </div> -->
        
        <div class="container "><h2 class="center uppercase black mb-2">TYRES</h2></div>
        <div class="container ">
            <div id="tabs" class="navs-with-text">
                <div class="tabs-navigation">
                    <div class="tabs-navigation--title">
                        <h6 class="uppercase">vehicle type</h6>
                    </div>
                    <ul >
                        @foreach ($search_tags as $search_tag)
                            <li><a href="#tabs-{{ $search_tag->slug }}"><i class="{{ $search_tag->icon->class }}"></i>{{ $search_tag->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @foreach ($search_tags as $search_tag)
                    <div id="tabs-{{ $search_tag->slug }}">
                        <div class="t-season-nav">
                            <div class="t-season-nav--title">
                                <h6 class="uppercase">Season</h6>
                            </div>
                            <ul class="t-season--tabs-nav">
                                <li class="t-season--tabs-tab"><a href="#"><i class="omniicon-car-3"></i> Summer</a></li>
                                <li class="t-season--tabs-tab t-season--tabs-tab-active"><a href="#"><i class="omniicon-car-3"></i> All Season</a></li>
                                <li class="t-season--tabs-tab"><a href="#"><i class="omniicon-car-3"></i> Winter</a></li>
                            </ul>
                        </div>
                        @php
                            $filtered = $tyres->where('search_tag_id', $search_tag->id);
                        @endphp
                        <x-tyre-grid :tyres='$filtered' />
                    </div>
                @endforeach
                
            </div>
        </div>
        <div class="section  bg-gray">
            <div class="container">
                <div class="center">
                    <h2 class="uppercase center">Responsibility</h2>
                </div>
                <div class="grid">
                    <div class="col-lg-6"> 
                        <x-image-box 
                            title="Social Responsibility" 
                            image="https://www.omni-united.com/assets/img/products/social-responsibility.webp" 
                            url="https://www.omni-united.com/social-responsibility" />
                    </div>
                    <div class="col-lg-6">
                        <x-image-box 
                            title="Environmental Responsibility" 
                            image="https://www.omni-united.com/assets/img/products/environmental-responsibility.webp" 
                            url="https://www.omni-united.com/environmental-responsibility" />

                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')  
    <!-- Swiper JS -->
    <script src="{{asset('js/swiper/swiper-bundle.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    
    <script type="text/javascript">
        $( function() {
            $( "#tabs" ).tabs();
        } );
        const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
    @endpush
</x-guest-layout>