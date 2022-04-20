<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Userlogin;

class UserController extends Controller
{
    public function Index(){
		return view('user.user_login');
	}

	public function dashboard(){
		return view('home');
	}

	public function self(){
		return view('user.goalsheet.self');
	}
}
