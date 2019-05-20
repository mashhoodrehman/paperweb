<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adds;


class ScrapProduct extends Controller
{


    public function storeproByXML($date , $type , $paper){

        for($j = 1 ; $j < 13 ; $j++){




        $url = 'https://paperpk.com/paper-ads.php?type='.$type.'&paper='.$j.'&date='.$date;
        $crawler = \Goutte::request('GET', $url);
        $a = $crawler->filter('#wrapper #wrapper_total #navigate #featured_latest_job #job-table table tbody #job-one-lnkl')->links();
        $count = 0;
        foreach ($a as $b) {
            $count++;
            $all_links[] = $b->getURI();
            $name = $type.$count.$date;
            $crawler = \Goutte::request('GET', $b->getURI());
            $jobtype = $type;
            $data = [];
            $nodes = [];
            $d = [];
            $d[] = $crawler->filter('tr')->each(function ($node) use ($type  ,$paper , $date) {
            $data = [];
            if($node->filter('th')->count() > 0){

            $data['th'] =   trim(preg_replace('/\s\s+/', ' ', $node->filter('th')->text()));
            }
            if($node->filter('td')->count() > 0){
            $data['td'] =   trim(preg_replace('/\s\s+/', ' ', $node->filter('td')->text()));
            }
            if($node->filter('th')->count() > 0){
            if($node->filter('th')->text() == "Company Logo"){
            $data['td'] =  $node->filter('td a img')->attr('src') ;
            }
            }
            $adds = [];
            if(isset($data['th']) && ($data['th'] == "Company Name")){
            $adds['company_name'] = $data['td'];
            }
            if(isset($data['th']) && ($data['th']== "Total Positions")){
            $adds['total_pos'] = $data['td'];
            }
            if(isset($data['th']) && ($data['th'] == "Company Logo")){
                $adds['rel_logo'] = $data['td'];
            }
            if(isset($data['th']) && ($data['th'] == "Job Location")){
                $adds['job_loc'] = $data['td'];
            }
            if(isset($data['th']) && ($data['th'] == "Gender")){
                $adds['gender'] = $data['td'];
            }
            if(isset($data['th']) && ($data['th'] == "Cities")){
                $adds['city_id'] = $data['td'];
                
            }
            if(isset($data['th']) && ($data['th'] == "Deadline to Apply")){
                $adds['last_date'] = $data['td'];
                
            }
            if(isset($data['th']) && ($data['th'] == "Salary")){
                $adds['salary'] = $data['td'];
                
            }
            if(isset($data['th']) && ($data['th'] == "Skills")){
                $adds['skills'] = $data['td'];
                
            }
            if(isset($data['th']) && ($data['th'] == "Working Hours")){
                $adds['working_hours'] = $data['td'];
                
            }
            if(isset($data['th']) && ($data['th'] == "Age")){
                $adds['age_limit'] = $data['td'];
                
            }
            if(isset($data['th']) && ($data['th'] == "Experience")){
                $adds['experience'] = $data['td'];
                
            }
            if(isset($data['th']) && ($data['th'] == "Contact Number")){
                $adds['contact_number'] = $data['td'];
                
            }
            if(isset($data['th']) && ($data['th'] == "Categories")){
                $adds['category_id'] = $data['td'];
                
            }
            if(isset($data['th']) && ($data['th'] == "Job Title")){
                $adds['title'] = $data['td'];
                
            }
            if(isset($data['th']) && ($data['th'] == "Job Type")){
                if(isset($data['td']) && ($data['td'] == "CONTRACTOR")){
                $adds['job_type_id'] = 2;
                }
                if(isset($data['td']) && ($data['td'] == "FULL")){
                $adds['job_type_id'] = 1;
                }
            }
           
            return $adds;

            });
            if($type == 1){
            $adddata['type'] = "jobs";
            }
            if($type == 2){
            $adddata['type'] = "admissions";
            }
            if($type == 3){
            $adddata['type'] = "tenders";
            }
            $adddata = [];
            $adddata['date_added'] = \Carbon\Carbon::now()->subDays(11);
            $adddata['newspaper_id'] = $j;
            foreach ($d[0] as $key1 => $value1) {
            if(key($value1)){
            $key = key($value1); 
            $adddata[key($value1)] = $value1[$key];
            }
            }

            $add = Adds::create($adddata);
            

        }
        
    
}

    }
}
