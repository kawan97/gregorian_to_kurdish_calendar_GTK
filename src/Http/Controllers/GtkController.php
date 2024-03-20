<?php

namespace Kawan\GregorianToKurdishCalendar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use \Exception;

class GtkController extends Controller
{

public function test()
{
    return view('GregorianToKurdishCalendar::gtk');
}
   
}
