<?php

use Illuminate\Support\Facades\Route;

Route::get(config('espresso::url', 'espresso/drip'), function() {
	return response()->noContent();
})->name('espresso::drip');

