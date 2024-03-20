<?php

Route::group(['namespace' => 'Kawan\GregorianToKurdishCalendar\Http\Controllers'], function () {

    Route::get('gtk-test/', 'GtkController@test')->name('gtk-test');

});
