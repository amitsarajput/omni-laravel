<x-guest-layout>
	<!-- Content
		============================================= -->
		<section id="content">

			<div class="section bg-white">
				<div class="container">
					<div class="heading-block center">
					<h2>{{__("Contact us")}}</h2>
					</div>
				</div>
				<div class="container">
					<div class="grid">
						<div class="col-md-8">
							<p>
								{{__("If you are interested in distributing Radar Tyres, looking for a dealer near you or have any other query you can contact us via the below form or you can write to us at")}} <span style="white-space:nowrap;"><a class="blue" href="mailto:info@omni-united.com">info@omni-united.com</a></span> {{__("and we will get back to you as soon as we can.")}}
							</p>
							@if(session('omni_data.country')=='es')
								<x-ContactusFormEs class="mt-2" />
							@else
								<x-ContactusForm class="mt-2" />
							@endif
						</div>
						<div class="col-md-4">
							@php 
								$caddressGrid=True;
								$caddress=[
									[
									'title'=>__("SINGAPORE (HQ)"), 
									'address'=>"<b>Omni United (S) Pte Ltd</b><br>2 Central Boulevard, <br>#08-04A West Tower, <br>IOI Central Boulevard, <br>Singapore 018916" ,
									'phone'=>"T: +65 6423 1431 <br>F: +65 6423 0938" ,
									'workingHours'=>__('Business Hrs:')." 0900 – 1800 (UTC+8)<br> ".__('Monday – Friday'),
									'region'=>['apac','eu']
									],
									[
									'title'=> __('UNITED ARAB EMIRATES'),
									'address'=>"<b>Omni MEA Tyres Trading DMCC</b> <br>1705, Mazaya Business Avenue BB2, <br>JLTE-PH2-BB2, <br>Jumeirah Lakes Towers" ,
									'phone'=>" T: +971 4 457 1666" ,
									'workingHours'=>__('Business Hrs:')." 0900 – 1800 (UTC+4)<br> ".__('Monday – Friday'),
									'region'=>['apac']
									],
									[
									'title'=> __('ITALY'),
									'address'=>"<b>Omni United (Italy) S.r.l.</b> <br>Via Durini, 18, <br>Milano (MI) 20122, <br>Italy",
									'phone'=>null ,
									'workingHours'=>null,
									'region'=>['eu']
									]
								];
							@endphp
							@if($caddressGrid)
								<div class="grid">
							@endif
							@foreach($caddress as $address)
								@if(in_array(session('omni_data.region'), $address['region']))
								<x-contact-address 
									:title="$address['title']" 
									:address="$address['address']" 
									:phone="$address['phone']" 
									:workingHours="$address['workingHours']" 
									class="col-6 col-bleed-y" 
								/>
								@endif
							@endforeach
							
							@if($caddressGrid)
							</div>
							@endif
						</div>

					</div>
				</div>
			</div>

		</section><!-- #content end -->
</x-guest-layout>

