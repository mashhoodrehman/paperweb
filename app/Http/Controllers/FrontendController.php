<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;

class FrontendController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	$cities = City::all();
    	return view('frontend.index' , compact('categories' , 'cities'));
    }
}
