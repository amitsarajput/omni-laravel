<x-guest-layout>
	<!-- Page Title
	============================================= -->
	

	<!-- Content
	============================================= -->
	<section id="content">

		<div class="content-wrap">
		
			<div class="section bg-white">

				<div class="fillter-bar ptlg">
					<div class="container clearfix">
						<div class="heading-block  center custom-heading-block">
							<h2>UK/EUROPE - Dealer Locator</h2>
						</div>
						
						<div class="heading-block center subheading">
							<h3 class="dark">find a dealer near you</h3>
						</div>

						<div class="main-search-bar">
							<div class="container clearfix">
								<form id="mapsearchform" action="#" onsubmit="formsubmission(event, this)">
									<div class="form-row row">
										<div class="col-lg-7">
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
										</div>
										<div class="col-lg-5">
											<div class="buttons">
												<div class="formbutton">
													<input type="submit" id="submitbutt" class="knopf red sharp uppercase hover-black-80" value="search" />
												</div>
												<div class="formbutton text">
													<label class=" ortext">or</label>
												</div>
												<div class="formbutton">
													<button  type="button" class="knopf red sharp uppercase hover-black-80"  onclick="geolocate();">use my location</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>


						<div class="fillter-location">
							<div class="container clearfix">
								<div class="row clearfix">
									<div class="col-lg-12">
										<div id="map" style="min-width: 100%; min-height: 450px;">
											
										</div>
									</div>
									
									<div id="side_bar" class="col-lg-12"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>

			<div class="section">
				<div class="container clearfix">
					<div class="heading-block center">
						<h3 class="dark">Buy Radar Tyres Online</h3>
					</div>
					
					<div class="mx-auto" style="max-width: 880px;">
						<div class="retailers clearfix">
							<div class="retailer">
								<a target="_blank" href="https://www.edentyres.com/radar-tyres/">
										<img class="lozad" src="{{ asset('images/retailerslogo/eden-tyres-servicing.webp') }}" alt="" width="250">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section bg-white">
				<div class="container clearfix">
					<div class="heading-block center">
						<h3 class="dark">Still Can’t Find Us?</h3>
					</div>
					
					<form name="dealerform" class="omniform" action="{{ url('dealerlocatorform/submit') }}" id="dealerform" method="POST">					
						<div class="grid clearfix">
							<div class="col-md-12">
								<p class="form-text">
									If you still can’t find a dealer near you or if you may need any additional information from us on sizes, specifications, warranties or anything else, please get in touch with us via the below form and we will get back to you as soon as we can. 
								</p>
							</div>
							<div class="col-md-4">
								<input type="text" id="name" name="name" placeholder="Name*" value="" class="sm-form-control required">
							</div>
							<div class="col-md-4">
								<input type="email" id="email" name="email" placeholder="Email*" value="" class="sm-form-control email required">
							</div>
							<div class="col-md-4">
								<input type="text" id="location" name="location" placeholder="Location*" value="" class="sm-form-control required">
							</div>
							<div class="hidden">
								<input type="hidden" id="current_page" name="current_page" value="">
								<input type="text" id="g-recaptcha" name="g-recaptcha" value="" />
								<input type="text" id="g-recaptcha-action" name="g-recaptcha-action" value="" />
							</div>
							<div class="col-md-12">
								<textarea class="required sm-form-control" id="message" name="message" placeholder="Message" rows="6" ></textarea>
							</div>
							<div class="col-md-12">
								<button class="knopf uppercase sharp red hover-black-80 heading-font" type="submit" id="submit" name="submit" value="submit">Submit</button><br>
								<small class="font-sm">*Required Fields</small>
							</div>
							
							<div class="result"></div>
							<div class="error"></div>
						</div>
					</form>

				</div>
			</div>

			<div class="section" >
				<div class="container">
					<div class="grid">
						<div class="col-lg-6 offset-lg-3">
							<div class="heading-block center">
								<h3 class="dark">View our Product Range</h3>
							</div>
							<x-image-box-two  title="" image="{{asset('images/RT_plus-R8_plus-RPX800-Banner.webp')}}" url="" />
						</div>
					</div>
				</div>
			</div>
			
		</div><!-- content-wrap end -->

	</section><!-- content end-->
</x-guest-layout>