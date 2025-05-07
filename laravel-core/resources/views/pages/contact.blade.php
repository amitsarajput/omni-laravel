<x-guest-layout>
	<!-- Content
		============================================= -->
		<section id="content">

			<div class="section bg-white">
				<div class="container">
					<div class="heading-block center">
					<h2>{{_("Contact US")}}</h2>
					</div>
				</div>
				<div class="container">
					<div class="grid">
						<div class="col-md-8">
							<p>
								{{__("If you are interested in distributing Radar Tyres, looking for a dealer near you or have any other query you can contact us via the below form or you can write to us at")}} <span style="white-space:nowrap;"><a class="blue" href="mailto:info@omni-united.com">info@omni-united.com</a></span> {{__("and we will get back to you as soon as we can.")}}
							</p>
							<x-ContactusForm class="mt-2" />
						</div>
						<div class="col-md-4">
							@php 
								$caddressGrid=True;
								$caddress=[ 
									[
									'title'=>__("SINGAPORE (HQ)"), 
									'address'=>"<b>Omni United (S) Pte Ltd</b><br>2 Central Boulevard, <br>#08-04A West Tower, <br>IOI Central Boulevard, <br>Singapore 018916" ,
									'phone'=>"T: +65 6423 1431 <br>F: +65 6423 0938" ,
									'workingHours'=>__('Business Hrs:')." 0900 – 1800 (UTC+8)<br> ".__('Monday – Friday')
									],
									/*[
									'title'=> __('UNITED STATES'),
									'address'=>"<b>Omnisource United, Inc</b> <br>3750 S. Watson Rd., <br>Suite 100, <br>Arlington, TX 76014" ,
									'phone'=>" T: 800-725-1482 " ,
									'workingHours'=>__('Business Hrs:')." 0900 – 1800 (UTC−6 / UTC−5 DST)<br> ".__('Monday – Friday')
									],*/
									[
									'title'=> __('UNITED ARAB EMIRATES'),
									'address'=>"<b>Omni MEA Tyres Trading DMCC</b> <br>1705, Mazaya Business Avenue BB2, <br>JLTE-PH2-BB2, <br>Jumeirah Lakes Towers" ,
									'phone'=>" T: +971 4 457 1666" ,
									'workingHours'=>__('Business Hrs:')." 0900 – 1800 (UTC+4)<br> ".__('Monday – Friday')
									],
									[
									'title'=> __('ITALY'),
									'address'=>"<b>Omni United (Italy) S.r.l.</b> <br>Via Durini, 18, <br>Milano (MI) 20122, <br>Italy",
									'phone'=>null ,
									'workingHours'=>null
									]
								];
							@endphp
							@if($caddressGrid)
								<div class="grid">
							@endif
							@foreach($caddress as $address)
								<x-contact-address 
									:title="$address['title']" 
									:address="$address['address']" 
									:phone="$address['phone']" 
									:workingHours="$address['workingHours']" 
									class="col-6 col-bleed-y" 
								/>
							@endforeach
							
							@if($caddressGrid)
								<div class="grid">
							@endif
						</div>

					</div>
				</div>
			</div>

		</section><!-- #content end -->
</x-guest-layout>

