<?php 
namespace App\Http\Controllers;

use Request;
use App\User;

class UserController extends Controller {

    public function view($id) {
        $user = User::find($id);
        return view('user',[ 'user'=>$user ]);
    }

    public function update($id) {
        $user = User::find($id);
        return view('update_user', ['user'=>$user]);
    }
    
}