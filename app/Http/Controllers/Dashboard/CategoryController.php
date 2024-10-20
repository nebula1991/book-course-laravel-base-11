<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Cache\Store;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(2);
        
        return view('dashboard/category/index', compact('categories'));
        
    }


    public function create()
    {

        $category = new Category();

        return view ('dashboard.category.create', compact('category'));
    }


    public function store(StoreRequest $request)
    {   

        Category::create($request->validated());

        return to_route('category.index');


        
    }


    public function show(Category $category)
    {
        return view('dashboard.category.show', ['category' => $category]);
    }


    public function edit(Category $category)
    {
        
        return view('dashboard.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());
        return to_route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('category.index');
    }
}
