@extends('layouts.home')


@section ('fullslider')

		<!-- carousel -->
		<div class="crosscover" id ="home-slider">
			<div class="crosscover-list">

				<li class="crosscover-item is-active">
					<img src="assets/fullscreen_smac.jpg" alt="automotive"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Social. Mobile. Analytics. Cloud.</h2>
						
							<p class="animated slideInUp">blending people's perspectives and the technologies.</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">business with people</em> </p>

							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('smac') }}" role="button">Read More</a>
						</div>
					</div>
				</li>

				<!-- <li class="crosscover-item is-wait">
					<img src="assets/fullscreen_smac2.jpg" alt="automotive"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Big Data Complexity Simplified</h2>
						
							<p class="animated slideInUp">quickly turn complex data into actionable strategy</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">smarter analytics...</em> </p>

							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('under-construction') }}" role="button">Read More</a>
						</div>
					</div>
				</li> -->
				
				<li class="crosscover-item is-wait">
					<img src="assets/fullscreen_wearable2.jpg" alt="connected devices"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Wearable Health Devices</h2>
						
							<p class="animated slideInUp">health monitoring connected safety devices</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">safety simplified... </em> </p>
							
							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('consumeriot') }}" role="button">Read More</a>
						</div>
					</div>
				</li>

				<!-- <li class="crosscover-item is-wait">
					<img src="assets/fullscreen_wearable.jpg" alt="connected devices"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Connected Devices For Life</h2>
						
							<p class="animated slideInUp">to make your life easier than ever before, safety, and situational awareness</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">innovation for lifestyle... </em> </p>
							
							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('under-construction') }}" role="button">Read More</a>
						</div>
					</div>
				</li> -->

				<li class="crosscover-item is-wait">
					<img src="assets/fullscreen_smarthome.jpg" alt="connected devices"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Smart Home Applications</h2>
						
							<p class="animated slideInUp">now complete control in your hand</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">innovation for life... </em> </p>
							
							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('home-automation') }}" role="button">Read More</a>
						</div>
					</div>
				</li>

				<li class="crosscover-item is-wait">
					<img src="assets/fullscreen_iot.jpg" alt="iot"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Welcome To The Industrial IOT</h2>
						
							<p class="animated slideInUp">working things, dynamics things, everything that communicate with each other.</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">iot for industrial... </em> </p>
							
							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('industrialiot') }}" role="button">Read More</a>
						</div>
					</div>					
				</li>

				<li class="crosscover-item is-wait">
					<img src="assets/fullscreen_connectedcar.jpg" alt="automotive"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Connected Cars</h2>
						
							<p class="animated slideInUp">cars talking to each other, smart driving ever experienced before</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">safe and comfort</em> </p>
							
							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('automotive') }}" role="button">Read More</a>
						</div>
					</div>
				</li>

				<li class="crosscover-item is-wait">
					<img src="assets/fullscreen_infotainment.jpg" alt="automotive"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Infotainment</h2>
						
							<p class="animated slideInUp">integrated infotainment solutions</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">share and enjoy</em> </p>
							
							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('automotive') }}" role="button">Read More</a>
						</div>
					</div>
				</li>

				<li class="crosscover-item is-wait">
					<img src="assets/fullscreen_silicon.jpg" alt="automotive"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Silicon Solutions</h2>
						
							<p class="animated slideInUp">embedded software, semiconductor solutions.</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">elegant solutions for smart devices</em> </p>
							
							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('semiconductor') }}" role="button">Read More</a>
						</div>
					</div>
				</li>

				<li class="crosscover-item is-wait">
					<img src="assets/fullscreen_byod.jpg" alt="automotive"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Bring Your Own Device</h2>
						
							<p class="animated slideInUp">we deliver a complete B.Y.O.D. solution that you can easily tailor to meet your needs.</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">simplicity without compromise</em> </p>
							
							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('enterprise-mobility') }}" role="button">Read More</a>
						</div>
					</div>
				</li>

				<!-- <li class="crosscover-item is-wait">
					<img src="assets/fullscreen_enterpriselock.jpg" alt="automotive"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Secured Enterprise Mobility Management</h2>
						
							<p class="animated slideInUp">device encryption, secured from data breach and data leakage.</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">data security confirmed...</em> </p>
							
							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('under-construction') }}" role="button">Read More</a>
						</div>
					</div>
				</li>


				<li class="crosscover-item is-wait">
					<img src="assets/fullscreen_enterprisesoft.jpg" alt="automotive"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">Enterprise Sofware Solutions</h2>
						
							<p class="animated slideInUp">fully customized software solutions for your organization.</p>
							
							<p class="animated slideInUp"><em style="font-family: timesnewroman; font-size: 20px;">work simplified...</em> </p>
							
							<a class="crosscover-button btn btn-responsive btn-info" style="color: black;"  href="{{ url('under-construction') }}" role="button">Read More</a>
						</div>
					</div>
				</li> -->

			</div>
		</div>
@stop	

@section ('body')

<div class="navbar navbar-fixed-bottom navbar-footer" style="height: 40px;">
	<div class="container  text-center">

		<div class="row">
			<div class = "col-lg-4">
				<p class="second_lvl navbar-text" style="text-align: center;">
					<em>Co-Creating Next</em></p>
			</div>
			<div class = "col-lg-4">
				<span class="company_name navbar-text">© BLR LABS Private Limited</span>
			</div>
			<div class = "col-lg-4">
				<div class="navbar-text" style="margin-top: 8px;">
					<a class="btn btn-social-icon btn-facebook" 
						href="https://www.facebook.com/profile.php?id=100010918803397">
						<span class="fa fa-facebook"></span>
					</a> &nbsp;
					<a class="btn btn-social-icon btn-twitter" 
						href="https://twitter.com/blrlabsprivate">
						<span class="fa fa-twitter"></span>
					</a> &nbsp;
					<a class="btn btn-social-icon btn-linkedin" 
						href="https://www.linkedin.com/company/10427948?trk=tyah&trkInfo=clickedVertical%3Acompany%2CentityType%3AentityHistoryName%2CclickedEntityId%3Acompany_company_10427948%2Cidx%3A0">
						<span class="fa fa-linkedin"></span>
					</a> &nbsp;
				</div>				
			</div>

		</div>
	</div>
</div>

@stop
