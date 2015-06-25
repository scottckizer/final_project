<?php namespace App\Http\Controllers;

use Auth;
use Request;
use App\User;
use App\Models;
use App\Models\Race;
use Carbon\Carbon;

class RaceController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function newRace() {
        // $races = Race::all();
        return view('new_race');
            // ['races' => $races]);
    }

    public function viewAll() {
        $races = Race::all();
        return view('races', ['races' => $races]);
    }

    public function viewRace($id) {
        $race = Race::with('race_points')->where('id', $id)->get();
        return view('race', ['race' => $race]);
    }

    public function viewAllByUser($user_id) {
        $races = Race::where('user_id', '=', $user_id)->get();
        return view('user', ['races' => $races]);
    }

    public function create() {
        return view('new_race', []);
    }

    public function postCreate() {
        $race = new Race();
        $race->user_id = Auth::user()->id;
        $race->trail_id = Request::input('trail_id');
        $race->race_name = Request::input('race_name');
        $race->open_date = Request::input('open_date');
        $race->close_date = Request::input('close_date');
        $race->save();        

        return redirect('race/' . $race->id);
    }

    public function update($id) {
        $race = Race::find($id);
        return view('update_race',
            ['race' => $race]);
    }

    public function postUpdate($id) {
        $race = Race::find($id);
        $race->user_id = Request::input('user_id');
        $race->trail_id = Request::input('trail_id');
        $race->race_name = Request::input('race_name');
        $race->open_date = Request::input('open_date');
        $race->close_date = Request::input('close_date');
        $race->save();

        return redirect('races');
    }

    public function delete($id) {
        $race = Race::destroy($id);

        return redirect('races');
    }

    public function viewAllRaceComments($id) {
        return $this->hasMany('RaceComments');
    }

}