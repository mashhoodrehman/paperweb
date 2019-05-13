<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adds extends Model
{

    protected $fillable = [ 'company_name' , 'total_pos' , 'rel_logo' , 'job_loc' , 'gender' , 'city_id' , 'last_date' , 'salary' , 'skills' , 'working_hours' , 'age_limit' , 'experience' , 'contact_number' , 'category_id' , 'title' , 'job_type_id' , 'type' , 'newspaper_id'];
    
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
