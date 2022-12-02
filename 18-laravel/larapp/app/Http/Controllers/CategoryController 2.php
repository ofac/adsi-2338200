<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categories = Category::all();
        $categories = Category::paginate(50);
        return view('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //dd($request->all());
        $cat = new Category;
        $cat->name  = $request->name;
        if ($request->hasFile('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $file);
            $cat->image = 'images/' . $file;
        }
        $cat->description  = $request->description;
        if ($cat->save()) {
            return redirect('categories')
                     ->with('message', 'The category: ' . $cat->name . ' was successfully added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('categories.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        //$request->all();
        $category->name  = $request->name;
        if ($request->hasFile('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $file);
            $category->image = 'images/' . $file;
        }
        $category->description = $request->description;
        if ($category->save()) {
            return redirect('categories')
                     ->with('message', 'The category: ' . $category->name . ' was successfully edited!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            return redirect('categories')
                     ->with('message', 'The category: ' . $category->name . ' was successfully deleted!');
        }
    }

    public function search(Request $request) {
        $cats = Category::names($request->q)->paginate(50);
        return view('categories.search')->with('categories', $cats);
    }
}
