<?php

namespace BogdanKharchenko\Espresso\Providers;

use Illuminate\Support\ServiceProvider;
use BogdanKharchenko\Espresso\View\Components\Drip;

class EspressoServiceProvider extends ServiceProvider
{
	public function register()
	{
	}
	
	public function boot()
	{
		$configPath = __DIR__.'/../../config/espresso.php';
		
		$this->mergeConfigFrom($configPath, 'espresso');
		
		$this->publishes([$configPath => config_path('espresso.php')], 'config');
		
		$this->loadViewComponentsAs('espresso', [
			Drip::class,
		]);
	}
}
