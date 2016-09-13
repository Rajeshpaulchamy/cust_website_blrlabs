<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| API Keys
	|--------------------------------------------------------------------------
	|
	| Set the public and private API keys as provided by reCAPTCHA.
	|
	| In version 2 of reCAPTCHA, public_key is the Site key,
	| and private_key is the Secret key.
	|
	*/

	/* local development 192.168.56.101 */
	/*'public_key'	=> '6LfkgRMTAAAAAIv3DB9RIj3v4nOTtOwTFg76fvU2',
	'private_key'	=> '6LfkgRMTAAAAAGTh29-YBb1PTNQY4bT1Y8SNexIA',*/

	/* production blrlabs.com */
	'public_key'	=> '6LfmgRMTAAAAAH4C7wIxuWRQkXRb8_kQaB11cSPo',
	'private_key'	=> '6LfmgRMTAAAAAOnFWrH7fKESj6iWsj5PjZZZ92-d',
	
	/*
	|--------------------------------------------------------------------------
	| Template
	|--------------------------------------------------------------------------
	|
	| Set a template to use if you don't want to use the standard one.
	|
	*/
	'template'		=> '',

	/*
	|--------------------------------------------------------------------------
	| Driver
	|--------------------------------------------------------------------------
	|
	| Determine how to call out to get response; values are 'curl' or 'native'.
	| Only applies to v2.
	|	
	*/	
	'driver'   	=> 'curl',

	/*
	|--------------------------------------------------------------------------
	| Options
	|--------------------------------------------------------------------------
	|
	| Various options for the driver
	|	
	*/	
	'options'   	=> array(
		
		'curl_timeout' => 1,
		
	),

	/*
	|--------------------------------------------------------------------------
	| Version
	|--------------------------------------------------------------------------
	|
	| Set which version of ReCaptcha to use.
	|	
	*/	
	'version'   	=> 2,

);
