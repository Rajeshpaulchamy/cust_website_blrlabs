<?php

//use Log;
//use Request;

/*
|--------------------------------------------------------------------------
| Home Controller
|--------------------------------------------------------------------------
|
| This controller class purpose is to display the home page
|
*/
class HomeController extends BaseController {

	#######################################################################
	# Method to show the Home page
	#######################################################################
	public function showHome()
	{
		return View::make('home');
		//return View::make('temp');
	}

	#######################################################################
	# Method to show the Under Construction page
	#######################################################################
	public function showUnderConstruction()
	{
		return View::make('under_construction');
	}

	#######################################################################
	# Method to show the Automobile page
	#######################################################################
	public function showAutomotive()
	{
		return View::make('automotive');
	}

	#######################################################################
	# Method to show the Telematics page
	#######################################################################
	public function showTelematics()
	{
		return View::make('telematics');
	}

	#######################################################################
	# Method to show the Infotainment page
	#######################################################################
	public function showInfotainment()
	{
		return View::make('infotainment');
	}

	#######################################################################
	# Method to show the Connectedcars page
	#######################################################################
	public function showConnectedcars()
	{
		return View::make('connectedcars');
	}

	#######################################################################
	# Method to show the Home automation page
	#######################################################################
	public function showHomeAutomation()
	{
		return View::make('homeautomation');
	}

	#######################################################################
	# Method to show the Enterprise Digital Transformation page
	#######################################################################
	public function showEnterpriseDigitalTransformation()
	{
		return View::make('enterprisedigitaltransformation');
	}

	#######################################################################
	# Method to show the Safety Geofencing page
	#######################################################################
	public function showSafetyGeofencing()
	{
		return View::make('safetygeofencing');
	}

	#######################################################################
	# Method to show the Enterprise Mobility page
	#######################################################################
	public function showEnterpriseMobility()
	{
		return View::make('enterprisemobility');
	}

	#######################################################################
	# Method to show the Fleet Telematics page
	#######################################################################
	public function showFleetTelematics()
	{
		return View::make('fleettelematics');
	}

	#######################################################################
	# Method to show the Semiconductor page
	#######################################################################
	public function showSemiconductor()
	{
		return View::make('semiconductor');
	}

	#######################################################################
	# Method to show the Platform Development page
	#######################################################################
	public function showPlatformDevelopment()
	{
		return View::make('platformdevelopment');
	}

	#######################################################################
	# Method to show the IoT Framework page
	#######################################################################
	public function showIotFramework()
	{
		return View::make('iotframework');
	}

	#######################################################################
	# Method to show the SMAC page
	#######################################################################
	public function showSMAC()
	{
		return View::make('smac');
	}

	#######################################################################
	# Method to show the BSP page
	#######################################################################
	public function showBSP()
	{
		return View::make('bsp');
	}

	#######################################################################
	# Method to show the System Integration page
	#######################################################################
	public function showSystemIntegration()
	{
		return View::make('systemintegration');
	}

	#######################################################################
	# Method to show the Consumer IOT page
	#######################################################################
	public function showConsumerIOT()
	{
		return View::make('consumeriot');
	}	

	#######################################################################
	# Method to show the Industrial IOT page
	#######################################################################
	public function showIndustrialIOT()
	{
		return View::make('industrialiot');
	}

	#######################################################################
	# Method to show the Case Study
	#######################################################################
	public function showCaseStudy()
	{
		return View::make('case-study');
	}

	#######################################################################
	# Method to download case study
	#######################################################################
	public function downloadCaseStudyInteroperability()
	{

		$filename = 'interoperability-and-iot.pdf';
		$path = __DIR__.'/../../public/casestudy/'.$filename;

		return Response::make(file_get_contents($path), 200, [
		    'Content-Type' => 'application/pdf',
		    'Content-Disposition' => 'inline; '.$filename,
		]);
	}

	#######################################################################
	# Method to show the About-Us page
	#######################################################################
	public function showAboutUs()
	{
		return View::make('aboutus');
	}

	#######################################################################
	# Method to show the Contact Us page
	#######################################################################
	public function showContactUs()
	{
		return View::make('contactus');
	}

