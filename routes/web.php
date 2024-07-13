<?php

use Illuminate\Support\Facades\Route;

Route::get('open-graphy', [\Edeoliv\OpenGraphy\Http\Controllers\OpenGraphyController::class, 'openGraphImage'])->name('open-graphy.get');

Route::get('open-graphy/test', [\Edeoliv\OpenGraphy\Http\Controllers\OpenGraphyController::class, 'test'])->name('open-graphy.test');
