<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $getcategory = category::all();
        return view('category', compact('getcategory'));
    }

    public function destroy($id)
    {
        $getcategory = category::find($id);
        $getcategory->delete();
        return redirect()->back();
    }

    
}
