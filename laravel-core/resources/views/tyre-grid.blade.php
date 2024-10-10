<x-guest-layout>
    @push('styles') 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    @endpush
    <!-- Implement Slider From Brand Database --><!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ asset('images/tyre-grid-banner.webp') }}" container="true" page-title="EVERYONE SHOULD HAVE THE RIGHT<br>TO ACCESS PREMIUM TYRES AT<br>AFFORDABLE PRICES" button="true" button-text="READ MORE ABOUT RADAR TYRES" button-Link='#' class="page-title--left el-height-60 uppercase mb-0" />
    
    
    <!-- Content -->
    <section id="content">
        <div class="section no-padding">
            <div class="grid grid-bleed align-center">
                <div class="col-6">
                    <img src="{{asset('images/tyre-grid/premium-col.jpg')}}" alt="Premium Collection">
                </div>
                <div class="col-6">
                    <div class="ml-7 mr-7">
                        <h5>PREMIUM COLLECTION</h5>
                        <h2 class="dark-100 mt-0">ACCESSIBLE PREMIUM<br>PERFORMANCE</h2>
                        <h5 class="black">DIMAX SPORT | DIMAX SPRINT | DIMAX ALL SEASON | DIMAX WINTER</h5>
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
                        @if($branddetailstext)
                            @foreach( $branddetailstext as $text)
                            <p>{{ __($text) }}</p>
                            @endforeach
                        @endif
                    </div>
				</div>
			</div>
        </div> -->
        <!-- Tyres widget -->
        <div class="section bg-white no-padding" id="tyres">
            <div class="container "><h2 class="center uppercase black mb-2">TYRES</h2></div>
            <div class="container ">
                <div id="tabs" class="navs-with-text">
                    <div class="tabs-navigation">
                        <div class="tabs-navigation--title">
                            <h6 class="uppercase">vehicle type</h6>
                        </div>
                        <ul >
                            @foreach ($search_tags as $search_tag)
                                @if($search_tag->external_link)
                                    <li><a href="{{ $search_tag->external_link }}"><i class="{{ $search_tag->icon->class }}"></i>{{ $search_tag->name }}</a></li>
                                @else
                                    <li><a href="#tabs-{{ $search_tag->slug }}"><i class="{{ $search_tag->icon->class }}"></i>{{ $search_tag->name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    @foreach ($search_tags as $search_tag)
                        <div id="tabs-{{ $search_tag->slug }}">
                            @php
                                $filtered = $tyres->where('search_tag_id', $search_tag->id);
                                $collect=collect($filtered);
                                $total_season=$collect->pluck('season_id')->unique();
                                $show_season_menu=true;
                                if(count($total_season)<=1){$show_season_menu=false;}
                                //print_r($total_season);
                            @endphp
                            
                            @foreach ($seasons as $oneseason)
                                <div id="{{$search_tag->slug.'-'.$oneseason->slug}}">
                                    @php
                                        $season_tyres = $filtered->where('season_id', $oneseason->id);
                                    @endphp
                                    @if(count($season_tyres))
                                        <x-season-navs :seasons="$seasons" :parentel="$search_tag->slug" :active="$oneseason" :show="$show_season_menu"/>
                                        <x-tyre-grid :tyres='$season_tyres' />
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>

        <!-- Dealer locator widget -->
        <div class="section bg-white pt-0" id="dealer-locator">
            <div class="container">
                <h2 class="uppercase center dark-100 mb-2">DEALER LOCATOR</h2>
                
                <div class="grid align-center">
                    <div class="col-12">
						<x-dealer-locator-widget />
                    </div>
                </div>
                
                <div id="dealerform" >
                    <x-dealer-locator-form />
                </div>
                
            </div>
        </div>
        <!-- Responsibility -->
        <div class="section  bg-gray" id="responsiblity">
            <div class="container">
                <div class="grid">
                    <div class="col-12">
                        <div class="center">
                            <h2 class="uppercase center dark-100 mb-2">OUR COMMITMENT TO THE ENVIRONMENT AND COMMUNITY</h2>
                        </div>
                    </div>
                </div>
                
                <div class="grid align-center">
                    <div class="col-6 col-bleed">
                        <img src="{{asset('images/tyre-grid/social-responsibility.jpg')}}" alt="Social Responsibility">
                    </div>
                    <div class="col-6">
                        <div class="ml-2">
                            <h5 class="dark-100 mt-0 uppercase">SOCIAL RESPONSIBILITY</h5>
                            <p>We have always believed in giving back and this is one of the pillars that Radar Tyres has been built on. It was these beliefs that led us to partner with the Breast Cancer Research Foundation (BCRF) in 2011, the leading and highest-rated breast cancer organisation in the US. We have been supporting BCRF in their mission to prevent and cure breast cancer by advancing the world’s most promising research.</p>
                            <a class="knopf red heading-font sharp ls-1" href="https://www.omni-united.com/social-responsibility">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="grid align-center">
                    <div class="col-6">
                        <div class="mr-2">
                            <h5 class="dark-100 mt-0 uppercase">ENVIRONMENT</h5>
                            <p>We continually strive to minimize our impact through sustainable practices. By late 2013, Radar Tyres became the first carbon-neutral tyre brand. We have extended this commitment to carbon neutrality from cradle to grave for certain products and geographies, aiming to remain carbon neutral until 2030, in line with requirements of PAS 2060.</p>
                            <a class="knopf red heading-font sharp ls-1" href="https://www.omni-united.com/environmental-responsibility">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-6 col-bleed">
                        <img src="{{asset('images/tyre-grid/environmental-responsibility.jpg')}}" alt="Environmental Responsibility">
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
            //$( "#tabs" ).tabs();
            $( "#tabs" ).tabs({
                collapsible: true,
                active : false,
                beforeActivate: function (event, ui) {
                    if( $(ui.newTab).find('a').attr('href').indexOf('#') != 0 ){ //check if it is hash link
                        window.open($(ui.newTab).find('a').attr('href'), '_blank');
                    }
                    }
                });
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