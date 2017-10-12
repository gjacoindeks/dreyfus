<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    
	public function vista(){

		return view('photo_album.home');

	}

}
