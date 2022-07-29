<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class AdminUserController extends Controller
{
    public function index()
    {
    return view ('admin.dashboard');
    }
    public function store(Request $request)
    {
    $credentials =$request->only('email','password');
    // if (! Auth::guard('admin')->attempt($credentials)) {
    // return back()->withErrors([
    // 'messege' => 'wrong credentials please try again'
    // ]);
    return view('/dashboard');

    }
}
