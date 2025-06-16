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
    <x-page-title image-url="{{ asset('images/banner--group-page.webp') }}" container="true" page-title="{!!__('stephaneClepkensPage__pgTitle')!!}" class="page-title--bottom el-height-70 uppercase pb-3" />
    
    <!-- Content
    ============================================= -->
    <section id="content" class="pb-4">
        <div class="container">
            <div class="grid">
                <div class="col-md-12 col-bleed-y  mb-4">
                    <h3 class="no-top-margin dark-100 uppercase">{{ __("stephaneClepkensPage__intro") }}</h3>
                    <p>{!! __("stephaneClepkensPage__background") !!}</p>
                </div>
            </div>
            
            <div class="grid grid-bleed align-center">
                <div class="col-md-6 col-sm-12 order-md-2 mb-4" >
                    <a href="{{ route('pages.stephane-clepkens') }}">
                        <img src="{{asset('images/Stephane.webp')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="ma-xxs-2 mx-lg-3">
                        <h3 class="dark-100  no-top-margin uppercase">{{ __("stephaneClepkensPage__careerStart") }}</h3>
                        <p>{!! __("stephaneClepkensPage__experience") !!}</p>
                        <a class="knopf red heading-font sharp ls-1" href="https://youtu.be/WiIYifeGdIY" target="_blank">{!! __("WATCH VIDEO") !!}</a>
                        <!-- <h5 class="black">DIMAX SPORT | DIMAX SPRINT | DIMAX ALL SEASON | DIMAX WINTER</h5> -->
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("stephaneClepkensPage__radarJoining") }}</h4>
                    <p>{{ __("stephaneClepkensPage__radarDecision")}}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("stephaneClepkensPage__testingPhilosophy") }}</h4>
                    <p>{{ __("stephaneClepkensPage__realWorldTesting") }}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("stephaneClepkensPage__redefiningPremium") }}</h4>
                    <p>{{ __("stephaneClepkensPage__premiumCommitment") }} </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("stephaneClepkensPage__safetyFocus") }}</h4>
                    <p>{{ __("stephaneClepkensPage__safetyMission") }}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("stephaneClepkensPage__futureVision") }}</h4>
                    <p>{{ __("stephaneClepkensPage__continuedLearning") }}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100 uppercase">{{ __("stephaneClepkensPage__radarChoice") }}</h4>
                    <p>{{ __("stephaneClepkensPage__radarCommitment") }}</p>
                </div>
                
            </div>
        </div>

    </section><!-- #content end -->
</x-guest-layout>