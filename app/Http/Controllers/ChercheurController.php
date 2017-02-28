<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class ChercheurController extends Controller
{
     public function index(){
    	return 'chercheur';
    }
 public function verif(Request $request, $id){

$user = User::find($id);
$user->verif =1;
$user->save();
return redirect('/home');
}



}
