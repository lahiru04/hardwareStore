<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {

    public function index() {
        $products = Product::where('status', 1)->get();
        $categories = ["Travertine", "Granite", "Marble", "Limestone", "Bluestone", "Mosaics"];
        $finishes = ["Honed", "Polished", "PAVER_TUMBLED"];

        return view('productlist', compact('products', 'categories', 'finishes'));
    }

    public function productDetails(Request $request) {
        $id = $request['productID'];
        $product = Product::find($id);
        $categories = ["Travertine", "Granite", "Marble", "Limestone", "Bluestone", "Mosaics"];

        return view('product-details', compact('product', 'categories'));
    }

    public function editProduct(Request $request) {
        $id = $request['productID'];
        $product = Product::find($id);
        $categories = ["Travertine", "Granite", "Marble", "Limestone", "Bluestone", "Mosaics"];
        $finishes = ["Honed", "Polished", "PAVER_TUMBLED"];

        return view('editproduct', compact('product', 'categories', 'finishes'));
    }

    public function addproduct() {
        return view('addproduct');
    }

    public function loadAllProducts() {
        $products = Product::where('status', 1)->get();
        return response()->json($products);
    }

    public function insertProduct(Request $request) {


        $product = new Product();
        $product->name = $request['name'];
        $product->code = $request['code'];
        $product->categoryId = $request['categoryId'];
        $product->finish = $request['productFinish'];
        $product->size = $request['productSize'];
        $product->location = $request['location'];
        $product->crate = $request['crateNo'];
        $product->qtySqm = $request['qtySqm'];
        $product->qtyPcs = $request['qtyPcs'];

        if ($request->hasFile('productImage')) {
            $imagePath = $request->file('productImage')->store('public/images');
            $product->imageUrl = $imagePath;
        } else {
            $product->imageUrl = 'xxx';
        }



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

    public function deleteProduct(Request $request) {
        $id = $product->name = $request['id'];
        $product = Product::findOrFail($id);
        $product->status = 0;

        $product->save();

        return response()->json(['message' => 'Product successfully deleted', 'result' => true]);
    }

    public function addProductx(Request $request) {

        return response()->json(['message' => 'Product added successfully', 'result' => true]);
    }

    public function updateProduct(Request $request) {
        $id = $request['productId'];
        $product = Product::findOrFail($id);
        $product->name = $request['name'];
        $product->code = $request['code'];
        $product->categoryId = $request['categoryId'];
        $product->finish = $request['productFinish'];
        $product->size = $request['productSize'];
        $product->location = $request['location'];
        $product->crate = $request['crateNo'];
        $product->qtySqm = $request['qtySqm'];
        $product->qtyPcs = $request['qtyPcs'];
        $product->imageUrl = $request['imageUrl'];

        if ($request->hasFile('productImage')) {

            $imagePath = $request->file('productImage')->store('public/images', 'public');

            $product->imageUrl = $imagePath;
        } else {
            $product->imageUrl = 'xxx';
        }
        $status = false;
        try {
            $status = $product->save();
        } catch (Exception $e) {
            return response()->json(['message' => 'Something went wrong', 'result' => $status]);
        }


        if ($status) {
            return response()->json(['message' => 'Product updated successfully', 'result' => $status]);
        } else {
            return response()->json(['message' => 'Something went wrong', 'result' => $status]);
        }
    }

    public function insertProductAlt(Request $request) {

        try {  
            $product = new Product();
            $product->name = $request['name'];
            $product->code = $request['code'];
            $product->categoryId = $request['categoryId'];
            $product->finish = $request['productFinish'];
            $product->size = $request['productSize'];
            $product->location = $request['location'];
            $product->crate = $request['crateNo'];
            $product->qtySqm = $request['qtySqm'];
            $product->qtyPcs = $request['qtyPcs'];

            if ($request->hasFile('productImage')) {

                $imagePath = $request->file('productImage')->store('public/images', 'public');

                $product->imageUrl = $imagePath;
            } else {
                $product->imageUrl = 'xxx';
            }

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
        } catch (Exception  $e) {
            echo "Caught exception: " . $e->getMessage();
            
           
        }
    }

}
