<!-- Header -->
<header id="header">
    <div class="inner-header "><!-- search-opened -->
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{asset('images/omni-logo.png')}}" alt="Omni"></a>
        </div>
        <div class="right-menu-wrapper">
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
                <li class="menu-item"><a href="{{route('home')}}">Buy Radar Tyres</a></li>
                <li class="menu-item"><a href="{{route('home')}}">Home</a></li>
            </ul>
            <div class="side-panel-trigger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</header>