@extends('layouts.base')

@section ('head')

<style type="text/css">	

</style>

@stop


@section ('body')

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<a class="info" href="{{ url('automotive') }}">Services >> Automotive >></a>
			<a class="info">Infotainment</a>
		</div>
	</div>

	<div class="container row-odd">
		<div class="row">
			<div class = "col-lg-12">
				<h3>Infotainment</h3>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-6 vcenter">
				<p class="quote">
					“We help in designing a device or service that delivers a combination of information and entertainment. The content delivered via infotainment is designed to be informative yet entertaining enough to attract and maintain the consumer's interest”.
				</p>

				<p>
					BLR LABS aids you to deliver a type of media which provides a combination of information and entertainment, and products and systems which are built into, or can be added to vehicles in order to enhance driver and/or passenger experience.
				</p>
			</div>

			<div class = "col-lg-6 vcenter">
				<img class="img-responsive"
					style="width: 600px; height: 250px;"
					src="assets/automotive/infotainment.jpg" alt="">
			</div>

		</div>
	</div>


	<div class="container-fluid row-even" style="background-color: #F4F4F4;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 vcenter">
					<h3>Business Imperatives</h3	>
					<p>
						Infotainment can refer to a variety of content served through traditional media such as television, print, radio or the Internet. Television channels like Animal Planet and the Food Network are prime examples of media serving infotainment content. The term infotainment is also frequently applied to devices designed to serve infotainment content, such as in-car entertainment and information systems.
					</p>
					<p>
						In-Vehicle Infotainment systems are currently available in select automobiles from manufacturers like Ford Toyota KIA Motors Cadillac and Fiat. IVI systems frequently utilize Bluetooth technology and/or smartphones to help drivers control the system with voice commands, touchscreen input, or physical controls.
					</p>
					<p>
						It has increased with the growing popularity and use of social media applications, In the case of social media websites such as Twitter and Facebook, which were originally created for the purpose of connecting, re-connecting and sharing personal thoughts and information with public, they have now provided a new medium for the spread of "infotainment" and exploitation of public matters.
					</p>
				</div>

				<div class = "col-lg-6 vcenter">
					<img class="img-responsive"
						style="width: 600px; height: 250px;"
						src="assets/automotive/infotainment-page1.jpg" alt="">
				</div>

			</div>
		</div>
	</div>

	</br>

	<div class="container row-odd">
		<div class = "row">
			<div class = "col-lg-12">
				<h3>Services</h3>
				
				<ul class="imagebullets">
					<li>
						HMI Development: MVC Models, Qt, HTML5
					</li>
					<li>
						Graphics: OpenGL, Widgets
					</li>
					<li>
						Multimedia: Codec Integration & adaptation.
					</li>
					<li>
						We provide a combination of information and entertainment.
					</li>
					<li>
						Assists in enhancing driver and/or passenger experience.
					</li>
					<li>
						Provide a variety of functions and services, many of which include the several increasingly popular social media websites and applications being used daily by billions of users worldwide.
					</li>
				</ul>

				<h3>Values</h3>
				
				<ul class="imagebullets">
					<li>
						To provide necessary information in the form of user polls, quizzes, and contests.
					</li>
					<li>
						An increasing number of media outlets are available to the public which exclusively focus on a single topic such as current events.
					</li>
					<li>
						Consumers have a broad choice whether they receive a general feed of the most "important" information of the day or a highly customized presentation of a single type of content.
					</li>
				</ul>

			</div>
		</div>
	</div>

@stop


