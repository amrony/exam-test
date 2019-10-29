<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $users = User::all();
        $company = Company::first();
//        dd($company);
        return view('front-end.master', compact('users', 'company'));
    }
}
