<x-guest-layout>
    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ asset('images/banner--red-partner.webp') }}" container="true" page-title="" class="page-title--left el-height-70 uppercase" />
    
    <!-- Content
    ============================================= -->
    <section id="content" class="pb-5">
        <div class="container" >
            <div class="grid ">
                <div class="col-md-12"><h3 class="no-top-margin dark-100">{{__("redPartnerPage_mainTitle")}}</h3>                                   
                    <p>{{__("redPartnerPage_overview")}}​</p>
                </div>
            </div>
            
            <div class="grid ">
                
                <div class="col-md-12">
                    <h4 class="no-top-margin dark-100 uppercase">{{__("redPartnerPage_whyChoose")}}</h4>
                    <p>{{__("redPartnerPage_whenBuy")}}</p>
                    <ul>
                        <li>{{__("redPartnerPage_whenBuyBenefitsEliteService")}}</li>
                        <li>{{__("redPartnerPage_whenBuyBenefitsPremiumProducts")}}</li>
                        <li>{{__("redPartnerPage_whenBuyBenefitsExclusiveBenefits")}}</li>
                        <li>{{__("redPartnerPage_whenBuyBenefitsAfterSalesSupport")}}</li>                        
                    </ul>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-12">
                    <p class="dark-100 t700">{{__("redPartnerPage_commitment")}}</p>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
</x-guest-layout>
