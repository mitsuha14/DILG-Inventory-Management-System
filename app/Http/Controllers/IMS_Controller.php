<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\IMS_Model;

class IMS_Controller extends Controller
{
    public function dashboard()
    {
        $ims = Category::get();
        return view('category/dashboard', compact('ims'));
    }
}
