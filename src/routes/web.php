<?php

Route::group(['namespace' => 'kawan\gregorian_to_kurdish_calendar\Http\Controllers'], function () {

    Route::get('gtk-test/', 'GtkController@test')->name('gtk-test');

});
