<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adds extends Model
{
    
    public function getCity(){
    	return $this->hasOne('App\City' , 'id' , 'city_id');
    }
    public function getNewsPaper(){
    	return $this->hasOne('App\Newspaper' , 'id' , 'newspaper_id');
    }
    public function getCategory(){
    	return $this->hasOne('App\Category' , 'id' , 'category_id');
    }
    public function getJobType(){
    	return $this->hasOne('App\JobType' , 'id' , 'job_type_id');
    }
    public function getQualification(){
    	return $this->hasOne('App\Qualification' , 'id' , 'qualification_id');
    }
}
