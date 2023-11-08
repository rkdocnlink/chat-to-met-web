<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Classes;
class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where("category_status","1")->get();
        // $classes = Classes::where("class_status","1")->get();
        // $subjects = Subject::where("class_status","1")->get();
        return view("admin.pages.questions.create", compact("categories"));
    }

    public function getCategory(Request $request)
    {
        $classess = Classes::where('category_id', $request->category_id)->get();
        $subcat="<option value=''>Select a subcategory</option>";
        foreach( $classess as $classes ) {
            $subcat .="<option value='".$classes->id."'>".$classes->class_title."</option>";
        }
        return response()->json(['status'=>true,'data'=>$subcat]);
    }

    public function getSubject(Request $request)
    {
        $classess = Subject::where('class_id', $request->class_id)->get();
        $subcat="<option value=''>Select a subcategory</option>";
        foreach( $classess as $classes ) {
            $subcat .="<option value='".$classes->id."'>".$classes->subject_title."</option>";
        }
        return response()->json(['status'=>true,'data'=>$subcat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questions $questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questions $questions)
    {
        //
    }
}
