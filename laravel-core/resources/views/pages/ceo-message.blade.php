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
                            {{__('ceoMsgPage_greeting')}}<br><br>

                            {{__('ceoMsgPage_intro')}} <br><br>

                            {{__('ceoMsgPage_mission')}}<br><br>

                            {{__('ceoMsgPage_commitment')}}<br><br>

                            {{__('ceoMsgPage_closing')}}<br><br>

                            <img src="{{ asset('images/sign.webp') }}" alt="" width="180"><br><br>

                            <b>G S Sareen</b><br>
                            {{__('ceoMsgPage_signature')}}<br>
                            Omni United (S) Pte Ltd
                        </em>
                    </p>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
</x-guest-layout>