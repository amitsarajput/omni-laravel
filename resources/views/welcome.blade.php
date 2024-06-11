<x-guest-layout>
    @push('styles') 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    @endpush
    <!-- Slider main container -->
    <section class="slider">
        <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" >
                    <!-- Slides -->
                    <a href="#" class="swiper-slide bg-image" style="background-image:url(images/slides/radar-eu-banner-renegade-at-sport.webp)"></a>
                    <a href="# class="swiper-slide bg-image" style="background-image:url(images/slides/radar-eu-carbon-neutral-banner.webp)"></a>
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
        <div class="section bg-gray">
			<div class="container">
				<div class="grid">
					<div class="col-6">
					    <p>Radar Tires is the flagship brand of Omni United and offers a unique value proposition in its segment. In the passenger and light truck segment the brand offers a vast and varied range of tires that are made for all seasons, applications and different types of vehicles that cater to different requirements and interests of drivers.</p>
					    <p>Radar Tires are designed in Singapore by our in-house design team and utilize the latest equipment, materials and manufacturing processes. This makes our fitments universal, so drivers can choose the right set of tires for their unique driving styles and requirements, knowing that these choices are backed by world-class engineering and manufacturing capabilities.</p>
					</div>
					<div class="col-6">
					    <p>Being one of the most reliable brands in the market, Radar Tires are manufactured in compliance with the highest regulatory certifications and utilize PAH-free oils in their compounds to comply with stringent European standards. In addition to this, the brand has always been committed to being socially responsible and has been manufactured carbon neutral since 2013. Radar Tires has also supported the Breast Cancer Research Foundation (BCRF) since 2011 and to date has donated close to $1.4 million, funding close to 28,000 hours of critical life-saving research.</p>
					</div>
				</div>
			</div>
        </div>
        
        <div class="container "><h2 class="center uppercase black">Search By</h2></div>
        <div class="container ">
            <div id="tabs">
                <ul>
                    @foreach ($search_tags as $search_tag)
                        <li><a href="#tabs-{{ $search_tag->slug }}"><i class="{{ $search_tag->icon->class }}"></i>{{ $search_tag->name }}</a></li>
                    @endforeach
                </ul>
                @foreach ($search_tags as $search_tag)
                    <div id="tabs-{{ $search_tag->slug }}">
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