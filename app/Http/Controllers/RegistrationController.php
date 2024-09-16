<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->all();
        // Validate the form data
        // $validatedData = $request->validate([
        //     'fullname' => 'required',
        //     'dob' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'gender' => 'required',
        //     'occupation' => 'required',
        //     'idType' => 'required',
        //     'idNumber' => 'required',
        //     'issuedAuthority' => 'required',
        //     'addressType' => 'required',
        //     'city' => 'required',
        //     'province' => 'required',
        //     'district' => 'required',
        //     'password' => 'required',
        //     'confirmpassword' => 'required|same:pd1',
        // ]);


        Register::create([
            'fullname' => $validatedData['fullname'],
            'dob' => $validatedData['dob'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'gender' => $validatedData['gender'],
            'occupation' => $validatedData['occupation'],
            'idType' => $validatedData['idType'],
            'idNumber' => $validatedData['idNumber'],
            'issuedAuthority' => $validatedData['issuedAuthority'],
            'addressType' => $validatedData['addressType'],
            'city' => $validatedData['city'],
            'province' => $validatedData['province'],
            'district' => $validatedData['district'],
            'password' => password_hash($validatedData['confirmpassword'], PASSWORD_DEFAULT),
        ]);

        return redirect('/');
        // return view('intro', ["message" => "Registration Successful"]);
    }

    public function login(Request $request)
    {
        // $data = $request->validate([
        //     'email' => 'required|email',
        //     'pwd' => 'required',
        // ]);

        $email = Register::where('email', $request->email)->first();

        $password = $email->password;

        if (password_verify($request->pwd, $password)) {
            $request->session()->put('login', $request->email);

            $user = User::where('email', $email->email);
            if ($user != null) {
                return redirect('/');
            } else {
                User::insert([
                    'name' => $email->fullname,
                    'email' => $email->email,
                    'password' => $password,
                    'reg_id' => $email->id,
                ]);
            }

            return redirect('/');
        } else {
            return redirect('/');
            // return view('login', ['message' => "email/password didnot matched",'login'=>null]);
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    //user profile
    public function profile()
    {
        $email = session()->get('login');
        $data = Register::where('email',$email)->first();
        // return $data;
        return view('profile',['userDetails'=>$data ? $data:null]);
    }
}
