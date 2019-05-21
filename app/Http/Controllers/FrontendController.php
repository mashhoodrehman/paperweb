<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Adds;

class FrontendController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	$cities = City::all();
    	$adds = Adds::all();
    	return view('frontend.index' , compact('categories' , 'cities' , 'adds'));
    }

    public function search(Request $request){
    	$query = Adds::query();
    	if($request->search){
    		$query->where('title' , 'like' , '%'.$request->search.'%');
    	}
    	if($request->search){
    		$query->where('category_id' , '=' ,$request->category);
    	}
    	if($request->search){
    		$query->where('city_id' , '=' , $request->city);
    	}
    	$adds = $query->paginate(10);
    	$categories = Category::all();
    	$cities = City::all();
    	return view('frontend.search' , compact('adds' , 'cities' , 'categories'));
    }
}
