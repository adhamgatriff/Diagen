<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    function index(Request $request, $name)
    {
    	return route($name, $request->all());
    }
}
