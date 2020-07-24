<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;

class ShowController extends Controller
{
    //
    public function index() {
        return Story::all();
    }

}
