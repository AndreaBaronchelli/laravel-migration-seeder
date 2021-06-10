<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class PageController extends Controller
{
    /**
     * HOMEPAGE
     */
    public function index() {
        $travels = Travel::simplePaginate(5);
        return view('home', compact('travels'));
   }
}
