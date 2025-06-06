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
    <x-page-title image-url="{{ asset('images/banner--group-page.webp') }}" container="true" page-title="{!!__('olliSeppalaPage__pgTitle')!!}" class="page-title--bottom el-height-70 uppercase pb-3" />
    
    <!-- Content
    ============================================= -->
    <section id="content" class="pb-4">
        <div class="container">
            <div class="grid">
                <div class="col-md-12 col-bleed-y  mb-4">
                    <h3 class="no-top-margin dark-100">{{ __("olliSeppalaPage__intro") }} </h3>
                    <p>{{ __("olliSeppalaPage__meetOlli") }}</p>
                </div>
            </div>
            
            <div class="grid grid-bleed align-center">
                <div class="col-md-6 col-sm-12 mb-4">
                    <a href="{{ route('pages.olli-seppala') }}">
                        <img src="{{asset('images/Olli.webp')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="ma-xxs-2 ma-xs-2 ma-sm-2 ma-md-2 mx-lg-3">
                        <h3 class="dark-100  no-top-margin">{{ __("olliSeppalaPage__careerExpertise") }}</h3>
                        <p>{{ __("olliSeppalaPage__careerJourney") }}</p>
                        <a class="knopf red heading-font sharp ls-1" href="https://youtu.be/LVP-xecALQk" target="_blank">{{__('WATCH VIDEO')}}</a>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("olliSeppalaPage__modernTyres")}}</h4>
                    <p>{{ __("olliSeppalaPage__tyreDescription")}} 
                    </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("olliSeppalaPage__magicTriangle") }}  </h4>
                    <p>{{ __("olliSeppalaPage__magicTriangleDetails")}}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("olliSeppalaPage__businessModel") }}</h4>
                    <p>{{ __("olliSeppalaPage__businessApproach") }} </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("olliSeppalaPage__innovationApproach") }}</h4>
                    <p>{{ __("olliSeppalaPage__globalInnovation") }} </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("olliSeppalaPage__premiumPerformance") }}</h4>
                    <p>{{ __("olliSeppalaPage__performanceGoal") }} </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("olliSeppalaPage__futureVision") }}</h4>
                    <p>{{ __("olliSeppalaPage__futurePlans") }} </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("olliSeppalaPage__excellenceVision") }}</h4>
                    <p>{{ __("olliSeppalaPage__excellenceQuote") }}</p>
                </div>
            </div>
        </div>

    </section><!-- #content end -->
</x-guest-layout>