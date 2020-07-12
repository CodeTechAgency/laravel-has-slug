<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| HasSlug Package Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for this package.
|
*/

Route::namespace('CodeTech\Sluggable\Http\Controllers')
    ->prefix('has-slug')
    ->middleware(['web', 'auth'])
    ->group(function () {
        Route::post('slugify', 'HasSlugController@slugify')->name('.slugify');
    });
