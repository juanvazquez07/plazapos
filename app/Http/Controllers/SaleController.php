<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Sale;
use App\Models\Product;

class SaleController extends Controller
{
    public function procces(){
        return Inertia::render('Sales/Procces');
    }

    public function getProducts(Request $request)
    {
        //dd("si llego al controlador");
        $data = Product::where('name', 'LIKE','%'.$request->keyword.'%')->get();
        //$data=$request->keyword;
        //return back()->with('data');
        //return Inertia::render('Sales/Procces',['data' => $data]);
        return response()->json($data);
    }

    public function prueba(){
        dd("hola mundo");
    }
}
