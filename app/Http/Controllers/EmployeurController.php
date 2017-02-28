<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class EmployeurController extends Controller
{
     public function index(){
    	return 'employeur';
    }


public function verif(Request $request){

$user = Auth::getUser();
$user->verif =1;
$user->save();
return redirect('/home');
}



}
