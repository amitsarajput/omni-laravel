<x-guest-layout>
    <!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ asset('images/banner--group-page.webp') }}" container="true" page-title="REAL PEOPLE, REAL PERFORMANCE<br>– THE EXPERTS BEHIND RADAR TYRES" class="page-title--bottom el-height-70 uppercase pb-3" />
    
    <!-- Content
    ============================================= -->
    <section id="content" class="pb-4">
        <div class="container">
            <div class="grid">
                <div class="col-md-12 col-bleed-y  mb-4">
                    <h3 class="no-top-margin dark-100">{{ __("DEVELOPING THE FUTURE OF PERFORMANCE: RADAR TYRES AND THE SCIENCE OF INNOVATION") }} </h3>
                    <p>{{ __("Meet Olli Seppälä, the head of global R&D at Radar Tyres and a trailblazer in the tyre industry. With over 20 years of experience in tyre development, Olli’s expertise spans from heavy-duty products to passenger car tyres, with a focus on delivering exceptional performance and keeping tyres affordable for all.") }}</p>
                </div>
            </div>
            
            <div class="grid grid-bleed align-center">
                <div class="col-md-6 col-sm-12 mb-4">
                    <a href="{{ route('pages.olli-seppala') }}">
                        <img src="{{asset('images/Olli.webp')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="ma-xxs-2 ma-xs-2 ma-sm-2 ma-md-2 mx-lg-3">
                        <h3 class="dark-100  no-top-margin">{{ __("A CAREER BUILT ON EXPERTISE") }}</h3>
                        <p>{{ __("Olli’s journey in tyre innovation began at Nokian Tyres, where he spent nearly two decades honing his skills in product development and leading R&D teams. In 2022, he joined Radar Tyres, bringing a wealth of experience and a passion for pushing boundaries. “The tyre industry has evolved tremendously in the past 20 years,” Olli explains. “Performance demands, sustainability requirements, and legislative standards have all become more stringent, making innovation more critical than ever.”") }}</p>
                        <a class="knopf red heading-font sharp ls-1" href="https://youtu.be/LVP-xecALQk" target="_blank">{{__('WATCH VIDEO')}}</a>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("THE COMPLEXITY OF MODERN TYRES")}}</h4>
                    <p>{{ __("A modern tyre is far more than just a rubber ring. “Each tyre comprises about 20 components,” Olli notes. “Every element impacts the others, requiring meticulous balancing to achieve optimal performance.” One key area is tread compounds, where advancements in silica technology have significantly enhanced wet grip and rolling resistance, albeit with new challenges to overcome.")}} 
                    </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("THE MAGIC TRIANGLE OF TYRE DEVELOPMENT") }}  </h4>
                    <p>{{ __("Tyre development is a fine art, requiring a careful balance of wet grip, rolling resistance, and mileage — often referred to as the “Magic Triangle.” As Olli explains, “Improving one aspect often comes at the expense of the others. Our mission is to expand this triangle, achieving outstanding performance across all metrics.” Through their expertise, Olli and his team have excelled in delivering exceptional results in every area.")}}</p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("A UNIQUE BUSINESS MODEL") }}</h4>
                    <p>{{ __("Radar Tyres operates without its own manufacturing facilities, a strategic choice that Olli sees as a game-changer. “We can select the best production locations for each product, ensuring top performance and cost-effectiveness,” he explains. “This agility allows us to innovate faster and more efficiently than traditional tyre makers.”") }} </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("INNOVATION BEYOND THE TYRE: A GLOBAL APPROACH") }}</h4>
                    <p>{{ __("For Olli, innovation isn’t limited to tread patterns or compounds. “It’s about rethinking the entire process, from business models to supply chains,” he explains. This philosophy extends to Radar Tyres’ rigorous global testing process. “We conduct tests worldwide, from winter conditions in Finland to dry tracks in Spain and field testing in the U.S. and Asia,” Olli shares. “This ensures our tyres meet the specific needs of diverse markets while maintaining top-tier performance.”") }} </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("DEMOCRATIZING PREMIUM PERFORMANCE") }}</h4>
                    <p>{{ __("Olli’s mission is clear: to make premium-level tyre performance accessible to all. “Safety is our top priority, and it’s vital that consumers can rely on their tyres in critical moments,” he says. “Our goal is to deliver tyres that compete with premium brands while remaining affordable, ensuring safety and performance for every driver.”") }} </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("LOOKING TO THE FUTURE") }}</h4>
                    <p>{{ __("As the automotive industry shifts towards electrification, Radar Tyres is already adapting. “Electric vehicles bring unique challenges, such as reduced noise and higher torque requirements,” Olli says. “We’re designing tyres that not only meet these demands but also enhance the overall driving experience.”") }} </p>
                </div>
                <div class="col-md-12">
                    <h4 class="dark-100">{{ __("A VISION OF EXCELLENCE") }}</h4>
                    <p>{{ __("“We’re here to redefine what’s possible in the tyre industry,” Olli concludes. “By combining top-tier performance with affordability, we’re democratizing premium tyres and ensuring that safety and quality are within everyone’s reach.”") }}</p>
                </div>
            </div>
        </div>

    </section><!-- #content end -->
</x-guest-layout>