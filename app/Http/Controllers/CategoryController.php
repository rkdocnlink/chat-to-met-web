<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderby("id","DESC")->paginate(10);
        return view("admin.pages.category.index",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.pages.category.create");
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
            "category_title"=> "required|max:50|regex:/^[a-zA-Z, ' ']+$/u",
        ]);
    
        $category = new Category();
        $category->category_title = $request->category_title;
        $category->category_status = $request->category_status == "active" ? 1 : 0;
        $category->category_slug = Str::slug($request->category_title);
        $category->save();

        return redirect()->route("category.index")->with("success","A new category added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($cid)
    {
        //
        $category = Category::find($cid);
        return view('admin.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cid)
    {
        //
        $request->validate([
            "category_title"=> "required|max:50|regex:/^[a-zA-Z, ' ']+$/u",
        ]);
    
        $category = Category::where("id",$cid)->first();
        $category->category_title = $request->category_title;
        $category->category_status = $request->category_status == "active" ? 1 : 0;
        $category->save();
        return redirect()->route("category.index")->with("success","A category updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($cid)
    {
        //
        $category = Category::find($cid);
        $category->delete();
        return redirect()->back()->with("message","A category deleted successfully.");
    }
}
