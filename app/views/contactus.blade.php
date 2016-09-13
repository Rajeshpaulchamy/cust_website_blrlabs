@extends('layouts.base')

@section ('fullslider')

	<div id="content">

		{{-- google map --}}
		<div class="row ">
			<div class="col-lg-12">
				<!-- <div id="map-overlay" class="gm-style icon" style="position: absolute; left: 20px; top: 100px;">
				  <div style="margin: 10px; padding: 1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; background-color: white;">
				    <div jstcache="0">
				      <div jstcache="124" class="place-card place-card-large">
				        <div class="place-desc-large">
				          <div jstcache="41" class="place-name" jsan="7.place-name">State Bank</div>
				          <div jstcache="42" class="address" jsan="7.address">Saki Vihar Rd, Ansa Industrial Estate, Chandivali, Andheri East, Mumbai, Maharashtra 400072</div>
				        </div>
				        <div jstcache="43" class="navigate">
				          <div jsaction="placeCard.directions" class="navigate">
				            <a target="_blank" jstcache="56" href="https://www.google.com/maps/dir//Big+Bazaar+Express/@12.9192637,77.6685039,20z/data=!4m8!4m7!1m0!1m5!1m1!1s0x0:0x30d1609bcea84b18!2m2!1d77.668837!2d12.9190833?hl=en-US" class="navigate-link">
				              <div class="icon navigate-icon"></div>
				              <div class="navigate-text">Directions</div>
				            </a>
				          </div>
				          <div class="tooltip-anchor">
				            <div class="tooltip-tip-outer"></div>
				            <div class="tooltip-tip-inner"></div>
				            <div class="tooltip-content">
				              <div>Get directions to this location on Google Maps.</div>
				            </div>
				          </div>
				        </div>
				        <div jstcache="44" class="navigate-separator"> </div>
				        <div jstcache="45" class="star-entity">
				          <div jsaction="placeCard.star" class="star-button">
				            <div class="star-entity-icon-large">
				              <div jstcache="71" class="" style="display:none"> </div>
				              <div jstcache="72" class="icon logged-out-star"> </div>
				            </div>
				            <div jstcache="73" class="star-entity-text hidden" jsan="7.star-entity-text,7.hidden,t-PmAZCbgKmDw">Saved</div>
				            <div jstcache="74" class="star-entity-text" jsan="7.star-entity-text,t-bbrD6GAQ-ds">Save</div>
				          </div>
				          <div jstcache="75" class="tooltip-anchor">
				            <div class="tooltip-tip-outer"></div>
				            <div class="tooltip-tip-inner"></div>
				            <div class="tooltip-content">
				              <div>Save this place onto your Google map.</div>
				            </div>
				          </div>
				        </div>
				        <div jstcache="46" class="review-box">
				          <div jstcache="47" class="" style="display:none"></div>
				          <div jstcache="48" jsinstance="0" class="" style="display:none" jsvs="0.75;0.75;0.25;0.25;"></div>
				          <div jstcache="48" jsinstance="1" class="" style="display:none" jsvs="1.75;1.75;1.25;1.25;"></div>
				          <div jstcache="48" jsinstance="2" class="" style="display:none" jsvs="2.75;2.75;2.25;2.25;"></div>
				          <div jstcache="48" jsinstance="3" class="" style="display:none" jsvs="3.75;3.75;3.25;3.25;"></div>
				          <div jstcache="48" jsinstance="*4" class="" style="display:none" jsvs="4.75;4.75;4.25;4.25;"></div>
				          <a target="_blank" jstcache="49" href="http://maps.google.co.in/search?q=State+Bank,+Saki+Vihar+Rd,+Ansa+Industrial+Estate,+Chandivali,+Andheri+East,+Mumbai,+Maharashtra+400072&amp;ludocid=9660074819422015522#lrd=0x3be7c872882cd4f5:0x860f7addf3585022,1" jsaction="mouseup:placeCard.reviews" jsan="8.href,0.target,22.jsaction">2 reviews</a> 
				        </div>
				        <div jstcache="50" class="saved-from-source-link" style="display:none"></div>
				        <div class="google-maps-link"> <a target="_blank" jstcache="51" href="https://maps.google.com/maps?ll=19.106203,72.887936&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=9660074819422015522" jsaction="mouseup:placeCard.largerMap">View larger map</a> </div>
				      </div>
				    </div>
				  </div>
				</div> -->				
				<div id="map_canvas" class="slider-size" style="width: 100%; height:500px;"></div>

			</div>
		</div>
	</div>

