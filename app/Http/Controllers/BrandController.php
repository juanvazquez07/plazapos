<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use App\Models\Brand;
use App\Models\Stock;

class BrandController extends Controller
{
    public function index(){
        $brands = DB::table('brands')->get();
        return Inertia::render('Brands/Index', ['brands'=>$brands]);
    }

    public function update(Brand $brand){

        //dd(Request::input('name'));
        $brand->update([
            'name' => Request::input('name'),
        ]);
        return Redirect::route('brands.index');
    }

    public function edit(Brand $brand){
        //dd($brand->name);
        return Inertia::render('Brands/Edit',['brand'=>$brand]);
    }

    public function destroy(Brand $brand){
        //Storage::delete('public/'. $topic->image);
        $brands = DB::table('brands')->get();
        if($brand->delete()){
            //dd("Estoy entrando a que si se pudo eliminar");
            return Redirect::route('brands.index')->with('succes', 'La categoria se elimino correctamente!');
        }else{
            //dd("Estoy entrando a que no se pudo eliminar");
            return Redirect::route('brands.index')->with('error', 'La categoria no puede ser eliminada!');
        }

        
    }

    public function create(){
        return Inertia::render('Brands/Create');
    }

    public function store(){
        Brand::create([
            'name' => Request::input('name'),
        ]);
        
        return Redirect::route('brands.index');
    }
}
