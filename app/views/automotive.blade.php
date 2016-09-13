@extends('layouts.base')

@section ('head')

<style type="text/css">	

	/* CSS MOUSER HOVER EFFECT FOR PRODUCTS IMAGES -- START */
	.hovereffect {
		width:100%;
		height:100%;
		float:left;
		overflow:hidden;
		position:relative;
		text-align:center;
		cursor:default;
	}

	.hovereffect .overlay {
		width:100%;
		height:100%;
		position:absolute;
		overflow:hidden;
		top:0;
		left:0;
		opacity:0;
		background-color:rgba(0,0,0,0.5);
		-webkit-transition:all .4s ease-in-out;
		transition:all .4s ease-in-out
	}

	.hovereffect img {
		display:block;
		position:relative;
		-webkit-transition:all .4s linear;
		transition:all .4s linear;
	}

	.hovereffect h2 {
		text-transform:uppercase;
		color:#fff;
		text-align:center;
		position:relative;
		font-size:17px;
		background:rgba(0,0,0,0.6);
		-webkit-transform:translatey(-100px);
		-ms-transform:translatey(-100px);
		transform:translatey(-100px);
		-webkit-transition:all .2s ease-in-out;
		transition:all .2s ease-in-out;
		padding:10px;
	}

	.hovereffect a.info {
		text-decoration:none;
		display:inline-block;
		text-transform:uppercase;
		color:#fff;
		border:1px solid #fff;
		background-color:transparent;
		opacity:0;
		filter:alpha(opacity=0);
		-webkit-transition:all .2s ease-in-out;
		transition:all .2s ease-in-out;
		margin:50px 0 0;
		padding:7px 14px;
	}

	.hovereffect a.info:hover {
		box-shadow:0 0 5px #fff;
	}

	.hovereffect:hover img {
		-ms-transform:scale(1.2);
		-webkit-transform:scale(1.2);
		transform:scale(1.2);
	}

	.hovereffect:hover .overlay {
		opacity:1;
		filter:alpha(opacity=100);
	}

	.hovereffect:hover h2,.hovereffect:hover a.info {
		opacity:1;
		filter:alpha(opacity=100);
		-ms-transform:translatey(0);
		-webkit-transform:translatey(0);
		transform:translatey(0);
	}

	.hovereffect:hover a.info {
		-webkit-transition-delay:.2s;
		transition-delay:.2s;
	}
	/* CSS MOUSER HOVER EFFECT FOR PRODUCTS IMAGES -- END */

</style>

@stop


@section ('body')

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<a class="info" href="{{ url('') }}">Home >> </a>
			<a class="info">Services >> Automotive</a>
		</div>
	</div>

	<div class="container row-odd">
		<div class = "row">
			<div class = "col-lg-4 col-md-4">
				<div class="hovereffect">
					<img class="img-responsive" src="assets/automotive/telematics.jpg" alt="">
					<div class="overlay">
						<h2>TELEMATICS</h2>
						<a class="info" href="{{ url('telematics') }}">READ MORE</a>
					</div>
				</div>
				<div class="caption text-center" style="margin-top: 10px;">
					<h3>TELEMATICS</h3>
				</div>
			</div>

			<div class = "col-lg-4 col-md-4">
				<div class="hovereffect">
					<img class="img-responsive" src="assets/automotive/infotainment.jpg" alt="">
					<div class="overlay">
						<h2>INFOTAINMENT</h2>
						<a class="info" href="{{ url('infotainment') }}">READ MORE</a>
					</div>
				</div>
				<div class="caption text-center" style="margin-top: 10px;">
					<h3>INFOTAINMENT</h3>
				</div>
			</div>

			<div class = "col-lg-4 col-md-4">
				<div class="hovereffect">
					<img class="img-responsive" src="assets/automotive/connectedcars.jpg" alt="">
					<div class="overlay">
						<h2>CONNECTED CARS</h2>
						<a class="info" href="{{ url('connectedcars') }}">READ MORE</a>
					</div>
				</div>
				<div class="caption text-center" style="margin-top: 10px;">
					<h3>CONNECTED CARS</h3>
				</div>
			</div>
		</div>
	</div>

	<hr style="color: black;">

	<div class="container row-odd">
		<div class = "row">
			<div class = "col-lg-12">
				<h3>Automotive</h3>
				<p class="quote"> 
					We are intensively involved in Automotive consulting and technologies to augment profit in business through automotive value, the automotive industry is going through a complete transformation in the new global scenario.
				</p>

				<p> 
					BLR LABS provides best support in Automotive technologies as it is one of the world's most important economic sectors by revenue.
				</p>				
			</div>
		</div>

		<div class = "row">	
			<div class = "col-lg-12">
				<img class="img-responsive" src="assets/automotive/automotive.jpg" alt="">
			</div>
		</div>
	</div>

	<div class="container-fluid row-even">
		<div class="container">
			<div class = "row">
				<div class = "col-lg-12">
					<h3>Business Imperatives</h3>
					<p>
						The automotive technology is going through a complete mutation in the new universal plot. Raised extension, embodiment, technology orientation, safety requirements are changing the phase. The automotive companies of today are faced with a framework where they have to drive creativity and also be cost effective. Only those companies which are driving innovations and finding new ways to create value will survive and prosper in coming times.
					</p>

					<h3>Objectives of Automotive technologies at BLR are</h3>
					<ul class="imagebullets">
						<li>
							To enhance awareness of the impact of the advancement in the automobile technology in the economic, social, and environmental context and the contribution of the automobile industry in the society.
						</li>
						<li>
							Increased pressure for faster innovation and flexibility in development and manufacturing.
						</li>
						<li>
							Optimization of supply chain enabled by exchange of real-time information across dealership.
						</li>
						<li>
							Effective demand forecast to improve planning.
						</li>
						<li>
							Improve operational efficiency thereby reduces costs.
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container  row-odd">
		<div class = "row">
			<div class = "col-lg-12">
				<h3>Services</h3>
				<p>
					Telematics that encompasses telecommunications, vehicular technologies, road transportation, road safety, electrical engineering and computer science.

					Infotainment the combination of information and entertainment.

					Connected Cars that is equipped with Internet access, and usually also with a wireless local area network.
				</p>

				<h3>Objectives of Automotive technologies at BLR are</h3>
				<ul class="imagebullets">
					<li>
						In this digital era, we find automotive technology to be more reliable.
					</li>
					<li>
						It provides high level safety.
					</li>
					<li>
						Cost deduction is one of the most impressive value of Automotive Technology.
					</li>
					<li>
						Provides effective planning in digitalization.
					</li>
				</ul>
			</div>
		</div>
	</div>	
@stop


