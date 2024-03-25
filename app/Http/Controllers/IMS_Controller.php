<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IMS_Model;

class IMS_Controller extends Controller
{
    public function dashboard()
    {
        $ims = IMS_Model::get();
        return view('dashboard', compact('ims'));
    }

    public function search(Request $request)
    {
        $search_text = $request->query('query');
        dd($search_text); // Debugging
        $products = IMS_Model::where('name', 'LIKE', '%' . $search_text . '%')->with('category')->get();
        dd($products); // Debugging
        return view('search', compact('products'));
    }



}
