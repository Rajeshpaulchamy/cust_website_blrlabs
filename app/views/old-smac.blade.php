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
			<a class="info">Services >> SMAC</a>
		</div>
	</div>

	<div class="container row-odd">
		<div class = "row">
			<div class = "col-lg-3 col-md-3">
				<div class="hovereffect">
					<img class="img-responsive" src="assets/smac/smac-s.jpg" alt="">
					<div class="overlay">
						<h2>SOCIAL</h2>
						<a class="info" href="#social">READ MORE</a>
					</div>
				</div>
			</div>
			<div class = "col-lg-3 col-md-3">
				<div class="hovereffect">
					<img class="img-responsive" src="assets/smac/smac-m.jpg" alt="">
					<div class="overlay">
						<h2>MOBILE</h2>
						<a class="info" href="#mobile">READ MORE</a>
					</div>
				</div>
			</div>
			<div class = "col-lg-3 col-md-3">
				<div class="hovereffect">
					<img class="img-responsive" src="assets/smac/smac-a.jpg" alt="">
					<div class="overlay">
						<h2>ANALYTICS</h2>
						<a class="info" href="#analytics">READ MORE</a>
					</div>
				</div>
			</div>
			<div class = "col-lg-3 col-md-3">
				<div class="hovereffect">
					<img class="img-responsive" src="assets/smac/smac-c.jpg" alt="">
					<div class="overlay">
						<h2>CLOUD</h2>
						<a class="info" href="#cloud">READ MORE</a>
					</div>
				</div>
			</div>		
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class = "col-lg-12">
				<h3>SMAC</h3>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
				<p class="quote">
					“We create an ecosystem that allows to improve its operations and get closer to the customer with minimal overhead and maximum reach as it’s a synergy created by social, mobile, analytics and cloud working together that creates a competitive advantage”.
				</p>

				</br>

				<p class="highlight">					
					BLR Labs involves in the proliferation of structured and unstructured data that is being created by mobile devices, sensors, social media, and loyalty card programs.
				</p>

				<p>
					Globalization on a large scale has led to increased demands and aspirations of the people. They want to constantly achieve something or the other for attaining better standards of living.  So, we surely need some better mechanisms and computing platforms which are enhanced in such a way that they predict or look into these matters for fulfilling the needs of present and future generations.  BLR LABS SMAC allows businesses to understand how, when and where people consume certain goods and services so it will be easy to interact with customers.
				</p>
				<p>
					It is based on big data analysis and data warehousing techniques to gather as much as information about the users as possible, with the minimum amount of information given by the users.
				</p>
				<p>
					SMAC creates an ecosystem that allows a business to improve its functioning and get closer to the customer with minimum extra cost and maximum reach to their activities.
				</p>
			</div>
		</div>

		<div class="row">
			<div class = "col-lg-12 text-center">
				<img class="img-responsive"
					style="width: 400px; height: 400px;"
					src="assets/smac/smac-img1.jpg" alt="smac-img">
			</div>
		</div>
	</div>

	</br>

	<div class="container">

		<div class = "row">
			<div class = "col-lg-12">
				<h3>SMAC Services</h3>

				<p>
					At BLR LABS, Enterprise services involves the developing, integrating, modernizing, and/or maintaining of applications software for clients.
				</p>
				<p>
					BLR LABS Enterprise services are business-driven and supports following X-Factor for the clients:
				</p>

				<ul class="imagebullets">
					<li>
						Designing, developing, setting up, enhancing or supporting technology systems.
					</li>
					<li>
						Investigating current systems for improvements.
					</li>
					<li>
						Scoping, planning, implementing and reporting on projects.
					</li>
					<li>
						Working with stakeholders to ensure all of their needs are met.
					</li>
					<li>
						Testing proposed systems to ensure they are easy to use and accessible by all.
					</li>
					<li>
						Helping translate business requirements into IT functionality.
					</li>
					<li>
						With our Enterprise services, you can realize substantial business benefits, including reduced operating costs, improved service levels and higher returns on IT investments.
					</li>
				</ul>

				<h3>Our Expertise</h3>

				<p>
					With our vast experience in Mobility domain and with our Core Analytical Skills, our main concentration is on following areas:
				</p>
				
				<ul class="imagebullets">
					<li>
						Enterprise Apps Development.
					</li>
					<li>
						Mobility Interfaces for Enterprise Apps.
					</li>
					<li>
						Business Analytics.
					</li>
					<li>
						User Experience Improvement.
					</li>
					<li>
						Performance Optimization.
					</li>
					<li>
						CMS and CRM.
					</li>
					<li>
						Enterprise Resource Planning.
					</li>
				</ul>

				<p>
					We at BLR Labs create Core IP Development for Business Analytics, Big Data processing and Social Media Tools to establish ourselves as leaders to support latest Business requirements.
				</p>


			</div>
		</div>
	</div>

	<!-- SOCIAL -->
	<a class="anchor" id="social"></a>
	<div class="container">
		<div class="row">
			<div class = "col-lg-12">
				<h3>SOCIAL</h3>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
				<p class="quote">
					“From social informatics to social intelligence, we mature social computing practice delivers you value across the social media chain and enables all-round feedback across business functions”.
				</p>

				<h3> Business Imperatives </h3>

				<p>
					<b>Social</b> media technologies have completely changed the way in which people communicate. Sharing your content is no longer hectic. It is now about posting your content to your wall or your website, tweeting, texting and instant messaging. Physical meeting and interaction is rapidly being replaced by virtual communication.
				</p>
				<p>
					It has provided businesses with new ways to reach and interact with customers. It has been broadly defined to refer to the many relatively inexpensive and widely accessible electronic tools that enable anyone to publish and access information, collaborate on a common effort, or build relationships.
				</p>
				<p>
					Use of social computing is paving the way for bottom up innovation for organization as against traditional top down innovation due to instantaneous information sharing potential between management and employees.
				</p>
			</div>
		</div>

		<div class="row">
			<div class = "col-lg-12 text-center">
				<img class="img-responsive"
					style=""
					src="assets/smac/smac-img2.jpg" alt="smac-img">
			</div>
		</div>
	</div>

	</br>

	<div class="container">

		<div class = "row">
			<div class = "col-lg-12">
				<h3>Services</h3>

				<ul class="imagebullets">
					<li>
						Sales promotions and discounts.
					</li>
					<li>
						Ride the wave of social computing, internally and externally.
					</li>
					<li>
						Formulate a comprehensive and solid social strategy.
					</li>
					<li>
						Relationship development and loyalty programs.
					</li>
				</ul>

				<h3>Values</h3>
				
				<ul class="imagebullets">
					<li>
						Helps in effective knowledge management.
					</li>
					<li>
						Provide right information at the right time to drive business ahead.
					</li>
					<li>
						Implement data and workflow integration for collaborative and role based information delivery.
					</li>
					<li>
						Make sense of social conversations and use effective analytics model to monitor the pattern.
					</li>
					<li>
						Acquire ideas for research, development and innovation.
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- MOBILE -->
	<a class="anchor" id="mobile"></a>
	<div class="container">
		<div class="row">
			<div class = "col-lg-12">
				<h3>MOBILE</h3>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
				<p class="quote">
					“We help you in connecting to your business customers without any problem and in a very easy and interactive way”.
				</p>
				<p>
					<b>Mobile</b> technologies have changed the way people communicate, shop and work.
				</p>
				<p>
					Mobile technologies have essentially eliminated space and time boundaries. Businesses are embracing mobility as a strategy to deliver real, measurable, and sustainable improvements in business performance. BLR LABS Mobility can help you improve business processes and enable your business to reach new heights of growth, efficiency and innovation.
				</p>
				<p>
					More powerful solutions can link you directly into the office network while working off site, for instance to access your database or accounting systems. Importantly, mobile technologies have also enabled us to attend the staff meeting from anywhere we are, this leads to great flexibility in working.
				</p>
				<p>
					Our enterprise mobility services help you make strategic mobility decision with the adoption of right technology and frameworks. BLR LABS has cut across technologies, frameworks, domains and industry verticals to emerge as a partner of choice for organizations to increase the business profits. We have wonderful experience in developing apps across various fields such as Business, Education, Entertainment, Lifestyle, Finance, Productivity, and Social Networking.
				</p>
			</div>
		</div>

		</br>

		<div class="row">
			<div class = "col-lg-12 text-center">
				<img class="img-responsive"
					style="width: 600px; height:400px;"
					src="assets/smac/smac-img3.png" alt="smac-img">
			</div>
		</div>
	</div>

	</br>

	<div class="container">

		<div class = "row">
			<div class = "col-lg-12">
				<h3>Services</h3>

				<ul class="imagebullets">
					<li>
						Channel hogging and file sharing.
					</li>
					<li>
						Working off site.
					</li>
					<li>
						Leads to great flexibility in working.
					</li>
					<li>
						Mobile apps services for immense business benefits.
					</li>
				</ul>

				<h3>Values</h3>
				
				<ul class="imagebullets">
					<li>
						Reduced time-to-market and augmented productivity.
					</li>
					<li>
						Increased marketing outreach.
					</li>
					<li>
						Extended customer base.
					</li>
					<li>
						Connected and engaged employees.
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- ANALYTICS -->
	<a class="anchor" id="analytics"></a>
	<div class="container">
		<div class="row">
			<div class = "col-lg-12">
				<h3>ANALYTICS</h3>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
				<p class="quote">
					“We extend the capabilities of Analytic technology in order to help organizations seamlessly and swiftly modernize their hybrid systems for mobile business users”.
				</p>
				<p>
					<b>Analytic</b> Technology gives users the information they need, when they need it, and simplify complex reporting and analysis processes with pre-built analytics for financial management, supply chain, and project accounting.
				</p>
				<p>
					Advances in Analytic technologies and business intelligence are allowing CIOs to go big, go fast, go deep, go cheap and go mobile with business data. It is an act of learning how to understand each of us uniquely and to communicate with us as individuals.
				</p>
				<p>
					Analytics favors data visualization to communicate the future requirements of the users. Analytics also makes use of data mining technology which can be defined as the computational process of discovering patterns in large data sets ("big data") involving methods at the intersection of artificial intelligence, machine learning, statistics, and database systems, in predicting the information required.
				</p>
				<p>
					We have advanced Technology Focus Groups spanning across technologies, frameworks and platforms, which are continually nurtured to achieve state-of-the-art aimed at technological excellence thereby rendering our clients a competitive edge to stand out in the marketplace.
				</p>
			</div>
		</div>

		</br>

		<div class="row">
			<div class = "col-lg-12 text-center">
				<img class="img-responsive"
					style="width: 600px; height:400px;"
					src="assets/smac/smac-img4.png" alt="smac-img">
			</div>
		</div>
	</div>

	</br>

	<div class="container">

		<div class = "row">
			<div class = "col-lg-12">
				<h3>Services</h3>

				<ul class="imagebullets">
					<li>
						Cost-effective and actionable insights from high volume and velocity of enterprise data.
					</li>
					<li>
						Immensely aid in prompt reporting as well as informed decision making and have scalable architecture.
					</li>
					<li>
						The immense operational and financial challenges healthcare industry is facing would be reduced.
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- CLOUD -->
	<a class="anchor" id="cloud"></a>
	<div class="container">
		<div class="row">
			<div class = "col-lg-12">
				<h3>CLOUD Technology</h3>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
				<p class="quote">
					“We provide a process of delivering/enabling scalable, expandable and almost perfectly elastic software services using internet technologies”.
				</p>
				<p>
					<b>Cloud </b> Technology has started to obtain mass appeal in corporate data centers as it enables the data center to operate like the Internet through the process of enabling computing resources to be accessed and shared as virtual resources in a secure and scalable manner.
				</p>
				<p>
					The goal of cloud technology is to apply traditional supercomputing, or high-performance computing power, normally used by military and research facilities, to perform tens of trillions of computations per second, in consumer-oriented applications such as financial portfolios, and to deliver personalized information.
				</p>
				<p>
					Cloud computing offers promising potential in terms key business improvement indicators such as time to market, IT spends, and enhanced employee productivity, elasticity in scale and flexibility in deployment. We enhance business values by integrating cloud roadmap with enterprise IT strategy and providing state-of-the-art consulting and execution on the way to the cloud.
				</p>
			</div>
		</div>

		</br>

		<div class="row">
			<div class = "col-lg-12 text-center">
				<img class="img-responsive"
					style="width: 600px; height:400px;"
					src="assets/smac/smac-img5.png" alt="smac-img">
			</div>
		</div>
	</div>

	</br>

	<div class="container">
		<div class = "row">
			<div class = "col-lg-12">
				<h3>Services</h3>

				<ul class="imagebullets">
					<li>
						Web Based Cloud Computing.
					</li>
					<li>
						Infrastructure as a Service.
					</li>
					<li>
						Software as a Service.
					</li>
					<li>
						Platform as a Service.
					</li>
					<li>
						Service Commerce.
					</li>
				</ul>
			</div>
		</div>
		<div class = "row">
			<div class = "col-lg-12">
				<h3>Values</h3>

				<ul class="imagebullets">
					<li>
						Performance.
					</li>
					<li>
						Productivity.
					</li>
					<li>
						Reliability.
					</li>
					<li>
						Scalability and Secutity.
					</li>
				</ul>
			</div>
		</div>		
	</div>	
@stop


