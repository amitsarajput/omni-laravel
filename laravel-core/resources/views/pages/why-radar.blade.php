<x-guest-layout>
    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ asset('images/banner--why-radar.webp') }}" container="true" page-title="{!!__('whyRadarPage__title')!!}" class=" el-height-60 uppercase" />
    
    <!-- Content
    ============================================= -->
    <section id="content" class="pb-4">
        <div class="container">
            <div class="grid">
                <div class="col-md-12 col-bleed-y">
                    <h3 class="no-top-margin dark-100">{{__('whyRadarPage__secHeading')}}</h3>
                    <p>{{__('whyRadarPage__secHeading_text')}}</p>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-6">
                    <h4 class="dark-100 uppercase">{{__('whyRadarPage__subHeading_premiumQuality')}}</h4>
                    <p>{{__('whyRadarPage__subHeading_premiumQuality_text')}}</p>
                </div>
                <div class="col-md-6">
                    <h4 class="dark-100 uppercase">{{__('whyRadarPage__subHeading_innovativeDesign')}} </h4>
                    <p>{{__('whyRadarPage__subHeading_innovativeDesign_text')}}</p>
                </div>
                <div class="col-md-6">
                    <h4 class="dark-100 uppercase">{{__('whyRadarPage__subHeading_comprehensiveRange')}} </h4>
                    <p>{{__('whyRadarPage__subHeading_comprehensiveRange_text')}}</p>
                </div>
                <div class="col-md-6">
                    <h4 class="dark-100 uppercase">{{__('whyRadarPage__subHeading_radarProtectProgramme')}}</h4>
                    <p>{{__('whyRadarPage__subHeading_radarProtectProgramme_text')}}</p>
                </div>

                
                <!-- <div class="col-md-6">
                    <h4 class="dark-100 uppercase">{{__('Commitment to Sustainability')}}</h4>
                    <p>{{__('We are proud to be a pioneer in sustainability, being the first tyre brand to manufacture carbon-neutral tyres. By choosing Radar Tyres, you are not only investing in quality product but also in a brand that is committed to reducing its environmental impact through sustainable practices.')}}</p>
                </div> -->
                
                <div class="col-md-6">
                    <h4 class="dark-100 uppercase">{{__('whyRadarPage__subHeading_socialResponsibility')}}</h4>
                    <p>{{__('whyRadarPage__subHeading_socialResponsibility_text')}}</p>
                </div>
            </div>
        </div>

    </section><!-- #content end -->
</x-guest-layout>
