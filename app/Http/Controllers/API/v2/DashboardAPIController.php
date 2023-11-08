<?php

namespace App\Http\Controllers\API\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Classes;
use App\Models\Subject;

class DashboardAPIController extends Controller
{
    //
    public function listCategory(){

        if (Category::where('category_status',1)->exists()) {

             $category = Category::where('category_status',1)->get();
             return response()->json(['status'=>true,
                                      'data'=>$category], 200);
             
         }else{

             return response()->json(['status'=>false,'messaage'=>'Sorry Categories not found'], 200);
         }
    }
    public function listClasses(){

        if (Classes::where('class_status',1)->exists()) {

             $classes = Classes::where('class_status',1)->get();
             return response()->json(['status'=>true,
                                      'data'=>$classes], 200);
             
         }else{

             return response()->json(['status'=>false,'messaage'=>'Sorry Classes not found'], 200);
         }
    }

    public function listSubjects(){

        if (Subject::where('subject_status',1)->exists()) {

             $subjects = Subject::where('subject_status',1)->get();
             return response()->json(['status'=>true,
                                      'data'=>$subjects], 200);
             
         }else{

             return response()->json(['status'=>false,'messaage'=>'Sorry Subjects not found'], 200);
         }
    }
    
}
