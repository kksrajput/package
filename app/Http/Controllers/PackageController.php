<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\p_genre;
use App\package_option;
use App\p_package;

class PackageController extends Controller
{
    //
    public function index(){
        $p_genres=p_genre::all();
        $service_type=package_option::where('component_type', 'service_type')->get();
        $deliverable=package_option::where('component_type', 'deliverable')->get();
        $shoot_duration=package_option::where('component_type', 'shoot_duration')->get();
        $timeline=package_option::where('component_type', 'timeline')->get();
        return view('package')->with('p_genres',$p_genres)
                              ->with('service_type',$service_type)
                              ->with('deliverable',$deliverable)
                              ->with('shoot_duration',$shoot_duration)
                              ->with('timeline',$timeline);
    }
    public function store(Request $request){
        // $p_package= new p_package();
        $pkg_name=$request->pkg_name;
        // return $pkg_name; 
         $genre=json_encode($request->genre);
        //  return $genre;
        $deliverable=json_encode($request->deliverable);
        // return $deliverable;
        $service_type = json_encode($request->service_type);
        // return $service_type;
        $shoot_duration=json_encode($request->shoot_duration);
        // return $shoot_duration;
        $timeline=json_encode($request->timeline);
        // return $timeline;
        $description=$request->description;
        // return $description;
        $base_price=$request->base_price;
        //return $base_price;
        $is_deleted=0;
        $highlights=1;
        $price_negotiatable=0;

        // return $genre;

        foreach($pkg_name as $key => $X){
            // $name = $fileNameToStore;
            $insert[$key]['pkg_name'] = $pkg_name[$key]; 
            
            $insert[$key]['genre'] = $genre;
            $insert[$key]['deliverable'] = $deliverable;
            $insert[$key]['service_type'] = $service_type;
            $insert[$key]['shoot_duration'] = $shoot_duration;
            $insert[$key]['timeline'] = $timeline;
            $insert[$key]['description'] = $description[$key];
            $insert[$key]['base_price'] = $base_price[$key]; 
            $insert[$key]['is_deleted'] = 0;
            $insert[$key]['highlights'] = 0;
            $insert[$key]['price_negotiatable'] = 0;
                    
            
        }
    //     return $insert;
      p_package::insert($insert);

        
    }
}
