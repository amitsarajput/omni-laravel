<x-guest-layout>
    @push('styles') 
        <style>@media screen and (max-width:767px){
            #page-title{
                    height: 200px!important;
            } 
            #page-title h2{ font-size: 20px;line-height: 1.2;}
        }</style>
    @endpush
    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ asset('images/banner--group-page.webp') }}" container="true" page-title="{!!__('fabrizioGiugiaro__pgTitle')!!}" class="page-title--bottom el-height-70 uppercase pb-3" />
    
    <!-- Content
    ============================================= -->
    <section id="content" class="pb-4">
        <div class="container">
            <div class="grid">
                <div class="col-md-12 col-bleed-y  mb-4">
                    <h3 class="no-top-margin dark-100 uppercase">{{ __("fabrizioGiugiaro__gfgRadarcollabHeading") }}</h3>
                    <p>{{ __("fabrizioGiugiaro__gfgRadarcollabText") }}</p>
                </div>

                <div class="col-md-12 col-bleed-y  mb-4">
                    <h3 class="no-top-margin dark-100 uppercase">{{ __("fabrizioGiugiaro__intro") }}</h3>
                    <p>{{ __("fabrizioGiugiaro__meetFabrizio") }}</p>
                </div>
            </div>
            
            <div class="grid grid-bleed align-center">
                <div class="col-md-6 col-sm-12 mb-4">
                        <img src="{{asset('images/Fabrizio.webp')}}" alt="">
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="ma-xxs-2 ma-xs-2 ma-sm-2 ma-md-2 mx-lg-3">
                        <h3 class="dark-100  no-top-margin uppercase">{{ __("fabrizioGiugiaro__designPerformance") }}</h3>
                        <p>{{ __("fabrizioGiugiaro__collaboration") }}</p>
                        <p>{{ __("fabrizioGiugiaro__designPhilosophy") }}</p>
                        <a class="knopf red heading-font sharp ls-1" href="https://youtu.be/oGc5hAfOeIA" target="_blank">{{ __("WATCH VIDEO") }}</a>
                        <!-- <h5 class="black">DIMAX SPORT | DIMAX SPRINT | DIMAX ALL SEASON | DIMAX WINTER</h5> -->
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("fabrizioGiugiaro__functionInnovation") }}</h4>
                    <p>{{ __("fabrizioGiugiaro__designProcess") }}</p>
                    <p>{{ __("fabrizioGiugiaro__detailFocus") }}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("fabrizioGiugiaro__luxuryAccessibility") }}</h4>
                    <p>{{ __("fabrizioGiugiaro__designMission") }}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("fabrizioGiugiaro__globalDesign") }}</h4>
                    <p>{{ __("fabrizioGiugiaro__marketUnderstanding") }}</p>
                    <p>{{ __("fabrizioGiugiaro__visualIdentity") }}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("fabrizioGiugiaro__identityCrafting") }}</h4>
                    <p>{{ __("fabrizioGiugiaro__stylingLanguage") }}</p>
                    <p>{{ __("fabrizioGiugiaro__inspiredSeries") }}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("fabrizioGiugiaro__futureTyreDesign") }}</h4>
                    <p>{{ __("fabrizioGiugiaro__advancingVehicles") }}</p>
                    <p>{{ __("fabrizioGiugiaro__futureVision") }}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("fabrizioGiugiaro__designDemocratisation") }}</h4>
                    <p>{{ __("fabrizioGiugiaro__designAccessibility") }}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("fabrizioGiugiaro__industryLegacy") }}</h4>
                    <p>{{ __("fabrizioGiugiaro__partnershipVision") }}</p>
                    <p>{{ __("fabrizioGiugiaro__industryImpact") }}</p>
                </div>
            </div>
        </div>

    </section><!-- #content end -->
</x-guest-layout>