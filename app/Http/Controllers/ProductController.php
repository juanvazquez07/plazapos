<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use App\Models\Product;
use App\Models\Stock;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('stocks')
            ->join('products', 'stocks.id', '=', 'products.stock_id')
            ->get();
        return Inertia::render('Products/Index',['products' => $products]);
        /*return Inertia::render('Products/Index', [
            'products' => 
                [
                    'id' => $producto->id,
                    'name' => $producto->name,
                    'code' => $producto->code,
                    'description' => $producto->description,
                    'cost' => $producto->cost,
                    'price' => $producto->price,
                    'stock_id' => $producto->stock_id,
                    'brand_id' => $producto->brand_id,
                    'category_id' => $producto->category_id,
                    'quantity' => $producto->quantity, 
                   
                    //'name' => $product->name,
                    //'image' => asset('storage/'. $topic->image)
                ]
        ]);*/
    }

    public function create(){

        $categories = DB::table('categories')->get();
        $brands = DB::table('brands')->get();
        //dd($brands);
        return Inertia::render('Products/Create', ['categories'=>$categories, 'brands'=>$brands]);
    }

    public function store(){
        $alert = 'succes';
        $image = Request::file('image')->store('topics', 'public');
        Stock::create([
            'quantity' => Request::input('stock'),
        ]);

        $stock = DB::table('stocks')->latest('created_at')->first();

        $stock_id = $stock->id;
        //dd();
        Product::create([
            'code' => Request::input('code'),
            'name' => Request::input('name'),
            'description' => Request::input('description'),
            'cost' => Request::input('cost'),
            'price' => Request::input('price'),
            'stock_id' => $stock_id,
            'category_id' => Request::input('category_id'),
            'brand_id' => Request::input('brand_id'),
            'image' => $image
        ]);

        return Redirect::route('products.index')->with('message', 'Producto agregado correctamente!');
    }

    public function edit(Product $product){
        $products = DB::table('stocks')
            ->join('products', 'stocks.id', '=', 'products.stock_id')
            ->where('products.id', '=', $product->id)
            ->get();
        //dd($products);
        $categories = DB::table('categories')->get();
        $brands = DB::table('brands')->get();
        return Inertia::render('Products/Edit', [
            'product' => $products,
            //'image' => asset('storage/'. $topic->image)
            'categories'=>$categories, 
            'brands'=>$brands
        ]);
    }

    public function destroy(Product $product){
        //Storage::delete('public/'. $topic->image);
        $product->delete();

        return Redirect::route('products.index');
        $brands = DB::table('brands')->get();
        if($product->delete()){
            //dd("Estoy entrando a que si se pudo eliminar");
            return Redirect::route('brands.index')->with('succes', 'La categoria se elimino correctamente!');
        }else{
            //dd("Estoy entrando a que no se pudo eliminar");
            return Redirect::route('brands.index')->with('error', 'La categoria no puede ser eliminada!');
        }
    }

    public function update(Product $product){
        $stock = DB::table('stocks')->where('stocks.id', '=', $product->stock_id)->get();

        $stock = DB::table('stocks')
              ->where('stocks.id', $product->stock_id)
              ->update(['quantity' => Request::input('cantidad')]);

        //dd($stock[0]->quantity);
        if(
            $product->update([
                'code' => Request::input('code'),
                'name' => Request::input('name'),
                'description' => Request::input('description'),
                'cost' => Request::input('cost'),
                'price' => Request::input('price'),
                //'stock_id' => Request::input('stock'),
                //'category_id' => Request::input('category_id'),
                //'brand_id' => Request::input('brand_id'),
            ])
        ){
            return Redirect::route('products.index')->with('message', 'Producto modificado correctamente!');
        }else{
            return Redirect::route('products.index')->with('error', 'El producto no se pudo modificar!');
        }
        
        
    }

    public function decrement(Product $product){
        $stock = DB::table('stocks')->where('stocks.id', '=', $product->stock_id)->get();

        $quant = $stock[0]->quantity;

        $quant -= 1;

        $stock = DB::table('stocks')
            ->where('stocks.id', $product->stock_id)
            ->update(['quantity' => $quant]);

        return Redirect::route('products.index');
    }

    public function increment(Product $product){
        $stock = DB::table('stocks')->where('stocks.id', '=', $product->stock_id)->get();

        $quant = $stock[0]->quantity;

        $quant += 1;

        $stock = DB::table('stocks')
            ->where('stocks.id', $product->stock_id)
            ->update(['quantity' => $quant]);

        return Redirect::route('products.index');
    }

    public function view(Product $product){
        /*return Inertia::render('', [
            'product' => $product,
            'image' => asset('storage/'. $product->image)
        ]);*/

        return Inertia::render('Products/Product_View', [
            'products' => 
                [
                    'id' => $product->id,
                    'name' => $product->name,
                    'description' => $product->description,
                    'price' => $product->price,
                    'image' => asset('storage/'. $product->image)
                ]
        
        ]);
    }

}
