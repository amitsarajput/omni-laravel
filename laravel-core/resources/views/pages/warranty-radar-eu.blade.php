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
					<div class="col-md-12 col-bleed-y center"><h2>{{__('LIMITED WARRANTY - EUROPE')}}</h2></div>
				</div>
			</div>
			<div class="container">
				<div class="grid">
					<div class="col-md-12 col-bleed-y ">
						<h3 class="dark-100">{!!__('LIMITED WARRANTY - EUROPE')!!}</h3>
						<ul class="text-md bullet-inside ">
							<li class="mb-xxs-1">{!!__('Workmanship and Materials Limited Warranty')!!}</li>
							<li>{!!__('Road Hazard Warranty<sup>1</sup>')!!}</li>
						</ul>
						<p class="text-sm">{!!__('<sup>1</sup> These warranties are offered on selected ranges. Please refer to the Buyers Warranty Guide for the most updated list of eligible ranges.')!!}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section bg-gray">
			<div class="container">
				<div class="grid">
					<div class="col-md-12 col-bleed-y ">
						<h3 class=" dark-100">{!!__('WARRANTY INFORMATION')!!}</h3>
						<ul class="text-md no-bullets li-icons">
						<li class="mb-xxs-1"><a href="{{ asset('storage/colletrals/EUROPE-Non-Baltic-region-Limited-Warranty-Booklet.pdf') }}"><x-icon-download-ico /> {!!__('EUROPE (Non-Baltic region) Limited Warranty Booklet')!!}</a> – {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2025')!!}</li>
						<li class="mb-xxs-1"><a href="{{ asset('storage/colletrals/BALTIC-REGION-Limited-Warranty-Book.pdf') }}"><x-icon-download-ico /> {!!__('BALTIC REGION  Limited Warranty Booklet')!!}</a> – {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2025')!!}</li>


							<li class="mb-xxs-1"><a href="{{ asset('storage/colletrals/Radar_Tyres_Quick_Reference_Guide_A5--radar-eu.pdf') }}"><x-icon-download-ico /> {!!__('Buyers Warranty Guide')!!}</a> – {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2024')!!}</li>
							<li class="mb-xxs-1"><a href="{{ asset('storage/colletrals/Radar_Tyres_Limited_Warranty_Booklet--radar-eu.pdf') }}"><x-icon-download-ico /> {!!__('Limited Warranty Booklet')!!}</a> - {!!__('Passenger and Light Truck replacement tyres purchased from 1<sup>st</sup> January to 31<sup>st</sup> December, 2024')!!}</li>
							<li><a href="{{ asset('storage/colletrals/Claim_Form - CL01_RA-EU_Tyres--radar-eu.pdf') }}"><x-icon-download-ico /> {!!__('Claim Form')!!}</a> - {!!__('Passenger and Light Truck replacement tyres purchased after  1<sup>st</sup> January, 2024')!!}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		



	</section><!-- #content end -->
</x-guest-layout>