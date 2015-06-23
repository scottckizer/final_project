<?php namespace App\Http\Controllers;

use Auth;
use Request;
use App\User;
use App\Models;
use App\Models\Trail;

class TrailController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function newTrail() {
        return view('new_trail');
    }

    public function viewAll() {
        return view('trails');
    }

    public function viewTrail($id) {
        $trail = Trail::find($id);
        return view('trail',
            ['trail' => $trail]);
    }

    public function viewAllByUser($user_id) {
        $trails = Trail::where('user_id', '=', $user_id)->get();
        return view('user',
            ['trails' => $trails]);
    }

    public function create() {
        return view('new_trail', []);
    }

    public function postCreate() {
        $trail = new Trail();
        $trail->id = Request::input('id');
        $trail->trail_name = Request::input('trail_name');
        $trail->save();

        return redirect('new_trail');
    }

    public function update($id) {
        $trail = Trail::find($id);
        return view('update_trail',
            ['trail' => $trail]);
    }

    public function postUpdate($id) {
        $trail = Trail::find($id);
        $trail->trail_name = Request::input('trail_name');
        $trail->save();

        return redirect('trail');
    }

    public function delete($id) {
        $trail = Trail::find($id);
        $trail->delete($id);

        return redirect('trail');
    }

    public function viewAllTrailComments($id) {
        return $this->hasMany('TrailComments');
    }

}