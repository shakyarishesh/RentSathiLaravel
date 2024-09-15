<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\User;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $data = $request->all();
        // $data = [$data];
        $email = session()->get('login');

        $user = User::where('email',$email)->first();
        $user_id = $user->id;
        $image_path = $request->file('img')->store('public');
        $img_array = explode('/',$image_path);
        $path = $img_array[1];
       
        $result = Rent::insert([
            "image_name"=> $data['img'],
            "image_path"=> $path,
            "rent_type"=> $data['rentType'],
            "location"=> $data['location'],
            "property_specification"=> $data['PropertySpecification'],
            "title"=> $data['title'],
            "price"=> $data['price'],
            "description"=> $data['description'],
            "status"=>"available",
            "created_by"=> $user_id,
            "created_at"=> now(),
        ]);
        if($result)
        {
            return redirect('/');
            // return view('intro',['message'=>"Uploaded Successfully"]);
           
        }else{
            return view('upload',['message'=>"Upload Failed"]);
        }
    }
}
