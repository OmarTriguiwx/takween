<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        if  (Auth::getUser()->role == 0) {
            return view ('admin');
            }
        elseif ((Auth::getUser()->role == 1) &&(Auth::getUser()->verif == 0)) {
            return view ('chercheurregister');
            }
          elseif ((Auth::getUser()->role == 1) &&(Auth::getUser()->verif == 1)) {
            return view ('chercheur');
            }

        elseif (Auth::getUser()->role == 2) {
            return view ('takween');
            }
        elseif  ((Auth::getUser()->role == 3)&&(Auth::getUser()->verif == 0)) {
            return view ('employeurregister');
            }
        elseif  ((Auth::getUser()->role == 3)&&(Auth::getUser()->verif == 1)) {
            return view ('employeur');
            }



    }
}
