<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
