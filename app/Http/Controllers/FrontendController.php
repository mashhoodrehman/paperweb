<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Adds;
use App\Newspaper;

class FrontendController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	$cities = City::all();
    	$adds = Adds::with('getNewsPaper')->get();
        $newspapers = Newspaper::all();
    	return view('frontend.index' , compact('categories' , 'cities' , 'adds' , 'newspapers'));
    }

    public function search(Request $request){
    	$query = Adds::query();
    	if($request->search){
    		$query->where('title' , 'like' , '%'.$request->search.'%');
    	}
    	if($request->category && $request->category !="none"){
    		$query->where('category_id' , '=' ,$request->category);
    	}
    	if($request->city && $request->city !="none"){
    		$query->where('city_id' , '=' , $request->city);
    	}
    	$adds = $query->with('getNewsPaper')->paginate(1);
    	$categories = Category::all();
    	$cities = City::all();
    	$newspapers = Newspaper::all();
    	return view('frontend.search' , compact('adds' , 'cities' , 'categories' , 'newspapers'));
    }

    public function detail($id){
        $categories = Category::all();
        $cities = City::all();
        $add = Adds::with('getNewsPaper' , 'getJobType' , 'getQualification' , 'getCategory')->find($id);
        $adds = Adds::inRandomOrder()->take(5)->get();
        return view('frontend.add-detail' , compact('cities' , 'categories' , 'add' , 'adds'));
    }

    public function newspaperAdds($id){
        $adds = Adds::with('getNewsPaper')->where('newspaper_id' , $id)->paginate(1);
        $categories = Category::all();
        $cities = City::all();
        $newspapers = Newspaper::all();
        return view('frontend.newspapers-adds' , compact('adds' , 'cities' , 'categories' , 'newspapers'));
    }
}
