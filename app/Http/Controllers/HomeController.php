<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function intro()
    {
        $data = Rent::get();
        return view('intro',['rentDetails'=>$data,'message']);
        // return view('intro');
    }
}
