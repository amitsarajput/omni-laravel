<x-guest-layout>
    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ asset('images/rigorous-testing--banner.webp') }}" container="true" page-title="" class="page-title--left el-height-60 uppercase" />
    
    <!-- Content
    ============================================= -->
    <section id="content" class="pb-5">
        <div class="container" >
            <div class="grid ">
                <div class="col-md-12 col-bleed-y"><h3 class="no-top-margin dark-100">{{__('testingPage_intro')}}​</h2></div>
            </div>
            <div class="grid">
                <div class="col-md-12">                    
                    <p>{{__('testingPage_details')}}</p>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-12"><p>{{__('testingPage_cta')}} </p>
                <span class="t700">2024</span> <a  class="knopf red heading-font sharp ls-1 mb-1" href="{{ localized_asset('storage/colletrals/testing_catalog/Product Testing Catalog_24.pdf') }}" download>{{__('testingPage_download')}}</a>
                <!-- <br>
                <span class="t700">2023</span> <a  class="knopf red heading-font sharp ls-1" href="{{ asset('storage/colletrals/testing_catalog/Product Testing Catalog_23.pdf') }}" download>{{__('Download')}}</a> -->
                </div>
            </div>

        </div>
    </section><!-- #content end -->
</x-guest-layout>
