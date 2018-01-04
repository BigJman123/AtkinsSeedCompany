<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PioneerController extends Controller
{
    public function index() {
    	return view('layouts.pioneer');
    }
}
