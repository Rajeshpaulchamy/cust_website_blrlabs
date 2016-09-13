<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

###########################################################################
# Route for home page
###########################################################################
Route::get('/', 'HomeController@showHome');

###########################################################################
# Route for under construction
###########################################################################
Route::get('under-construction', 'HomeController@showUnderConstruction');

###########################################################################
# Route for security systems
###########################################################################
Route::get('about-us', 'HomeController@showAboutUs');

###########################################################################
# Route for contact us page 
###########################################################################
Route::get('contact-us', 'HomeController@showContactUs');

###########################################################################
# Route for contact us post  
###########################################################################
Route::post('contact-us', array(
    'as'   => 'contact', // This is the route's name
    'uses' => 'HomeController@postContact')); // This is the controller name

###########################################################################
# Route for careers  
###########################################################################
Route::get('careers', 'HomeController@showCareers');

###########################################################################
# Route for careers post  
###########################################################################
Route::post('careers', array(
    'as'   => 'careers', // This is the route's name
    'uses' => 'HomeController@postCareers')); // This is the controller name


###########################################################################
# Route for Automotive
###########################################################################
Route::get('automotive', 'HomeController@showAutomotive');

###########################################################################
# Route for Telematics
###########################################################################
Route::get('telematics', 'HomeController@showTelematics');

###########################################################################
# Route for Infotainment
###########################################################################
Route::get('infotainment', 'HomeController@showInfotainment');

###########################################################################
# Route for Connected cars
###########################################################################
Route::get('connectedcars', 'HomeController@showConnectedcars');

###########################################################################
# Route for home automation
###########################################################################
Route::get('home-automation', 'HomeController@showHomeAutomation');


###########################################################################
# Route for Enterprise Digital Transformation
###########################################################################
Route::get('enterprise-digital-transformation', 'HomeController@showEnterpriseDigitalTransformation');

###########################################################################
# Route for Safety-Geofencing
###########################################################################
Route::get('safety-geofencing', 'HomeController@showSafetyGeofencing');

###########################################################################
# Route for Enterprise Mobility
###########################################################################
Route::get('enterprise-mobility', 'HomeController@showEnterpriseMobility');

###########################################################################
# Route for Fleet Telematics
###########################################################################
Route::get('fleet-telematics', 'HomeController@showFleetTelematics');

###########################################################################
# Route for Semiconductor
###########################################################################
Route::get('semiconductor', 'HomeController@showSemiconductor');

###########################################################################
# Route for Platform Development
###########################################################################
Route::get('platform-development', 'HomeController@showPlatformDevelopment');

###########################################################################
# Route for IoT Framework
###########################################################################
Route::get('iot-framework', 'HomeController@showIotFramework');

###########################################################################
# Route for SMAC
###########################################################################
Route::get('smac', 'HomeController@showSMAC');

###########################################################################
# Route for BSP
###########################################################################
Route::get('bsp', 'HomeController@showBSP');

###########################################################################
# Route for Case Study
###########################################################################
Route::get('case-study', 'HomeController@showCaseStudy');

###########################################################################
# Route to download Case Study
###########################################################################
Route::get('case-study-interoperability', 'HomeController@downloadCaseStudyInteroperability');

###########################################################################
# Route for System integration
###########################################################################
Route::get('systemintegration', 'HomeController@showSystemIntegration');

###########################################################################
# Route for consumer iot
###########################################################################
Route::get('consumeriot', 'HomeController@showConsumerIOT');

###########################################################################
# Route for industrial iot
###########################################################################
Route::get('industrialiot', 'HomeController@showIndustrialIOT');