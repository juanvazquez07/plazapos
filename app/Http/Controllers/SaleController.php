<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Sale;

class SaleController extends Controller
{
    public function procces(){
        return Inertia::render('Sales/Procces');
    }
}
