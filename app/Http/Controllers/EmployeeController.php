<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function all_product()
    {
        $product = Product::all();
        return view('Employee.all_product',compact('product'));
    }
}
