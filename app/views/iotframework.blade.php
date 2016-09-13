@extends('layouts.base')

@section ('head')

<style type="text/css">	

</style>

@stop


@section ('body')

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<a class="info" href="{{ url('') }}">Home >> </a>
			<a class="info">Solutions >> IoT Framework</a>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class = "col-lg-12">
				<h3>IoT Framework</h3>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
				<p class="quote">
					“We help you design a device to Connect to Any Product Using Any Device, Over Any Communication Channel (Cellular Networks, the Internet, Wi-Fi, or Satellite), and For Any Application”.
				</p>

				</br>

				<p class="highlight">					
					BLR LABS main moto lies in helping city officials and connected solution providers create transformative new services that make cities safer and more efficient.
				</p>
			</div>
		</div>

		<div class="row">
			<div class = "col-lg-6 text-center">
				<img class="img-responsive"
					style="width: 400px; height: 400px;"
					src="assets/iot-framework/iot-framework-img1.png" alt="home-automation-img">
			</div>
			<div class = "col-lg-6 text-center">
				<img class="img-responsive"
					style="width: 400px; height: 400px;"
					src="assets/iot-framework/iot-framework-img2.png" alt="home-automation-img">
			</div>			
		</div>
	</div>

	</br>

	<div class="container">

		<div class = "row">
			<div class = "col-lg-12">
				<h3>Services</h3>

				<p>
					The industry’s first platform to combine cloud, hardware, and managed connectivity services to support worldwide IoT deployments. BLR LABS provides all the services you need and managed connectivity services.
				</p>
				<p>
					The Internet of Things (IoT) is making it possible to make cities greener, safer and more efficient. By connecting devices, vehicles and infrastructure everywhere in a city, governments and their partners can reduce energy and water consumption, keep people moving efficiently, and improve safety and quality of life.
				</p>

				<ul class="imagebullets">
					<li>
						Customer analytics.
					</li>
					<li>
						Customer segmentation.
					</li>
					<li>
						Demand response.
					</li>
					<li>
						Distributed generation management.
					</li>
					<li>
						Energy efficiency.
					</li>
					<li>
						Fraud detection.
					</li>
				</ul>

				<h3>Values</h3>
				
				<ul class="imagebullets">
					<li>
						Security.
					</li>
					<li>
						Design.
					</li>
					<li>
						Freedom of choice – both privacy protections and underlying standards should promote freedom of choice.
					</li>
					<li>
						Transformer management.
					</li>
					<li>
						Transmission and distribution asset management.
					</li>					
				</ul>

			</div>
		</div>		
	</div>

@stop


