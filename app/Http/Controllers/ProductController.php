<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $getproduct = product::all();
        return view('product', compact('getproduct'));
    }

    public function destroy($id)
    {
        $getproduct = product::find($id);
        $getproduct->delete();
        return redirect()->back();
    }

    
}
