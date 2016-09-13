<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ImageOptimize extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'ImageOptimize';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Optimize images.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$start = new DateTime();

		$imagesFolders = Array(
			public_path().'/../app/assets/images/',
			public_path().'/../app/assets/stylesheets/'
		);
		
		// jpeg optimization
		foreach($imagesFolders as $imagesFolder)
		{
			exec('jpegoptim --strip-all '.$imagesFolder.'*');
		}
		$this->info('jpeg optimization done');
		
		// PNG optimization
		foreach($imagesFolders as $imagesFolder)
		{
			exec('optipng '.$imagesFolder.'*');
		}
		$this->info('png optimization done');
		
		$end = new DateTime();
		$interval = $start->diff($end);
		$this->info('Process started at '.$start->format('H:i:s'));
		$this->info('Process ended at '.$end->format('H:i:s'));
		$this->info('Process took '.$this->formatELapsedTime($interval));
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array();
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array();
	}
	
	/**
	 * Return formatted interval where only the largest unit gets displayes.
	 * @param DateInterval $interval
	 *
	 * @return string
	 */
	function formatELapsedTime(DateInterval $interval) {
		$return = '';
		if ($interval->y !== 0)
			$return .= $interval->format("%y years");
			
		if ($interval->m !== 0)
			$return .= (!empty($return)?' ':'').$interval->format("%m months");
		
		if ($interval->d !== 0)
			$return .= (!empty($return)?' ':'').$interval->format("%d days");
		
		if ($interval->h !== 0)
			$return .= (!empty($return)?' ':'').$interval->format("%h hours");
		
		if ($interval->i !== 0)
			$return .= (!empty($return)?' ':'').$interval->format("%i minutes");
			
		if ($interval->s !== 0)
			$return .= (!empty($return)?' ':'').$interval->format("%s seconds");
		
		return (empty($return))?"0 seconds":$return;
	}

}
