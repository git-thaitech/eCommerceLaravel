<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService\IUserService;

class HomeController extends Controller
{
    private IUserService $userService;
    
    //Admin
    public function adminHome() {
        return view('Admin.admin-home');
    }

    public function adminLogin(Request $request) {
        
        if ($request->method()=="GET")
            return view('Admin.admin-login');
        
        echo "this is post method";

        
    }

    public function adminForgot() {

    }






    //Client

}
