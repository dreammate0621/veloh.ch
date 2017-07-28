<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizer;
use App\Market;

class VeloController extends Controller
{
    function register(Request $request)
    {
    	$organizer = $request->input("organizer");
    	$market = $request->input("market");
    }
}
