<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getRentDetailsByHouses()
    {
        $data = Rent::where('rent_type','house')->get();
        return view('flatroomhouse',['rentDetails'=>$data]);
    }

    public function getRentDetailsByflats()
    {
        $data = Rent::where('rent_type','flat')->get();
        return view('flatroomhouse',['rentDetails'=>$data]);
    }

    public function getRentDetailsByrooms()
    {
        $data = Rent::where('rent_type','room')->get();
        return view('flatroomhouse',['rentDetails'=>$data]);
    }
}
