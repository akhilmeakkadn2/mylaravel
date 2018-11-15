<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use GuzzleHttp\Exception\GuzzleException;
//use GuzzleHttp\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\GeneralModel;

class General extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function loaddata(Request $request)
    {
    	$course_data = [];
    	$response = json_decode(file_get_contents('https://api.coursera.org/api/courses.v1'),1);
    	foreach($response['elements'] as $key=>$val){
    		$course_data[] = array('course_id'=>$val['id'],'course_name'=>$val['name'],'course_type'=>$val['courseType']);
    	}
    	//$page_data['courses'] = $course_data;

    	//Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($course_data);

        //Define how many items we want to be visible in each page
        $per_page = 10;

        //Slice the collection to get the items to display in current page
        $currentPageResults = $collection->slice(($currentPage-1) * $per_page, $per_page)->all();

        //Create our paginator and add it to the data array
        $page_data['courses'] = new LengthAwarePaginator($currentPageResults, count($collection), $per_page);

        //Set base url for pagination links to follow e.g custom/url?page=6
        $page_data['courses']->setPath($request->url());
    	//echo '<pre>';
    	//print_r($course_data);exit;
        return view('course_data',$page_data);
    }
    public function courselist()
    {
        $course_list = GeneralModel::paginate(10);

        return view('course_list')->with('course_list', $course_list);
    }
    public function store(Request $request)
    {
        $resp = ['status'=>0,'message'=>'Something went wrong!'];
        $generalmodel = new GeneralModel;
        $generalmodel ->course_id = $request->input('course_id');
        $generalmodel ->course_name = $request->input('course_name');
        $generalmodel ->course_type = $request->input('course_type');
        if($generalmodel ->save()){
            $resp['status']=1;
            $resp['message']="data saved"; 
            echo json_encode($resp,1);
        }else
        {
            echo json_encode($resp,1);
        }
    }

}
