<!-- Header -->
<header id="header">
    <div class="inner-header "><!-- search-opened -->
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{asset('images/logos/radar-tyres-light-red.svg')}}" alt="Radar Tyres"></a>
        </div>
        <div class="right-menu-wrapper">
            <ul class="menu">
                <li class="menu-item"><a 
                                @if( request()->routeIs('home') )
                                    href="#tyres" 
                                    scroll-to="#tyres" 
                                @else
                                    href="{{ route('home').'#tyres'}}"
                                @endif
                                >Tyres</a></li>
                <li class="menu-item"><a href="{{ route('pages.why-radar')}}">Why Radar</a></li>
                <li class="menu-item"><a 
                                        @if( request()->routeIs('home') )
                                            href="#dealer-locator" 
                                            scroll-to="#dealer-locator" 
                                        @else
                                            href="{{route('home').'#dealer-locator'}}"
                                        @endif
                                        >Dealer Locator</a></li>
                <li class="menu-item"><a href="{{ route('pages.contact')}}">Contact</a></li>
            </ul>
            <div id="top-search">
                <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                <form action="search" method="post">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                </form>
            </div><!-- #top-search end -->
            <!-- <div class="search-opener">
                <i class="fas fa-search"></i>
            </div> -->
            <ul class="menu">
                <li class="menu-item"><div class="location-picker">
                    <select class="selectpicker" name='location' > 
                        <option data-icon="omniicon-location-pin" value="eu" >EUROPE</option>
                        <option data-icon="omniicon-location-pin" value="as" >ASIA</option>
                        <option data-icon="omniicon-location-pin" value="mea" >MIDDLE EAST AND AFRICA</option>
                        <option data-icon="omniicon-location-pin" value="us" >USA</option>
                        <option data-icon="omniicon-location-pin" value="ca" >CANADA</option>
                        <option data-icon="omniicon-location-pin" value="row" >REST OF THE WORLD</option>
                    </select>
                </div>
                </li>
                <li class="menu-item primary-color"><a href="https://www.omni-united.com/omni-sync">For Dealers</a></li>
            </ul>
            
            <!-- <div class="side-panel-trigger">
                <i class="fas fa-bars"></i>
            </div> -->
        </div>
    </div>
</header>