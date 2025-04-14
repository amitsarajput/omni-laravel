<!-- Header -->
<header id="header">
    <div class="inner-header "><!-- search-opened -->
        <div class="logo">
            <a href="{{safeRoute('home')}}"><img src="{{asset('images/logos/radar-tyres-light-red.svg')}}" alt="Radar Tyres"></a>
        </div>
        <div class="right-menu-wrapper">
            <ul class="menu">
                <li class="menu-item"><a 
                                @if( request()->routeIs('home') )
                                    href="#tyres" 
                                    scroll-to="#tyres" 
                                @else
                                    href="{{ safeRoute('home').'#tyres'}}"
                                @endif
                                >{{ __('Tyres') }}</a></li>
                <li class="menu-item"><a href="{{ safeRoute('pages.why-radar')}}">{{ __('Why Radar') }}</a></li>
                <li class="menu-item"><a 
                                        @if( request()->routeIs('home') )
                                            href="#dealer-locator" 
                                            scroll-to="#dealer-locator" 
                                        @else
                                            href="{{safeRoute('home').'#dealer-locator'}}"
                                        @endif
                                        >{{ __('Dealer Locator') }}</a></li>
                <li class="menu-item"><a href="{{ safeRoute('pages.contact')}}">{{ __('Contact us') }}</a></li>
            </ul>
            @php
                $bubble_closed=session('omni_data.bubble_closed');
            @endphp
            <div class="location-picker--small">
                <x-small-location-picker  :bubbleclosed="$bubble_closed" />
            </div>
            <div id="top-search">
                <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                <form action="{{safeRoute('search')}}" method="GET">
                    <input type="text" name="query" class="form-control" value="" placeholder="Type &amp; Hit Enter.." />
                </form>
            </div><!-- #top-search end -->
            <!-- <div class="search-opener">
                <i class="fas fa-search"></i>
            </div> -->
            
            
            <div class="collapsed-menu-trigger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</header>