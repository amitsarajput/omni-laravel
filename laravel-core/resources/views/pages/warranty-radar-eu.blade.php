<x-guest-layout>
<!-- Page Title
    ============================================= -->
    <x-page-title image-url="{{ localized_asset('images/Warranty-Banner--radar-eu.webp') }}" container="true" page-title="" class="page-title--left el-height-60 uppercase" />
    
	

	<!-- Content
	============================================= -->
	<section id="content">
		<div class="section bg-white pt-0">
			<div class="container">
				<div class="grid ">
					<div class="col-md-12 col-bleed-y center"><h2>{{__('RADAR PROTECT PROGRAM - EUROPE')}}</h2></div>
				</div>
			</div>
			<div class="container">
				<div class="grid">
					<div class="col-md-12 col-bleed-y ">
						<h3 class="dark-100">{!!__('RADAR PROTECT PROGRAM - EUROPE')!!}</h3>
						<ul class="text-md bullet-inside ">
							<li class="">{!!__('Workmanship and Materials Limited Warranty')!!}</li>
							<li>{!!__('Road Hazard Protection<sup>1</sup>')!!}</li>
							@if(session('omni_data.country')==null)
								<li>{!!__('30-Day Satisfaction Promise')!!}<sup>1</sup></li>
							@endif
						</ul>
						<p class="text-sm">{!!__('<sup>1</sup> These warranties are offered on selected ranges. Please refer to the Radar Protect Program Buyers Guide for the most updated list of eligible ranges.')!!}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section bg-gray">
			<div class="container">
				<div class="grid">
					<div class="col-md-12 col-bleed-y ">
						<h3 class=" dark-100">{!!__('RADAR PROTECT PROGRAM – EUROPE INFORMATION')!!}</h3>
						<ul class="text-md no-bullets li-icons">
							<!-- EU Region -->
							@if(session('omni_data.country')==null || (session('omni_data.country')!=null && session('omni_data.country')!='es'))
								<li class="mb-1"><h4 class="mb-1">2025</h4>
									<b class="uppercase">Europe (except Baltic countries)</b>
								</li>
								<li class="mb-xxs-1 bullet ml-2"><a target="_blank" href="{{ asset('storage/colletrals/Radar Protect Program Buyers Guide - Europe (except Baltic countries)--EU-2025.pdf') }}"><x-icon-download-ico />{!!__('Radar Protect Program Buyers Guide - Europe (except Baltic countries)')!!}</a> – {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2025')!!}</li>

								<li class="mb-xxs-1 bullet ml-2"><a target="_blank" href="{{ asset('storage/colletrals/Radar Protect Program Terms & Conditions - Europe (except Baltic countries)--EU-2025.pdf') }}"><x-icon-download-ico /> {!!__('Radar Protect Program Terms & Conditions - Europe (except Baltic countries)')!!}</a> – {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2025')!!}</li>

								<li class="mt-1 mb-1"><b class="uppercase">Baltic countries only</b></li>

								<li class="mb-xxs-1 bullet ml-2"><a target="_blank" href="{{ asset('storage/colletrals/Radar Protect Program Buyers Guide - Baltic countries only--EU-2025.pdf') }}"><x-icon-download-ico /> {!!__('Radar Protect Program Buyers Guide - Baltic countries only')!!}</a> – {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2025')!!}</li>

								<li class="mb-xxs-1 bullet ml-2"><a target="_blank" href="{{ asset('storage/colletrals/Radar Protect Program Terms & Conditions - Baltic countries only--EU-2025.pdf') }}"><x-icon-download-ico /> {!!__('Radar Protect Program Terms & Conditions - Baltic countries only')!!}</a> – {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2025')!!}</li>

								<li class="mt-3 mb-1 red"><h4 class="mb-0">2024</h4></li>

								<li class="mb-xxs-1 bullet ml-2"><a target="_blank" href="{{ asset('storage/colletrals/Buyers_Warranty_Guide-eu.pdf') }}"><x-icon-download-ico /> {!!__('Radar Protect Program Buyers Guide - Europe')!!}</a> – {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2024')!!}</li>

								<li class="mb-xxs-1 bullet ml-2"><a target="_blank" href="{{ asset('storage/colletrals/Radar Protect Program Terms & Conditions - Europe.pdf') }}"><x-icon-download-ico /> {!!__('Radar Protect Program Terms & Conditions - Europe')!!}</a> - {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2024')!!}</li>

								<li class="mt-3 mb-1 red"><h4 class="mb-0">CLAIM FORM</h4></li>

								<li class="mb-xxs-1 bullet ml-2"><a target="_blank" href="{{ asset('storage/colletrals/Claim_Form - CL01_RA-EU_Tyres--radar-eu.pdf') }}"><x-icon-download-ico /> {!!__('Radar Protect Program Claim Form')!!}</a> - {!!__('Passenger and light truck replacement tyres purchased after 1<sup>st</sup> January, 2024')!!}</li>	

								<!-- ES Country -->
							@elseif(session('omni_data.country')=='es')
								<li class="mb-xxs-1"><a target="_blank" href="{{ asset('storage/colletrals/Radar-Tyres-Warranty-ES-2025.pdf') }}"><x-icon-download-ico /> {!!__('EUROPE (Non-Baltic region) Limited Warranty Booklet')!!}</a> – {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2025')!!}</li>								

								<li class="mb-xxs-1"><a target="_blank" href="{{ asset('storage/colletrals/Radar_Tyres_Quick_Reference_Guide_A5--radar-eu.pdf') }}"><x-icon-download-ico /> {!!__('Buyers Warranty Guide')!!}</a> – {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2024')!!}</li>

								<li class="mb-xxs-1"><a target="_blank" href="{{ asset('storage/colletrals/Radar_Tyres_Limited_Warranty_Booklet--radar-eu.pdf') }}"><x-icon-download-ico /> {!!__('Limited Warranty Booklet')!!}</a> - {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2024')!!}</li>

								<li><a href="{{ asset('storage/colletrals/Claim_Form-CL01_RA-EU_Tyres--radar-ES.pdf') }}"><x-icon-download-ico /> {!!__('Claim Form')!!}</a> - {!!__('Passenger and Light Truck replacement tyres purchased after  1<sup>st</sup> January, 2024')!!}</li>	
							@endif
						</ul>
					</div>
				</div>
			</div>
		</div>

		



	</section><!-- #content end -->
</x-guest-layout>