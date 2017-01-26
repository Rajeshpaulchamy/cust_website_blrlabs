@extends('layouts.base')

@section ('fullslider')
		<!-- carousel -->
		<div class="crosscover"  id ="still">
			<div class="crosscover-list">

				<li style="background-size: 100% 100%;" class="crosscover-item is-active">
					<img src="assets/fullscreen_aboutus3.jpg" alt="automotive"></img>
					<!-- <div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">WORKING TOGETHER</h2>
						
							<p class="crosscover-description animated slideInUp">bringing the world's knowledge and expertise together</p>
							
							<p class="crosscover-description animated slideInUp"><em style="font-family: timesnewroman;">together we can...</em> </p>

							<a class="crosscover-button btn btn-responsive btn-warning" href="#read-more" role="button">Read More</a>
						</div>
					</div> -->
				</li>
			</div>
		</div>

@stop

@section ('body')

	<div class="container" id="read-more">
		<div class="row">
			<div class="col-lg-12">
				<h3>About Us</h3>
				<p align="justify">BLR LABS (Bengaluru Labs) stands with vision of being an innovation hub for our team to deliver services and solutions to delight customers, especially in emerging markets using advanced technologies. The leadership team is formed with diversified expertize and are IISc and IIM graduates with 100+ years of collective experience. We have carved the business roadmap where the market is at an inflexion point, which opens up scope for penetration right from problem definition, standardization and all the way up to solutioning. We are positioned with the clear objective of delivering solid value to customers and the market, which should provide us with returns for our investors, both in terms of profitability & visibility.</p>				
			</div>
		</div>

		<!-- <div class="row">
			<div class="col-lg-12">
				<h3>Vision</h3>
				<p>Innovative Technology Company providing Integrated Solutions for Customer Success.</p>				
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<h3>Mission</h3>
				<p>Preferred Global Service Partner, leveraging Next Gen Technologies, Driven by Empowered Intellects.</p>
			</div>
		</div> -->
	</div>


	<section id="meet-team" style="margin-top: -70px;">
		<div class="container">
			<div class="section-header">
				<h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Leadership Team</h2> </br>
			</div>

			<div class="row">

				<div class="col-lg-4 col-sm-6 text-center" style="padding-bottom: 15px;">
					<div style="max-width: 300px;" class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 0ms; animation-name: fadeInUp;">
						<div class="team-img">
							<img class="img-responsive"  src="assets/team/ravishankar.jpg" alt="ravishankar">
						</div>
						<div class="team-info">
							<h3 style="min-height: 70px;">Ravishankar Balasubramanian</h3>
							<span style="font-weight: 800;">CEO</span>
						</div>
						<!-- <p>
							A technology & social entrepreneur with 15+ years, 50 tapeout experience in Physical Design of Asics. Started entrepreneurial journey in 2010 with Blackpepper technologies, co-founded Actifolks Network & now in this journey of kick starting BLRLABS
						</p> -->
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>&nbsp;
							<li><a href="https://www.linkedin.com/in/ravishankar-balasubramanian-2679485"><i class="fa fa-linkedin"></i></a></li>&nbsp;
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 text-center" style="padding-bottom: 15px;">
					<div style="max-width: 300px;" class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 200ms; animation-name: fadeInUp;">
						<div class="team-img">
							<img class="img-responsive" src="assets/team/vivekanand.jpg" alt="">
						</div>
						<div class="team-info">
							<h3 style="min-height: 70px;">Vivekanand Srikantaiah</h3>
							<span style="font-weight: 800;">Chief Relationship Officer</span>
						</div>
						<!-- <p>
							Versatile, analytical and hard working test engineering and quality assurance professional with 15 years' solid experience. Co-founder Blackpepper, Whitefield school.
						</p>  -->
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>&nbsp;
							<li><a href="https://in.linkedin.com/in/vivekanands"><i class="fa fa-linkedin"></i></a></li>&nbsp;
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 text-center" style="padding-bottom: 15px;">
					<div style="max-width: 300px;" class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 0ms; animation-name: fadeInUp;">
						<div class="team-img">
							<img class="img-responsive"  src="assets/team/swarupa.jpg" alt="ravishankar">
						</div>
						<div class="team-info">
							<h3 style="min-height: 70px;">Swarupa Kakumanu</h3>
							<span style="font-weight: 800;">Chief Delivery Officer</span>
						</div>
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>&nbsp;
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 text-center" style="padding-bottom: 15px;">
					<div style="max-width: 300px;" class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 0ms; animation-name: fadeInUp;">
						<div class="team-img">
							<img class="img-responsive"  src="assets/team/vivek.jpg" alt="ravishankar">
						</div>
						<div class="team-info">
							<h3 style="min-height: 70px;">Vivek Saxena</h3>
							<span style="font-weight: 800;">Chief Marketing Officer</span>
						</div>
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>&nbsp;
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6" style="padding-bottom: 15px;">
					<div style="max-width: 300px;" class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 300ms; animation-name: fadeInUp;">
						<div class="team-img">
							<img class="img-responsive"  src="assets/team/harsha.jpg" alt="">
						</div>
						<div class="team-info">
							<h3 style="min-height: 70px;">Harsha Bagur</h3>
							<span style="font-weight: 800;">Head of Solutions</span>
						</div>
						<!-- <p>
							Seasoned Professional with rich experience in Technology Roadmap, Software & Systems Architecture, Requirements Management, Software Design & Development for Telecom (Mobile handsets) and Real-Time Embedded Systems (Telematics & Infotainment - Automotive).
						</p>  -->
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>&nbsp;
							<li><a href="https://de.linkedin.com/in/harshabagur"><i class="fa fa-linkedin"></i></a></li>&nbsp;
						</ul>
					</div>
				</div>				

				<!-- <div class="col-lg-4 col-sm-6 text-center" style="padding-bottom: 15px;">
					<div style="max-width: 300px;" class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 300ms; animation-name: fadeInUp;">
						<div class="team-img">
							<img class="img-responsive"  src="assets/team/binay.jpg" alt="">
						</div>
						<div class="team-info">
							<h3 style="min-height: 70px;">Binaya Kumar Dhar</h3>
							<span style="font-weight: 800;">COO</span>
						</div>
					
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>&nbsp;
							<li><a href="https://in.linkedin.com/in/binaya-dhar-01058318"><i class="fa fa-linkedin"></i></a></li>&nbsp;
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6" style="padding-bottom: 15px;">
					<div class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 100ms; animation-name: fadeInUp;">
						<div class="team-img">
							<img class="img-responsive"  src="assets/team/nagarajan.jpg" alt="">
						</div>
						<div class="team-info">
							<h3>Nagarajan Narayanasamy</h3>
							<span>Co-Founder</span>
						</div>
						<p>
							A seasoned Embedded Systems Professional with over 25 years of experience at Wipro, Tech Mahindra, TCS and Toshiba. Recently Founded Wimera Systems Pvt Ltd to provide solutions in IoT.
						</p>
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>&nbsp;
							<li><a href="https://www.linkedin.com/in/nagarajanwimera"><i class="fa fa-linkedin"></i></a></li>&nbsp;
						</ul>
					</div>
				</div> -->

				<!-- <div class="col-lg-3 col-sm-6" style="padding-bottom: 15px;">
					<div class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 300ms; animation-name: fadeInUp;">
						<div class="team-img">
							<img class="img-responsive"  src="assets/team/avinash.jpg" alt="">
						</div>
						<div class="team-info">
							<h3>Avinash Kale</h3>
							<span>Co-Founder</span>
						</div>
						<p>
							20+ years, Industry experience spread across varied domains currently Healthcare Diagnostics Imaging Systems. And Consumer Electronics, Semiconductor, Industrial Automation & Controls, Automotive and Telecom.
						</p> 
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>&nbsp;
							<li><a href="https://cn.linkedin.com/in/avinash-kale-b42253a"><i class="fa fa-linkedin"></i></a></li>&nbsp;
						</ul>
					</div>
				</div> 

				<div class="col-lg-4 col-sm-6" style="padding-bottom: 15px;">
					<div style="max-width: 300px;" class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 300ms; animation-name: fadeInUp;">
						<div class="team-img">
							<img class="img-responsive"  src="assets/team/siba.jpg" alt="">
						</div>
						<div class="team-info">
							<h3 style="min-height: 70px;">Siba Prasad</h3>
							<span style="font-weight: 800;">CSO</span>
						</div>
						<p>
							A multi-skilled business focused IT/Digital/Multi channel project consultant with more than 12 years of experience in the ecommerce, insurance,BFS , telecom ,mobility industry sectors managing projects with team size of 10 to 50 individuals.
						</p>  
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>&nbsp;
							<li><a href="https://in.linkedin.com/in/siba-prasad-a775091b"><i class="fa fa-linkedin"></i></a></li>&nbsp;
						</ul>
					</div>
				</div>-->

				<!-- <div class="col-lg-3 col-sm-6" style="padding-bottom: 15px;">
					<div class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 300ms; animation-name: fadeInUp;">
						<div class="team-img">
							<img class="img-responsive"  src="assets/team/sreejesh.jpg" alt="">
						</div>
						<div class="team-info">
							<h3>Sreejesh Nair</h3>
							<span>Co-Founder</span>
						</div>
						<p>
							A multi-talented result oriented IT consultant with more than 12 years of experience in mobility, BFSI , S/W tools development, contributor to eclipse platform and having 4 patents on software reliability.
						</p> 
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>&nbsp;
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>&nbsp;
							<li><a href="https://kr.linkedin.com/in/sreejesh-nair-89102174"><i class="fa fa-linkedin"></i></a></li>&nbsp;
						</ul>
					</div>
				</div> -->

			</div>

			<div class="divider"></div>

			<div class="row">
				<div class="col-sm-4">
					<h3 class="column-title">Our Skills</h3>
					<strong>SEMICONDUCTOR</strong>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" data-width="85" style="width: 85%;">85%</div>
					</div>
					<strong>IOT</strong>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" data-width="70" style="width: 70%;">70%</div>
					</div>
					<strong>AUTOMOTIVE</strong>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" data-width="90" style="width: 90%;">90%</div>
					</div>
					<strong>SMAC</strong>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" data-width="65" style="width: 65%;">65%</div>
					</div>
				</div>

				<div class="col-sm-4">
					<h3 class="column-title">Our History/Plan</h3>
					<div role="tabpanel">
						<ul class="nav main-tab nav-justified" role="tablist">
							<li role="presentation" class="active">
								<a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">2016</a>
							</li>
							<!-- <li role="presentation">
								<a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">2016</a>
							</li> -->
							<li role="presentation">
								<a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">2017</a>
							</li>
							<li role="presentation">
								<a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="false">2018</a>
							</li>
						</ul>
						<div id="tab-content" class="tab-content">
							<div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
								<p>Company started</p>
								<p>Current team size is 40, planned to increase the head count to 100</p>								
							</div>
							<!-- <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
								<p>Company started</p>
								<p>Planned to increase the head count to 100</p>
							</div> -->
							<div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
								<p>Planned to increase the head count to 300</p>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="tab3">
								<p>Planned to increase the head count to 500</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<h3 class="column-title">Info</h3>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Address
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									BLRLABS Private Limited,
									#9/2, Coronet Green Commercial Complex,Second floor (above Big Bazaar),
									Sarjapur Main Road, Bellandur
									Bangalore- 560102,
									India.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										E-Mail ID
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									sales@blrlabs.com
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Phone
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									+91-80-64510319
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>	

@stop


