<x-guest-layout>
    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ localized_asset('images/social-responsibility--banner.webp') }}" container="true" page-title="" class="page-title--center el-height-70 uppercase mb-0" />
    
    <!-- Content
    ============================================= -->
    <section id="content" class="pb-4">
        <div class="section mb-4">
            <div class="container">
                <div class="grid">
                    <div class="col-md-12 col-bleed-y">
                        <h2 class="no-top-margin pink uppercase center ">{{__('socialRespPage__secSocialRespSocial')}}</h2>
                        <p class="text-lead center"><em> {{__('socialRespPage__secSocialResp_text')}} </em></p>
                        <p class="center dark-50">{{__('socialRespPage__ceo')}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="grid">
                <div class="col-md-12 col-bleed-y">
                    <h3 class="no-top-margin dark-100 uppercase">{{__('socialRespPage__secGivingBack')}}</h3>
                    <p>{{__('socialRespPage__secGivingBack_Para1')}}</p>
                    <p>{{__('socialRespPage__secGivingBack_Para2')}}</p>
                    <p>{!!__('socialRespPage__secGivingBack_Para3_1')!!}  <a class="blue" target="_blank" href="https://www.bcrf.org/">www.bcrf.org</a>.</p>
                </div>
            </div>
        </div>        
        <div class="container">                
            <div class="grid">
                <div class="col-md-6 col-bleed-y">
                    <div class="number-text">
                        <div class="number-text--number pink">
                            us$ <span class="counter">1,387,750</span>
                        </div>
                        <div class="number-text--text">
                            {!!__('socialRespPage__bcrfTotalDonated')!!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-bleed-y">
                    <div class="number-text">
                        <div class="number-text--number pink">
                            <img style="margin-top:-10px;" class="lozad" data-src="{{ asset('images/ico-microscope.webp') }}" alt="" src="{{ asset('images/ico-microscope.webp') }}" data-loaded="true">
                             <span class="counter">27,755</span>
                        </div>
                        <div class="number-text--text">
                            {!!__('socialRespPage__researchHoursFunded')!!}
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="container">
            <hr class="mt-5 mb-5">
        </div>   

            
        <div class="container mt-5">
            <div class="grid align-center">
                <div class="col-md-6 col-sm-12 col-bleed">
                    <img src="{{localized_asset('images/BCRF_Donating-Banner-2024.webp')}}" alt="Social Responsibility">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="ma-xxs-0 ma-xs-0 ma-sm-0 ml-md-2">
                        <h5 class="dark-100 mt-0 uppercase">{{__('socialRespPage__secFundraisingHeading')}}</h5>
                        <p>{{__('socialRespPage__secFundraisingHeading_text')}}</p>
                    </div>
                </div>
            </div>
        </div> 
          
        <div class="container">
            <hr class="mt-5 mb-5">
        </div> 

        <div class="container">
            <div class="grid">
                <div class="col-md-10 offset-md-1">
                    <h3 class="mt-0 mb-3 dark-100 uppercase center">{{__('socialRespPage__secSustainabilityPhilosophyHeading')}} </h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/51noIoC99xc?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div>
            </div>
        </div>

    </section><!-- #content end -->
    @push('scripts')  
        <script src="{{asset('js/jquery.fitvids.js')}}"></script>
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('iframe[src*="youtube"]').parent().fitVids();
                $('.counter').counterUp({
                    delay: 10,
                    time: 3000
                });
            });
        </script>
@endpush
</x-guest-layout>

    
   


