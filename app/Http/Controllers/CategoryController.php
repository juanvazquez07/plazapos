<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Stock;

class CategoryController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->get();
        
        return Inertia::render('Categories/Index', ['categories'=>$categories]);
    }

    public function create(){
        return Inertia::render('Categories/Create');
    }

    public function store(){
        Category::create([
            'name' => Request::input('name'),
        ]);
        
        return Redirect::route('categories.index');
    }

    public function edit(Category $category){
        //dd($brand->name);
        return Inertia::render('Categories/Edit',['category'=>$category]);
    }

    public function update(Category $category){

        //dd(Request::input('name'));
        $category->update([
            'name' => Request::input('name'),
        ]);
        return Redirect::route('categories.index');
    }
}
