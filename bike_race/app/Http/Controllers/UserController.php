<?php namespace App\Http\Controllers;

use Request;
use App\User;
use App\Models\Race;

class UserController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function viewAllByUser($user_id) {
        $races = Race::where('user_id', '=', $user_id)->get();
        $allRaces = Race::all();
        return view('user',
            ['races' => $races, 'allRaces' => $allRaces]);
    }

    public function viewAll() {
        $users = User::all();
        return view('allUsers', ['users' => $users]);

    }

    public function view($id) {
        $user = User::find($id);
        return view('user', ['user' => $user]);
    }

    public function update($id) {
        $user = User::find($id);
        return view('update_user', ['user' => $user]);
    }

    public function postUpdate($id) {
        $user = User::find($id);
        $user->first_name = Request::input('first_name');
        $user->last_name = Request::input('last_name');
        $user->email = Request::input('email');
        $user->user_photo = Request::input('user_photo');
        $user->birthday = Request::input('birthday');
        $user->hometown = Request::input('hometown');
        $user->save();
        return redirect('users');
    }

    public function delete($id) {
        $id   = Request::input('id');
        $user = User::find($id);
        $user->delete();
        return redirect('users');
    }

    protected function validateForm() {
        $this->validate(Request::instance(), [
            'first_name' => 'required|alpha|min:2|max:20',
            'last_name' => 'alpha|between:2,20',
            'email' => 'email',
        ]);
    }

    public function userComments($id) {
        $user_comments = User::with('comments.races')->where('id', '=', $id)->get();
        return view('all_user_comments',
            ['user_comments' => $user_comments]);
    }

    // public function logout() {
    //  if (Auth::check()) {
    //      Auth::logout();
    //      return redirect('index');
    //  }
    // }

}