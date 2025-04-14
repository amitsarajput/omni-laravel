 <!-- Footer -->
 <footer id="footer">
    <div class="footer-logo-socials">
        <div class="container">
            <div class="grid">
                <div class="col-sm-6">
                    <div class="footer--logo">
                    <img src="{{asset('images/logos/radar-tyres-light-red.svg')}}" alt=""></div>
                </div>
                <div class="col-sm-6">
                    <div class="footer-socials">
                        <div class="title">FOLLOW US:</div>
                        <div class="icons">
                            <a target="_blank" href="https://www.youtube.com/@Radartires"><i class="omniicon-youtube-play"></i></a>
                            <!-- <a target="_blank" href="https://www.linkedin.com/company/omni-united/"><i class="omniicon-linkedin"></i></a> -->
                            <a target="_blank" href="https://www.instagram.com/radartires/"><i class="omniicon-instagram"></i></a>
                            <a target="_blank" href="https://www.facebook.com/radartiresofficial/"><i class="omniicon-facebook"></i></a>
                            <a target="_blank" href="https://x.com/RadarTires"><i class="omniicon-x1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer-cols footer-cols-3">
            <div class="footer-col">
                <!-- <div class="title">ABOUT US</div> -->
                <a class="radar_link" 
                                @if( request()->routeIs('home') )
                                    href="#tyres" 
                                    scroll-to="#tyres" 
                                @else
                                    href="{{ safeRoute('home').'#tyres'}}"
                                @endif
                                >{{__('TYRES')}}</a>
                <a  href="{{ safeRoute('pages.why-radar')}}">{{__('WHY RADAR')}}</a>
                <a  
                    @if( request()->routeIs('home') )
                        href="#dealer-locator" 
                        scroll-to="#dealer-locator" 
                    @else
                        href="{{safeRoute('home').'#dealer-locator'}}"
                    @endif
                    >{{__('DEALER LOCATOR')}}</a>
            </div>
            <div class="footer-col">
                <!-- <div class="title">BRANDS</div> -->
                <a href="{{ safeRoute('pages.about-us')}}">{{__('ABOUT US')}}</a>
                <a  
                    @if( request()->routeIs('home') )
                        href="#responsiblity" 
                        scroll-to="#responsiblity" 
                    @else
                        href="{{safeRoute('home').'#responsiblity'}}"
                    @endif
                    >{{__('RESPONSIBILITY')}}</a>
                    <a href="{{ safeRoute('pages.warranty') }}">{{__('WARRANTY')}}</a>

                <!--<a href="https://www.omni-united.com/dealer-login">Dealer Corner</a>-->
            </div>
            <div class="footer-col">
                <a href="https://www.omni-united.com/">{{__('OMNI UNITED')}}</a>
                <a href="https://www.omni-united.com/omni-sync">{{__('OMNISYNC LOGIN')}}</a>
                <a href="{{ safeRoute('pages.contact')}}">{{__('CONTACT US')}}</a>
            </div>
            
        </div>
        
    </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container">

                <div class="grid">
                    <div class="col-auto">
                        Copyright {{ date("Y") }}. All Rights Reserved with Omni United (S) Pte. Ltd.
                    </div>

                    <div class="col-auto tright">
                        <a href="{{safeRoute('pages.privacy-policy')}}">Privacy Policy</a>
                        <div class="seperator">•</div>
                        @cookieconsentbutton(action: 'reset', label: 'Manage cookies', attributes: ['id' => 'reset-button', 'class' => ''])
                        <!--
                        <ul class="copyrights-menu">
                            <li><a href="https://www.omni-united.com/#">Disclaimer</a>  |  </li>
                            <li><a href="https://www.omni-united.com/#">Privacy Policy</a>  |  </li>
                            <li><a href="https://www.omni-united.com/#">Cookie Policy</a></li>
                        </ul>
                        -->
                    </div>
                </div>

            </div><!-- #copyrights end -->
        </div>
    </footer>