@stop

@section ('body')

	<div class="container">
		{{-- contact info --}}
		<div class="row ">
			{{-- contact info --}}
			<div class="col-lg-4">
				<h3>Contact Info</h3>

				<p class="lead">
					<strong>Address:</strong>
				</p>

				<p>
					BLRLABS Private Limited,
					<br>#9/2, Coronet Green Commercial Complex,Second floor (above Big Bazaar),
					<br>Sarjapur Main Road, Bellandur
					<br>Bangalore- 560102,
					<br>India.
				</p>

				<p class="lead">
					<strong>Phone:</strong>
					<br> +91-80-64510319
				</p>

				<p class="lead">
					<strong>Email:</strong>
					<br>
					<strong>
							<a href="sales@blrlabs.com">sales@blrlabs.com</a>
					</strong>
				</p>
			</div>

			{{-- contact form --}}
			<div class="col-lg-8">
				
				<h3>Get in Touch with Us</h3>
				
				<div id="failure"> </div>

				{{ Form::open(array('url' => 'contact-us')) }}

					@if ($errors->has('name'))
						<div class="form-group has-error">
					@else
						<div class="form-group">
					@endif
					    {{ Form::label('name', 'Your Name(required)',
	                    						array('class' => 'control-label')) }}

						@if ($errors->has('name')) 
							<p class="help-block">({{ $errors->first('name') }})</p>
						@endif

					    {{ Form::text('name', '',
	                    			array('class' => 'form-control',
											'value' => Input::old('name') )) }}

					</div>
				
					@if ($errors->has('email'))
						<div class="form-group has-error">
					@else
						<div class="form-group">
					@endif

					    {{ Form::label('email', 'Email (required)',
	                    						array('class' => 'control-label')) }}
						@if ($errors->has('email')) 
							<p class="help-block">({{ $errors->first('email') }})</p>
						@endif

					    {{ Form::email('email', '',
                    			array('class' => 'form-control',
											'value' => Input::old('email') )) }}
	
					</div>
				
					<div class="form-group">

				    	{{ Form::label('subject', 'Subject',
                    							array('class' => 'control-label')) }}
				    	{{ Form::text('subject', '',
                    				array('class' => 'form-control',
											'value' => Input::old('subject') )) }}
	
					</div>
				
					<div class="form-group">
			
					    {{ Form::label('message', 'Message',
        	            						array('class' => 'control-label')) }}
					    {{ Form::textarea('message', '',
        	            			array('class' => 'form-control',
											'value' => Input::old('message') )) }}
	
					</div>


					@if ($errors->has('g-recaptcha-response'))
						<div class="form-group has-error">
					@else
						<div class="form-group">
					@endif
						@if ($errors->has('g-recaptcha-response')) 
							<p class="help-block">(Captcha entered is not correct)</p>
						@endif

						{{ Form::captcha() }}
						
					</div>

					<div class="form-group">
			
				    	{{ Form::submit('Send Message',
                    				array('class' => 'btn btn-primary')) }}
					</div>
				
				{{ Form::close() }}

				<div id="success"> </div>

				@if (Session::get('success'))
					<div class="alert alert-dismissible alert-success">
						<strong>Thank You!</strong> Your message was sent successfully.
					</div>
				@endif

			</div>
		</div>
	</div>


@stop

@section ('script')

