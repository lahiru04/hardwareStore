<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    
     public function index(){
        return view('productlist');
    }
    
      public function productDetails(){
        return view('product-details');
    }

    public function loadAllProducts() {
        $products = Product::all();
        return response()->json($products);
    }

    public function insertProduct(Request $request) {

        $product = new Product();
        $product->name = $request['name'];
        $product->code = $request['code'];
        $product->categoryId = $request['categoryId'];
        $product->size = $request['size'];
        $product->location = $request['location'];
        $status = false;
        try {
            $status = $product->save();
        } catch (Exception $e) {
            return response()->json(['message' => 'Something went wrong', 'result' => $status]);
        }


        if ($status) {
            return response()->json(['message' => 'Product added successfully', 'result' => $status]);
        } else {
            return response()->json(['message' => 'Something went wrong', 'result' => $status]);
        }
    }

    public function addProductx(Request $request) {

        return response()->json(['message' => 'Product added successfully', 'result' => true]);
    }

}
