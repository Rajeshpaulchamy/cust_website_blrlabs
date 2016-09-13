@extends('layouts.base')

@section ('head')

<style type="text/css">	

</style>

@stop


@section ('body')

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<a class="info" href="{{ url('') }}">Home >> </a>
			<a class="info">Services >> Embedded Software >> BSP</a>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class = "col-lg-12">
				<h3>Board Support Package (BSP)</h3>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
				<p class="quote">
					“BLR Labs offers development services for Board support package (BSP) & Platform development on reference and custom device boards. We offer our services on various leading industry platforms and processors.”
				</p>

				</br>

				<p class="highlight">					
					BLR Labs is a proven player in the BSP and Platform development for reference and custom boards. We help companies in Device software optimization for resource utilization and performance. We enable companies to develop board specific software efficiently, reliably and at a lower cost.
				</p>
			</div>
		</div>

		<div class="row">
			<div class = "col-lg-12 text-center">
				<img class="img-responsive"
					src="assets/bsp/bsp-page1.jpg" style="height: 300px;" alt="home-automation-img">
			</div>
		</div>

		</br>

		<div class="row">
			<div class="col-lg-12">
				<p>
					BSP development and board specific customization is a specialized area that requires in-depth knowledge of low-level system software, a thorough understanding of hardware, and deep familiarity of the OS internals. Our team’s years of experience of developing reference BSPs and the Platform Software for new Silicon Vendor chips means we have extensive expertise in designing, implementing and debugging BSPs developed from scratch. Our team’s firmware expertise, coupled by the expertise in BSP development allows the device makers and hardware vendors to rely on us for rapid porting of OS and services onto new platforms and thereby reduce the time-to-market (TTM).
				</p>
			</div>
		</div>

		</br>

		<div class="row">
			<div class = "col-lg-12 text-center">
				<img class="img-responsive"
					style=""
					src="assets/bsp/bsp-page2.jpg" alt="home-automation-img">
			</div>
		</div>

	</div>

	</br>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p>
					With our past engagements and with the experience and expertise of our team, below are the set of specialized services that we offer in the area of BSP & Platform development:
				</p>
			</div>
		</div>

		<div class = "row">
			<div class = "col-lg-12">
				
				<ul class="imagebullets">
					<li>
						Architecting BSP for the custom boards.
					</li>
					<li>
						Re-configuration from SoC’s vendors reference BSP to make them board specific.
					</li>
					<li>
						Developing bootloaders that allow quick downloads of new OS images.
					</li>
					<li>
						Security – Securing the device software and also enabling secure boot.
					</li>
					<li>
						Device drivers – developing device drivers for the peripherals.
					</li>
					<li>
						Hardening boot loaders and device drivers.
					</li>
					<li>
						File system management, especially Yocto.
					</li>
					<li>
						Power management and optimization.
					</li>
				</ul>
			</div>
		</div>

		<div class = "row">
			<div class = "col-lg-12">

				<p>
					BLR Labs has helped customers in the past in development of BSPs on custom boards based on processors from TI OMAP (ARM), Freescale IMX (ARM), NVIDIA, INTEL X86 platforms, etc. We have experience in Linux ports on these platforms, Android, QNX, Windows Mobile etc. Our team has extensive experience in integration of various peripherals such as Graphics, Audio, Video, LCD, Touch screens, Connectivity (Bluetooth, Wi-Fi, NFC, etc), enabling them and optimizing their performance.
				</p>
				
				<p>
					We work with our customers to understand their specific device project needs and adopt our delivery processes, developmental tools and the engineering resources to satisfy the customer project needs. For each engagement, we derive a unique customer engagement and delivery framework in consultation with the customers and our expert team. BLR Labs has, with the above-mentioned unique engagement model, been able to find ways to deliver extra value throughout the project life-cycle including Configuration and release management, Automation, and maintaining production-ready reference BSPs, device drivers and the Platform Software.
				</p>
				
			</div>
		</div>		
	</div>

@stop


