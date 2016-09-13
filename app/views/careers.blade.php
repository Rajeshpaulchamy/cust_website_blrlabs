@extends('layouts.base')

@section ('head')

<style type="text/css">	
	body {
		font-size: 15px;
	}
</style>

@stop

@section ('fullslider')
		<!-- carousel -->
		<div class="crosscover"  id ="still">
			<div class="crosscover-list">

				<li class="crosscover-item is-active">
					<img src="assets/fullscreen_careers.jpg" alt="automotive"></img>
					<div class="crosscover-overlay">
						<div class="crosscover-island docs-Island">
							<h2 class="crosscover-title animated slideInLeft">EXCELLENT TEAM WORK WAITING FOR YOU</h2>
						
							<p class="crosscover-description animated slideInUp">do research, innovate, discover and more.</p>
							
							<p class="crosscover-description animated slideInUp"><em style="font-family: timesnewroman;">we recognize you...</em> </p>

							<a class="crosscover-button btn btn-responsive btn-warning" href="#read-more" role="button">Read More</a>
						</div>
					</div>
				</li>
			</div>
		</div>

@stop

@section ('body')

	<div class="container" id="read-more">
		{{-- careers info --}}
		<div class="row" id="failure">
			{{-- contact info --}}
			<div class="col-lg-12">
				<h3>Job Requirements</h3>
				
				<div class="table-responsive jobtable">
					<table class="table table-hover table-striped table-bordered" style="border-collapse:collapse;" id="accordion-control">
						<thead>
							<tr>
								<th>#</th>
								<th>Job ID</th>
								<th>JOB Description</th>
								<th>Experience Required </th>
								<th>JOB Location</th>
								<th>Start Date</th>
								<th>Last Date</th>
							</tr>
						</thead>
						<tbody>
							<tr data-toggle="collapse" data-target="#row1" class="accordion-toggle" style="cursor: pointer;">
								<td>1</td>
								<td>JOB001</td>
								<td>Trainee/Associate Engineer</td>
								<td>0-1 Year</td>
								<td>Bangalore</td>
								<td>01 Jun 2016</td>
								<td>20 Dec 2016</td>
							</tr>
							<tr >
								<td colspan="7"  class="hiddenRow">
									<div id="row1" class="accordian-body collapse">
										<h3> Job Description</h3>
										<p>
											B.Tech Electronics/Electrical/Computer Science Engineering with minimum of 6 months training in VLSI courses with high scores. Or M.Tech in Electronics/VLSI/CAD with high scores.
										</p>
										<h3> Skills Required</h3>
										<p>
											<ul>
												<li>Strong analytical/Aptitude skills.</li>
												<li>Very good programming & scripting skills.</li>
												<li>Excellent skills in Unix, Shell, Editors (GVIM).</li>
												<li>Good communication & very good attitude.</li>
											</ul>
										</p>									
										<!-- show form here -->
									</div>
								</td>
							</tr>
							<tr data-toggle="collapse" data-target="#row2" class="accordion-toggle" style="cursor: pointer;">
								<td>2</td>
								<td>JOB002</td>
								<td>Physical Design Engineer</td>
								<td>1-4 Years</td>
								<td>Bangalore</td>
								<td>01 Jun 2016</td>
								<td>20 Dec 2016</td>
							</tr>
							<tr>
								<td colspan="7"  class="hiddenRow">
									<div id="row2" class="accordian-body collapse">									
										<h3> Job Description</h3>
										<p>
											B.Tech or M.Tech in Electronics/Electrical Engineering with minimum of 1 year of strong, hands on Physical Design experience.
											Must have handled Netlist to GDS II at block level for multiple tape outs. With Block level hands on experiences in most of the following:.
										</p>
										<h3> Skills Required</h3>
										<p>
											<ul>
												<li>Block level floorplanning, power planning and IR drop analysis.</li>
												<li>Timing closure with Xtalk and OCV</li>
												<li>Multimode multi corner optimization and closure.</li>
												<li>Clock tree synthesis and advanced clock tree implementation.</li>
												<li>Blocks sizes upward of 400K Instances to 2M Instances.</li>
												<li>Block level timing closure with sign off STA.</li>
												<li>Scan chain reordering.</li>
												<li>Block level ECO implementation involving netlist level logical changes.</li> 
												<li>Scripting experience in Perl/TCL.</li>
												<li>Excellent debugging skills in implementation issues  and ability to come up with creative solutions.</li>
												<li>Low power technologies exposure.</li>
												<li>Technologies from 28nm and below.</li>
												<li>Physical Verification experience in advance nodes.</li>
											</ul>
										</p>
										<!-- show form here -->
									</div>
								</td>
							</tr>
							<tr data-toggle="collapse" data-target="#row3" class="accordion-toggle" style="cursor: pointer;">
								<td>3</td>
								<td>JOB003</td>
								<td>Sr/Lead/Engineering Manager -  Physical Design Engineer </td>
								<td>5-12 Years</td>
								<td>Bangalore</td>
								<td>01 Jun 2016</td>
								<td>20 Dec 2016</td>
							</tr>
							<tr>
								<td colspan="7"  class="hiddenRow">
									<div id="row3" class="accordian-body collapse">
										<!-- show form here -->
										<h3> Job Description</h3>
										<p>
											B.Tech or M.Tech in Electronics/Electrical Engineering with minimum of 6 years of strong, hands on Physical Design experience. 
											Must have handled Netlist to GDS II at Top level or Hierarchical top level for at least 1 tape out.  Must have lead physical design team with hands on exposure in most of the following depending up on senior level or lead level role. Should have experience in 28nm & below technologies (preferably 20nm & below).
										</p>
										<h3> Skills Required</h3>
										<p>
											<ul>
												<li>AMD-Tile builder experience with power shutoff.</li>
												<li>Top  level  die size estimation, floorplanning, power estimation , power planning .</li>
												<li>IO Planning and package compatibility sign off.</li>
												<li>ESD analysis on IO ring  and sign off.</li>
												<li>Netlist and constraint sign in checks and validation.</li>
												<li>Prime time constraint development at full chip level and clean up.</li>
												<li>Design implementation environment setup.</li>
												<li>Static and Dynamic power analysis at the top level.</li>
												<li>Netlist to GDS II implementation at chip level.</li>
												<li>Hierarchical  chip planning, block planning , block level constraint development, hierarchical clock tree implementation,  block integration and chip finishing.</li>
												<li>GDS merge and sign off for tape out.</li>
												<li>Ejob view.</li>
												<li>Multimode multi corner optimization and closure at top level.</li>
												<li>Clock tree synthesis and advanced clock tree implementation at full chip level.</li>
												<li>Handling of PLL, TXR, DDR and other analog components during implementation.</li>
												<li>IO ring customization for multi IO designs.</li>
												<li>Handling of FlipChip RDL/AreaIO package.</li>
												<li>Full chips  upward of  1M Instances to 20M+ instances.</li>
												<li>Top level timing closure with sign off STA in MMMC with Xtalk and OCV.</li>
												<li>Top level ECO implementation strategy development for  netlist ,RTL and timing level changes</li>
												<li>Methodology development, customization as per the specific design need.</li>
												<li>Good hands own knowledge in reference flows.</li>
												<li>Scripting experience in Perl/TCL.</li>
												<li>Flow customization and fine tuning for Power , Performance, Area.</li>
												<li>Exposure to DFM and DFM compatible implementation.</li>
												<li>Library performance analysis and fine tuning for implementation.</li>
												<li>Excellent debugging skills in implementation issues  and ability to come up with creative solutions .</li>
												<li>Exposure to designs critical for power, area and timing at the same time.</li>
												<li>Technologies from  90nm  and below.</li>
												<li>Good knowledge of RTL synthesis.</li>
												<li>Good exposure to Netlist formal verification.</li>
												<li>Human Resource estimation , license requirement estimation, machine resource estimation.</li>
												<li>Exposure to Physical design project planning and execution.</li>
												<li>Technical leadership and ability to mentor and make the team deliver.</li>

											</ul>
										</p>									
									</div>
								</td>
							</tr>						
							<tr data-toggle="collapse" data-target="#row4" class="accordion-toggle" style="cursor: pointer;">
								<td>4</td>
								<td>JOB004</td>
								<td>AUTOSAR Engineer</td>
								<td>5-10 Years</td>
								<td>Bangalore</td>
								<td>01 Jun 2016</td>
								<td>20 Dec 2016</td>
							</tr>
							<tr>
								<td colspan="7"  class="hiddenRow">
									<div id="row4" class="accordian-body collapse">
										<h3> Job Description</h3>
										<p>
											Software Design, Implementation, Test of embedded Software components for Telematics control unit.
											Knowledge of system architecture vehicle networks (Flexray, mainly HS CAN) / diagnostic protocols / IPC AUTOSAR configuration tools Software optimization (runtime / memory) preferred: Vector Analysis/Configuration tools/tool chains Knowledge & implementation of HSM (Hardware Security Module).
										</p>
										<h3> Skills Required</h3>
										<p>
											<ul>
												<li>Internal/External Requirements management experience</li>
												<li>Create software design out of SW-Architecture / Component Specification</li>
												<li>Good knowledge of embedded Micro-controllers</li>
												<li>Experience in AUTOSAR SW driver development</li>
												<li>Experience in the Automotive Industry in ECU-SW-Projects</li>
												<li>Experience in AUTOSAR integration projects with SW Third Parties</li>
												<li>General SW experience ISO26262</li>
												<li>Embedded C development</li>
												<li>Implementation and Review of SW code</li>
												<li>Perform Developer tests, unit tests</li>
												<li>AUTOSAR</li>
												<li>Version Management (E. G. SVN, JIRA, DMS)</li>
												<li>CANoe</li>
												<li>Automotive SPICE </li>
												<li>MISRA</li>
												<li>Development on Qualcomm platform based products</li>
												<li>Linux kernel development</li>
												<li>Linux driver development, bug fixing</li>
												<li>User space application development experience</li>
												<li>Inter-processor communications between various devices such as applications processors and Microcontrollers</li>
												<li>I2C, SPI, UART interface device drivers</li>
												<li>TCP/IP sockets and communications</li>
												<li>GIT version control system</li>
												<li>Use of debugging tools such as Trace, Lauterbach</li>
											</ul>
										</p>

										<!-- show form here -->									
									</div>
								</td>
							</tr>

							<tr data-toggle="collapse" data-target="#row5" class="accordion-toggle" style="cursor: pointer;">
								<td>5</td>
								<td>JOB005</td>
								<td>DoIP Specialist</td>
								<td>5-10 Year</td>
								<td>Bangalore</td>
								<td>01 Jun 2016</td>
								<td>20 Dec 2016</td>
							</tr>
							<tr >
								<td colspan="7"  class="hiddenRow">
									<div id="row5" class="accordian-body collapse">
										<h3> Job Description</h3>
										<p>
											DoIP:- Diagnostics Over IP.
										</p>
										<h3> Skills Required</h3>
										<p>
											<ul>
												<li>Good knowledge of 16/32 bit Micro-controller architectures.</li>
												<li>Experience to vehicle in-network protocols like CAN/ LIN etc.</li>
												<li>Good Knowledge in the implementation and testing of Automotive Diagnostic Protocol and services</li>
												<li>ISO14229, KWP2000, SAE J1979, ISO15765, ISO13400 (DoIP), ISO10681 in embedded systems</li>
												<li>Understanding of operating system concepts like Scheduling, Interrupts, Memory and Process management</li>
												<li>Preferred to have working Experience in LINUX or QNX</li>
												<li>Strong skill in C language (MISRA C) for DSPs in Automotive domain Experience in Digital signal processors</li>
												<li>Knowledge and Experience in Quality Processes like CMMi.</li>
											</ul>
										</p>
										<!-- show form here -->
									</div>
								</td>
							</tr>

							<tr data-toggle="collapse" data-target="#row6" class="accordion-toggle" style="cursor: pointer;">
								<td>6</td>
								<td>JOB006</td>
								<td>HSM Specialist</td>
								<td>5-10 Year</td>
								<td>Bangalore</td>
								<td>01 Jun 2016</td>
								<td>20 Dec 2016</td>
							</tr>
							<tr >
								<td colspan="7"  class="hiddenRow">
									<div id="row6" class="accordian-body collapse">
										<h3> Job Description</h3>
										<p>
											Automotive developer for Automotive Security- Hardware Security Specialist.
											Hardware Security-Must have worked on security within a Linux platform for example sandboxing, CHROOT. Experience in working with hardware security modules or hardware features such as trust zones which are available on high end devices. We are looking for who can challenge security architects from companies such as Intel, Huawei, Qualcomm, Freescale, Renesas.
											Micro-controller Embedded Software development and validation for the SHE (Secure Hardware Extension) emulation based on the HSM (Hardware Security Module) of automotive microcontrollers based on TriCore.
										</p>
										<h3> Skills Required</h3>
										<p>
											<ul>
												<li>Development and validation of the SHE Complex drivers and Autosar CRY module on the Tricore side of the Microcontroller.</li>
												<li>Development and validation of the SHE emulation software modules on the HSM side with ARM Cortex M3 based on the HIS SHE standard specification with add-ons.</li>
												<li>Author architecture, design, test specifications and customer documents.</li>
												<li>Participate in software requirements analysis and ambiguity resolution.</li>
												<li>Provide technical solutions to customer change requests.</li>
												<li>Conceive and develop validation infrastructure for topics in own responsibility.</li>
												<li>Liaise with chip development engineers on a need basis.</li>
												<li>Embedded system software development/validation in C, assembly languages & SDLC.</li>
												<li>Experience with the Security related standards like AES Advanced Encryption Standard (defined by NIST) etc. is desirable.</li>
												<li>Experience in writing software for the Cryptographic algorithms is desirable.</li>
												<li>Good knowledge of the microcontrollers based on Tricore architecture is desirable.</li>
												<li>Good knowledge of the ARM Cortex M3 core is desirable.</li>
												<li>Good knowledge of computer architecture (16/32bit), real-time systems.</li>
												<li>Experience in standards such as AUTOSAR, Functional Safety - ISO26262, IEC61508 is desirable.</li>
												<li>Acquaintance with development tool-chains such as GNU, Tasking, Keil, RVCT etc.</li>
												<li>Good working knowledge of debuggers such as PLS, Lauterbach etc.</li>
												<li>Proven ability to work with standard lab equipment - oscilloscopes, logic analysers, power benches etc.</li>
												<li>Good team player in a multi-site work environment</li>
											</ul>
										</p>
										<!-- show form here -->
									</div>
								</td>
							</tr>

						</tbody>
					</table>			
				</div>
			</div>
		</div>
	</div>

	<div id="hide-form" class="hide">
		<div id="career-form">
			@include('careers-upload')
		</div>
	</div>

@stop


