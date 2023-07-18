<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::paginate(3);

        $data = [
            "success" => true,
            "results" => $products,
        ];

        return response()->json($data);
    }
}
