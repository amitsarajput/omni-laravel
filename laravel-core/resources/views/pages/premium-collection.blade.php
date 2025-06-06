<x-guest-layout>
    
    @push('styles') 
        <style>@media screen and (max-width:767px){
            #page-title{
                    height: 200px!important;
            } 
        }</style>
    @endpush
    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ localized_asset('images/premium-collection--banner.webp') }}" container="true" page-title="" class="page-title--left page-title-xs-height-on-xs el-height-70 uppercase" />
    
    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="container">
            <div class="grid">
                <div class="col-md-12">
                    <h3 class="no-top-margin dark-100">{{__('premiumCollPage_intro')}}</h3>                    
                </div>
                <div class="col-md-12">
                    <p>{{__('premiumCollPage_overview')}}</p>
                </div>
                <div class="col-md-12">
                    <p>{{__('premiumCollPage_testingFacilities')}}</p>
                </div>
                <div class="col-md-12">
                    <p>{{__('premiumCollPage_designInnovation')}}</p>

                </div>
            </div>
            
            <div class="grid">
                
            </div>
        </div>

    </section><!-- #content end -->
</x-guest-layout>
