<?php

namespace BogdanKharchenko\Espresso\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Drip extends Component
{
	public function render(): View
	{
		return view('espresso::components.drip');
	}
	
	public function url(): string
	{
		return route('espresso::drip');
	}
	
	public function ageThreshold(): int
	{
		return (config('session.lifetime', 32) - 2) * 60000;
	}
	
	public function ageCheckInterval(): int
	{
		return 2000;
	}
	
	public function interval(): int
	{
		return (int) config('espresso::interval');
	}
	
	public function lastCheck(): int
	{
		return $this->ageCheckInterval() + $this->ageThreshold();
	}
}
