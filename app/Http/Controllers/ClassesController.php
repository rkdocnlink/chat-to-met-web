<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $classes = Classes::orderBy("id","DESC")->paginate(10);
        $categories = Category::where("category_status","1")->get();
        return view("admin.pages.classes.index", compact("classes","categories"));
        
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
        return view("admin.pages.classes.create", compact("categories"));
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
            "class_title"=> "required|max:50",
        ]);
        
        $class = new Classes();
        $class->category_id = $request->category_id;
        $class->class_title = $request->class_title;
        $class->class_status = $request->class_status == "active" ? 1 : 0;
        $class->class_slug = Str::slug($request->class_title);
        $class->save();

        return redirect()->route("classes.index")->with("success","A new class added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $classes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function edit($cid)
    {
        //
        $class = Classes::find($cid);
        $categories = Category::where("category_status","1")->get();
        return view("admin.pages.classes.edit", compact("class","categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cid)
    {
        //
        $request->validate([
            "class_title"=> "required|max:50",
        ]);
    
        $class = Classes::where("id",$cid)->first();
        $class->category_id = $request->category_id;
        $class->class_title = $request->class_title;
        $class->class_status = $request->class_status == "active" ? 1 : 0;
        $class->class_slug = Str::slug($request->class_title);
        $class->save();
        return redirect()->route("classes.index")->with("success","A class is updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function destroy($cid)
    {
        //
        $class = Classes::find($cid);
        $class->delete();
        return redirect()->back()->with("message","A class deleted successfully.");
    }
}
