<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IMS_Model;

class IMS_Controller extends Controller
{
    public function dashboard ()
    {
        $ims = IMS_Model::get();
        return view('dashboard', compact('ims'));
    }
}
