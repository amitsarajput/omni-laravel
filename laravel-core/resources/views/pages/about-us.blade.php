<x-guest-layout>
    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ asset('images/banner--about-us.webp') }}" container="true" page-title="{!!__('aboutPage__title')!!}" class="page-title--center el-height-70 uppercase" />
    
    <!-- Content
    ============================================= -->
    <section id="content" class="pb-4">
        <div class="container">
            <div class="grid">
                <div class="col-md-12 col-bleed-y">
                    <h3 class="no-top-margin dark-100">{{__('aboutPage__secHeading')}}</h3>
                    <p>{{__('aboutPage__secHeading_text')}}</p>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-6">
                    <h4 class="dark-100">{{__('PREMIUM QUALITY')}}</h4>
                    <p>{{__('aboutPage__subHeading_premiumQuality_text')}}</p>
                </div>
                <div class="col-md-6">
                    <h4 class="dark-100">{{__('AFFORDABILITY')}}</h4>
                    <p>{{__('aboutPage__subHeading_affordablity_text')}}</p>
                </div>
                <div class="col-md-6">
                    <h4 class="dark-100">{{__('INNOVATION')}}</h4>
                    <p>{{__('aboutPage__subHeading_innovation_text')}}</p>
                </div>
                <div class="col-md-6">
                    <h4 class="dark-100">{{__('CUSTOMER FIRST')}}</h4>
                    <p>{{__('aboutPage__subHeading_customerFirst_text')}}</p>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-12">
                    <p>{{__('aboutPage__lastText_1')}}</p>
                    <p>{{__('aboutPage__lastText_2')}}</p>
                </div>  
            </div>
        </div>

    </section><!-- #content end -->
</x-guest-layout>