<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adds;


class ScrapProduct extends Controller
{


    public function storeproByXML($date , $type , $paper){
        $url = 'https://paperpk.com/paper-ads.php?type='.$type.'&paper='.$paper.'&date='.$date;
        $crawler = Goutte::request('GET', $url);
        $a = $crawler->filter('#wrapper #wrapper_total #navigate #featured_latest_job #job-table table tbody #job-one-lnkl')->links();
        $count = 0;
        foreach ($a as $b) {
            $count++;
                $all_links[] = $b->getURI();
                $name = $type.$count.$date;
                $crawler = Goutte::request('GET', $b->getURI());
                $data = $crawler->filter('#show-ad-img-div')->html();
                $content = \View::make('xml.index', compact('html'))->render();
                \File::put(storage_path().'/'.$name.'.xml', $content);
            }
        $jobtype = $type;
    	$url = 'https://paperpk.com/jobs/driver-jobs-in-rawalpindi-at-asia-tech-manpower-services_172674';
        $crawler = \Goutte::request('GET', $url);
        $data = [];
        $nodes = [];
        $d = [];
        $d[] = $crawler->filter('tr')->each(function ($node) use ($type  ,$paper , $date) {
        // 	if($node->filter('th')){
        // 	if($node->filter('th')->text() == "Total Positions"){
        // 		$data['total_pos'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Company Name"){
        // 		$data['company_name'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Company Name"){
        // 		$data['company_name'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Company Logo"){
        // 		// $data['logo'] = $node->filter('td')->attr('src');
        // 	}
        // 	if($node->filter('th')->text() == "Cities"){
        // 		if($node->filter('td')->text() == "                                Multiple Cities                            "){

        // 		$data['city_id'] = "4444";
        // 		}
        // 		else{
        // 		$data['city_id'] = $node->filter('td')->text();	
        // 		}
        // 	}
        // 	if($node->filter('th')->text() == "Deadline to Apply"){
        // 		$data['last_date'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Job Location"){
        // 		$data['job_loc'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Salary"){
        // 		$data['salary'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Gender"){
        // 		$data['gender'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Responsibility"){
        // 		$data['desc'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Skills"){
        // 		$data['skills'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Working Hours"){
        // 		$data['working_hours'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Age"){
        // 		$data['age'] = $node->filter('td')->text();
        // 	}
        // 	if($node->filter('th')->text() == "Experience"){
        // 		$data['exp'] = $node->filter('td')->text();
        // 	}
        // }
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
            // $adds->job_loc = $data['job_loc'];
            // $adds->salary = $data['salary'];
            // $adds->skills = $data['skills'];
            // $adds->working_hours = $data['working_hours'];
            // $adds->age_limit = $data['age'];
            // $adds->experience = $data['exp'];
            // $adds->contact_number = $data['contact'];
            // $adds->address = $data['address'];
            // $adds->job_email = $data['email'];
            // $adds->city_id = $data['city'];
            // $adds->category_id = $data['category'];
            // $adds->job_type_id = $data['category'];
            // $adds->qualification = $data['qual'];
            // // $adds->minimum_requirements = ;
            // $adds->apply_by = $data['last_date'];
            // $adds->description = $data['desc'];
            // $adds->last_date = $data['last_date'];
            // $adds->newspaper_piece = $data['newspaper_img'];
            // $adds->rel_logo = $data['logo'];
            // $adds->save();
        	return $adds;
        	// if(!empty($node->filter('td')->html())){

        	// $data['td'] =  $node->filter('td')->html();
        	// }
        	// return $data;
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
            $adddata['newspaper_id'] = $paper;
                foreach ($d[0] as $key1 => $value1) {
                    if(key($value1)){
                        $key = key($value1); 
                    $adddata[key($value1)] = $value1[$key];
                    }
                }

                $add = Adds::create($adddata);
    }
}
