<?php

Route::group(['namespace' => 'Kawan\GTK\Http\Controllers'], function () {

    Route::get('gtk-test/', 'GtkController@test')->name('gtk-test');

});