	#######################################################################
	# Method to post the Contact Us page
	#######################################################################
	public function postContact()
	{
		# Retrive the posted data
		$data = Input::all();
		
		// create the validation rules ------------------------
		$rules = array(
		    'name'             => 'required',           // just a normal required validation
		    'email'            => 'required|email',     // required and must be unique in the ducks table
		    'g-recaptcha-response' => 'required|recaptcha', // for google recaptcha
		);

		// do the validation ----------------------------------
		// validate against the inputs from our form
		$validator = Validator::make(Input::all(), $rules);

		// check if the validator failed -----------------------
		if ($validator->fails()) {

			// get the error messages from the validator
			$messages = $validator->messages();
		
			// redirect our user back to the form with the errors from the validator
			$url = URL::route('contact') . '#failure';
			return Redirect::to($url)
				->withErrors($validator)
				->withInput(Input::all());
		
		} else {
			// validation successful ---------------------------

			# Save in to database
			// $model = new ContactUs;
			// $model->name = $data["name"];
			// $model->email = $data["email"];
			// $model->subject = $data["subject"];
			// $model->message = $data["message"];
			// $model->save();

			$input = array('name'=>$data["name"], 
							'email'=>$data["email"], 
							'subject'=>$data["subject"], 
							'messages'=>$data["message"]);

			// Send the email with the contactemail view, the user input
			Mail::send('email', $input, function($message) use ($data)
			{
				$message->from("contactuspage@blrlabs.com", $data["name"]);
				$message->to('contact@blrlabs.com')->subject('[blrlabs.com]:[contact-us]');
			});

			// redirect ----------------------------------------
			// redirect our user back to the form so they can do it all over again
			$url = URL::route('contact') . '#success';
			return Redirect::to($url)
				->with('success', 'success message');;
		}
	
	}

	#######################################################################
	# Method to show the Careers page
	#######################################################################
	public function showCareers()
	{
		return View::make('careers');
	}

	#######################################################################
	# Method to post the Careers data
	#######################################################################
	public function postCareers()
	{
		# Retrive the posted data
		$data = Input::all();
		
		// create the validation rules ------------------------
		$rules = array(
		    'name'             => 'required',           // just a normal required validation
		    'qualification'    => 'required',           // just a normal required validation
		    'email'            => 'required|email',     // required and must be unique in the ducks table
		    'resume'           => 'required|max:1024', // for file upload
		    'g-recaptcha-response' => 'required|recaptcha', // for google recaptcha
		);

		// do the validation ----------------------------------
		// validate against the inputs from our form
		$validator = Validator::make(Input::all(), $rules);

		// check if the validator failed -----------------------
		if ($validator->fails()) {

			// get the error messages from the validator
			$messages = $validator->messages();
		
			// redirect our user back to the form with the errors from the validator
			$url = URL::route('careers') . '#failure';
			return Redirect::to($url)
				->withErrors($validator)
				->withInput(Input::all());
		
		} else {
			// validation successful ---------------------------


			if (Input::hasFile('resume'))
			{
				$resume = Input::file('resume');
				$destinationPath = public_path().'/uploads';
				$org_filename = $resume->getClientOriginalName();

				// getting file extension
				$extension = Input::file('resume')->getClientOriginalExtension();
				// rename the file
				$filename = rand(1,99999).'.'.$extension;

				Input::file('resume')->move($destinationPath, $filename);

				# Save in to database
				// $model = new Careers;
				// $model->name = $data["name"];
				// $model->email = $data["email"];
				// $model->qualification = $data["qualification"];
				// $model->org_filename = $org_filename;
				// $model->filename = $filename;
				// $model->save();
			
				$input = array('name'=>$data["name"], 
								'email'=>$data["email"], 
								'subject'=>'Career request', 
								'messages'=>'Qualification: '.$data["qualification"]);

				$data['filename'] = $destinationPath.'/'.$filename;
	
				// Send the email with the contactemail view, the user input
				Mail::send('email', $input, function($message) use ($data)
				{
					$message->from("careerspage@blrlabs.com", $data["name"]);
					$message->to('careers@blrlabs.com')->subject('[blrlabs.com]:[careers-request]');
					$message->attach($data["filename"]);
				});
			}

			// redirect ----------------------------------------
			// redirect our user back to the form so they can do it all over again
			$url = URL::route('careers') . '#success';
			return Redirect::to($url)
				->with('success', 'success message');;
		}
	
	}


}
