<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantingController extends Controller
{
    public function index() {
    	return view('layouts.planting');
    }
}
