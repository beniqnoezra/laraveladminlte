<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $getcustomer = customer::all();
        return view('customer', compact('getcustomer'));
    }

    public function destroy($id)
    {
        $getcustomer = customer::find($id);
        $getcustomer->delete();
        return redirect()->back();
    }

    
}
