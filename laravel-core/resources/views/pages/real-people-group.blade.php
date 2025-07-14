<x-guest-layout>
    @push('styles') 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}"> 
    
        <style>@media screen and (max-width:767px){
            #page-title{
                    height: 200px!important;
            } 
            #page-title h2{ font-size: 20px;line-height: 1.2;}
        }</style>
    @endpush
    <!-- Implement Slider From Brand Database -->
    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ asset('images/banner--group-page.webp') }}" container="true" page-title="{!!__('realPeoplePage_intro')!!}" class="page-title--bottom el-height-70 uppercase pb-3" />
    
    <!-- Content -->
    <section id="content" class="pb-4">
        <div class="container">
            <div class="grid">
                <div class="col-md-12 col-bleed-y mb-4">
                    <h3 class="no-top-margin dark-100">{{ __("realPeoplePage_passion")}}</h3>
                    <p>{{ __("realPeoplePage_commitment")}}</p>
                </div>
            </div>
            
            <div class="grid grid-bleed align-center">
                <div class="col-md-6 col-sm-12">
                    <a href="{{ safeRoute('pages.olli-seppala') }}">
                        <img src="{{asset('images/Olli.webp')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="ma-xxs-2 ma-xs-2 ma-sm-2 ma-md-2 mx-lg-7">
                        <h3 class="dark-100  no-top-margin">{{ __("realPeoplePage_rdHeading") }}</h3>
                        <p>{{ __("realPeoplePage_rdDescription") }}<br><a class="knopf link red heading-font sharp ls-1" href="{{ safeRoute('pages.olli-seppala') }}">{{ __("READ MORE") }}</a></p>
                        <a class="knopf red heading-font sharp ls-1" href="https://youtu.be/LVP-xecALQk" target="_blank">{{__('WATCH VIDEO')}}</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-bleed align-center">
                <div class="col-md-6 col-sm-12 order-md-2" >
                    <a href="{{ safeRoute('pages.stephane-clepkens') }}">
                        <img src="{{asset('images/Stephane.webp')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="ma-xxs-2 mx-lg-7">
                        <h3 class="dark-100  no-top-margin">{{ __("realPeoplePage_testingHeading") }}</h3>
                        <p>{{ __("realPeoplePage_testingDescription") }} <br><a class="knopf link red heading-font sharp ls-1" href="{{ safeRoute('pages.stephane-clepkens') }}">{{ __("READ MORE") }}</a></p>
                        <a class="knopf red heading-font sharp ls-1" href="https://youtu.be/WiIYifeGdIY" target="_blank">{{__('WATCH VIDEO')}}</a>
                        <!-- <h5 class="black">DIMAX SPORT | DIMAX SPRINT | DIMAX ALL SEASON | DIMAX WINTER</h5> -->
                    </div>
                </div>
            </div>
            <div class="grid grid-bleed align-center">
                <div class="col-md-6 col-sm-12">
                    <a href="{{ safeRoute('pages.fabrizio-giugiaro') }}">
                        <img src="{{asset('images/Fabrizio.webp')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="ma-xxs-2 ma-xs-2 ma-sm-2 ma-md-2 mx-lg-7">
                        <h3 class="dark-100  no-top-margin">{{ __("realPeoplePage_designHeading") }}</h3>
                        <p>{{ __("realPeoplePage_designDescription") }} <br><a class="knopf link red heading-font sharp ls-1" href="{{ safeRoute('pages.fabrizio-giugiaro') }}">{{ __("READ MORE") }}</a></p>
                        <a class="knopf red heading-font sharp ls-1" href="https://youtu.be/oGc5hAfOeIA" target="_blank">{{__('WATCH VIDEO')}}</a>
                        <!-- <h5 class="black">DIMAX SPORT | DIMAX SPRINT | DIMAX ALL SEASON | DIMAX WINTER</h5> -->
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-12 col-bleed-y mt-4">
                    <p>{{ __("realPeoplePage_closing") }}
                    </p>
                </div>
            </div>


        </div>
        <div class="section no-padding">
        </div>
        
    </section>
    
</x-guest-layout>