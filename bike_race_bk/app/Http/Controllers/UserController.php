<?php 
namespace App\Http\Controllers;

use Request;
use App\User;

class UserController extends Controller {

    public function view($id) {
        $user = User::find($id);
        return view('user', ['user'=>$user]);
    }

    public function update($id) {
        $user = User::find($id);
        return view('update_user', ['user'=>$user]);
    }

    public function postUpdate($id) {
        $user = User::find($id);
        // $user->id = Request::input('id');
        $user->first_name = Request::input('first_name');
        $user->last_name = Request::input('last_name');
        $user->email = Request::input('email');
        $user->password = Request::input('password');
        $user->user_photo = Request::input('user_photo');
        $user->remember_token = Request::input('remember_token');
        $user->created_at = Request::input('created_at');
        $user->updated_at = Request::input('updated_at');
        $user->birthday = Request::input('birthday');
        $user->hometown = Request::input('hometown');

        $user->save();
        return redirect('users');
    }

    public function delete($id) {
        $id = Request::input('id');
        $user = User::find($id);
        $user->delete();
        return redirect('users');
    }

    protected function validateForm() {
        $this->validate(Request::instance(), [
            'first_name' => 'required|alpha|min:2|max:50',
            'last_name' => 'alpha|between:2,50',
            'email' => 'email',
        ]);
    }

}