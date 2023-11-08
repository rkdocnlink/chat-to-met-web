<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Category;
use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subjects = Subject::orderBy("id","DESC")->paginate(10);
        $categories = Category::where("category_status","1")->get();
        $classes = Classes::where("class_status","1")->get();
        return view("admin.pages.subject.index", compact("subjects","categories", "classes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::where("category_status","1")->get();
        $classes = Classes::where("class_status","1")->get();
        return view("admin.pages.subject.create", compact("categories", "classes"));
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
        $request->validate([
            "category_id"=> "required",
            "class_id"=> "required",
            "subject_title"=> "required|max:50",
        ]);
    
        $subject = new Subject();
        $subject->category_id = $request->category_id;
        $subject->class_id = $request->class_id;
        $subject->subject_title = $request->subject_title;
        $subject->subject_status = $request->subject_status == "active" ? 1 : 0;
        $subject->subject_slug = Str::slug($request->subject_title);
        $subject->save();

        return redirect()->route("subject.index")->with("success","A new subject added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($sid)
    {
        //
        $subject = Subject::find($sid);
        $categories = Category::where("category_status","1")->get();
        $classes = Classes::where("class_status","1")->get();
        return view("admin.pages.subject.edit", compact("subject","classes","categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($sid)
    {
        //
        $subject = Subject::find($sid);
        $subject->delete();
        return redirect()->back()->with("message","A class deleted successfully.");
    }
}
