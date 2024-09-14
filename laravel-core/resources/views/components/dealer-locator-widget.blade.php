@push('styles') 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
@endpush
<div class="dealer-map dealer-map--location-left">
    <form id="dealer-map--search"  class="dealer-map--search" action="#" onsubmit="formsubmission(event, this)">
        <div class="inputs">
            <div class="form-group">
                <label>Enter Zipcode or Location</label>
                <input id="autocomplete" type="text" name="postal" placeholder="enter zip code here" class="sm-form-control">
            </div>

            <div class="form-group">
                <label>choose search radius</label>
                <select name="selectcity" id="selectcity" onchange="" class="form-control">
                    <option value="5">5 mile radius</option>
                    <option value="10" selected="selected">10 mile radius</option>
                    <option value="25">25 mile radius</option>
                    <option value="50">50 mile radius</option>
                    <option value="100">100 mile radius</option>
                </select>
            </div>
        </div>
        <div class="buttons">
            <div class="formbutton">
                <input type="submit" id="submitbutt" class="knopf red sharp uppercase hover-black-80 ls-1" value="search" />
            </div>
            <div class="formbutton text">
                <label class=" ortext">or</label>
            </div>
            <div class="formbutton">
                <button  type="button" class="knopf red sharp uppercase hover-black-80 ls-1"  onclick="geolocate();">use my location</button>
            </div>
        </div>
    </form>
    <div id="map" class="dealer-map--map"></div>
    <div id="side_bar" class="dealer-map--location">Please Search with the address or pin code of the area.</div>
</div>
@push('scripts')  
    <!-- Swiper JS -->
    <script src="{{asset('js/swiper/swiper-bundle.js')}}"></script>
    <script async="false"  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw_k3c0Ba2Zhk6T8d_MZULA-0EMl-6o84&libraries=places,geometry&callback=initMap"></script>
    <script src="{{asset('js/jquery-gmap.js')}}"></script>
    <script type="text/javascript">
        $( function() {
            //alert("ok");
        } );
    </script>

@endpush