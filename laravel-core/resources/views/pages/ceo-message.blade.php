<x-guest-layout>
    
    @push('styles') 
        <style>@media screen and (max-width:767px){
            #page-title{
                    height: 150px!important;
            } 
        }</style>
    @endpush

    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ localized_asset('images/ceo-message--banner.webp') }}" container="true" page-title="" class="page-title--left el-height-60  uppercase" />
    
    <!-- Content
    ============================================= -->
    <section id="content" class="pb-4">
        <div class="container">

            <div class="grid">
                <div class="col-md-12">                    
                    <p>
                        <em>
                            {{__('Dear friend,')}}<br><br>

                            {{__('I am thrilled to share our approach, passion and vision that drive Radar Tyres. We believe in creating a brand that stands for quality and innovation while making premium products accessible to everyone.')}} <br><br>

                            {{__('Our mission is to offer premium, high-quality tyres that are affordable for all, bridging the gap between superior performance and cost-effectiveness. We aim to be the game changer in the tyre industry. Our long-term goals include expanding our market coverage, continuously improving our products and maintaining the highest standards of sustainability and responsibility.')}}<br><br>

                            {{__('We will continue to drive forward, breaking new ground and setting new standards in the tyre industry.')}}<br><br>

                            {{__('Warm regards,')}}<br><br>

                            <img src="{{ asset('images/sign.webp') }}" alt="" width="180"><br><br>

                            <b>G S Sareen</b><br>
                            {{__('President & CEO')}}<br>
                            Omni United (S) Pte Ltd
                        </em>
                    </p>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
</x-guest-layout>