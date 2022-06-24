<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == '1') {
            return view('admin');
        }
        if ($role == '2') {
            return view('seller');
        } else {
            return view('dashboard');
        }
    }
    public function addseller(Request $request)
    {
        $addseller = new User();
        $addseller->name = $request->name;
        $addseller->email = $request->email;
        $addseller->password = Hash::make($request->password);
        $addseller->role = '2';
        $addseller->save();
        return redirect()->back()->with('instDone', 'Your data has been sumited successfully !!');
    }
}