<script>

	function initialize() {
		var myLatlng = new google.maps.LatLng(12.919208, 77.668845);
		var myOptions = {
			zoom: 11,
			center: myLatlng,
			scrollwheel: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);


		var marker = new google.maps.Marker({
		    position: myLatlng,
		    title:"BLRLABS Private Limited"
		});
		
		var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'<\/div>'+
							'<h4 style="font-weight:800;">BLRLABS Private Limited<\/h4>'+
							'<div id="bodyContent">'+
							'<p style="font-size:1em">#9/2, Coronet Green Commercial Complex,Second floor (above Big Bazaar),<\/br>Sarjapur Main Road, Bellandur<\/br>Bangalore- 560102,<\/br>India.<\/p>'+
							'<\/div>'+
							'<\/div>';
		/*contentString = "<div style=\"position: absolute; left: 0px; top: 0px; width: 300px; height: 200px;\"><div style=\"margin: 10px; padding: 1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; background-color: white;\"><div jstcache=\"0\"><div jstcache=\"124\" class=\"place-card place-card-large\">  <div class=\"place-desc-large\"> <div jstcache=\"41\" class=\"place-name\" jsan=\"7.place-name\">State Bank<\/div> <div jstcache=\"42\" class=\"address\" jsan=\"7.address\">Saki Vihar Rd, Ansa Industrial Estate, Chandivali, Andheri East, Mumbai, Maharashtra 400072<\/div> <\/div> <div jstcache=\"43\" class=\"navigate\"> <div jsaction=\"placeCard.directions\" class=\"navigate\"> <a target=\"_blank\" jstcache=\"56\" href=\"https:\/\/maps.google.com\/maps?ll=19.106203,72.887936&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;daddr=State%20Bank%20Saki%20Vihar%20Rd%20Ansa%20Industrial%20Estate%2C%20Chandivali%2C%20Andheri%20East%20Mumbai%2C%20Maharashtra%20400072@19.106203,72.88793559999999\" class=\"navigate-link\"> <div class=\"icon navigate-icon\"><\/div> <div class=\"navigate-text\">Directions<\/div> <\/a> <\/div> <div class=\"tooltip-anchor\"> <div class=\"tooltip-tip-outer\"><\/div> <div class=\"tooltip-tip-inner\"><\/div> <div class=\"tooltip-content\"> <div>Get directions to this location on Google Maps.<\/div> <\/div> <\/div> <\/div> <div jstcache=\"44\" class=\"navigate-separator\"> <\/div> <div jstcache=\"45\" class=\"star-entity\"> <div jsaction=\"placeCard.star\" class=\"star-button\"> <div class=\"star-entity-icon-large\"> <div jstcache=\"71\" class=\"\" style=\"display:none\"> <\/div> <div jstcache=\"72\" class=\"icon logged-out-star\"> <\/div> <\/div> <div jstcache=\"73\" class=\"star-entity-text hidden\" jsan=\"7.star-entity-text,7.hidden,t-PmAZCbgKmDw\">Saved<\/div> <div jstcache=\"74\" class=\"star-entity-text\" jsan=\"7.star-entity-text,t-bbrD6GAQ-ds\">Save<\/div> <\/div> <div jstcache=\"75\" class=\"tooltip-anchor\"> <div class=\"tooltip-tip-outer\"><\/div> <div class=\"tooltip-tip-inner\"><\/div> <div class=\"tooltip-content\"> <div>Save this place onto your Google map.<\/div> <\/div> <\/div> <\/div> <div jstcache=\"46\" class=\"review-box\"> <div jstcache=\"47\" class=\"\" style=\"display:none\"><\/div> <div jstcache=\"48\" jsinstance=\"0\" class=\"\" style=\"display:none\" jsvs=\"0.75;0.75;0.25;0.25;\"><\/div><div jstcache=\"48\" jsinstance=\"1\" class=\"\" style=\"display:none\" jsvs=\"1.75;1.75;1.25;1.25;\"><\/div><div jstcache=\"48\" jsinstance=\"2\" class=\"\" style=\"display:none\" jsvs=\"2.75;2.75;2.25;2.25;\"><\/div><div jstcache=\"48\" jsinstance=\"3\" class=\"\" style=\"display:none\" jsvs=\"3.75;3.75;3.25;3.25;\"><\/div><div jstcache=\"48\" jsinstance=\"*4\" class=\"\" style=\"display:none\" jsvs=\"4.75;4.75;4.25;4.25;\"><\/div> <a target=\"_blank\" jstcache=\"49\" href=\"http:\/\/maps.google.co.in\/search?q=State+Bank,+Saki+Vihar+Rd,+Ansa+Industrial+Estate,+Chandivali,+Andheri+East,+Mumbai,+Maharashtra+400072&amp;ludocid=9660074819422015522#lrd=0x3be7c872882cd4f5:0x860f7addf3585022,1\" jsaction=\"mouseup:placeCard.reviews\" jsan=\"8.href,0.target,22.jsaction\">2 reviews<\/a> <\/div> <div jstcache=\"50\" class=\"saved-from-source-link\" style=\"display:none\"><\/div> <div class=\"google-maps-link\"> <a target=\"_blank\" jstcache=\"51\" href=\"https:\/\/maps.google.com\/maps?ll=19.106203,72.887936&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=9660074819422015522\" jsaction=\"mouseup:placeCard.largerMap\">View larger map<\/a> <\/div> <\/div><\/div><\/div><\/div>";*/


		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		$("#map-overlay").css("z-index", 100);

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});

		marker.setMap(map);

	};

	function loadScript() {
		var script = document.createElement("script");
		script.type = "text/javascript";
		script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
		document.body.appendChild(script);
	};

	window.onload = loadScript;

</script>

@stop
