@extends('layouts.base')

@section ('head')

<style type="text/css">	

</style>

@stop


@section ('body')

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<a class="info" href="{{ url('') }}">Home >> </a>
			<a class="info">Solutions >> Safety Geofencing</a>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class = "col-lg-12">
				<h3>Safety-Geolocation and Geofencing</h3>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
				<p class="quote">
					“We help you in from a device connected to the Internet, to obtain various types of information in real time and locate it on the map with high accuracy at a given point in time”.
				</p>

				</br>

				<p class="highlight">					
					BLR LABS believes that the capability to provide accurate and timely geo-reference data, tag items of interest with location metadata, and use location coordinates as a key to search databases has become the foundation for an expanding software market for applications that run on mobile platforms.
				</p>
			</div>
		</div>

		<div class="row">
			<div class = "col-lg-12 text-center">
				<img class="img-responsive"
					src="assets/safety-geofencing/safety-geofencing-img1.jpg" alt="home-automation-img">
			</div>
		</div>

		</br>

		<div class="row">
			<div class="col-lg-12">
				<p>
					A geolocation system is an information technology solution that ascertains the location of an object in the physical (geo-spatial) or virtual (Internet) environment. Most often, the object is a person who wants to utilize a service based on location, while maintaining his/her privacy.
				</p>

				<p>
					Geofencing combines awareness of the user's current location with awareness of the user's proximity to locations that may be of interest. To mark a location of interest, you specify its latitude and longitude. To adjust the proximity for the location, you add a radius. The latitude, longitude, and radius define a geofence, creating a circular area, or fence, around the location of interest.
				</p>
			</div>
		</div>

		<div class="row">
			<div class = "col-lg-12 text-center">
				<img class="img-responsive"
					style=""
					src="assets/safety-geofencing/safety-geofencing-img2.jpg" alt="home-automation-img">
			</div>
		</div>

	</div>

	</br>

	<div class="container">
		<div class = "row">
			<div class = "col-lg-12">
				<h3>Geolocation and Geofencing data generally are used for three purposes</h3>
				
				<ul class="imagebullets">
					<li>
						Geo-referencing or positioning—Ascertaining the physical location of an object or person relative to a coordinate system (map) to access specific information later.
					</li>
					<li>
						Geo-coding—searching for information regarding objects or services on a map, such as locating a restaurant offering a particular type of cuisine.
					</li>
					<li>
						Geo-tagging—adding geographic information to an object, such as a photograph, by incorporating the geolocation data in the photograph’s metadata.
					</li>
				</ul>

				<h3>Values</h3>
				
				<ul class="imagebullets">
					<li>
						In advertising, use of designated market areas (DMA) and demographic data.
					</li>
					<li>
						Know your customer (KYC).
					</li>
					<li>
						Delivery and asset management.
					</li>
					<li>
						Augmented reality, i.e., the use of geo-reference data and other detection methods, such as motion sensors and compass, combined with virtual information from the Internet, to enrich the user’s world view.
					</li>
					<li>
						Fraud detection and prevention using IP location technology in conjunction with fraud profile data.
					</li>
				</ul>

			</div>
		</div>
	</div>

@stop


