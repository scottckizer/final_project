<?php namespace App\Http\Controllers;

use Request;
use App\Models\Race;

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
        // $races = Race::all();
        return view('races');
            // ['races' => $races]);
    }

    public function viewRace($race_id) {
        $race = Race::find($race_id);
        return view('race',
            ['race' => $race]);
    }

    public function viewAllByUser($user_id) {
        $races = Race::where('user_id', '=', $user_id)->get();
        return view('user',
            ['races' => $races]);
    }

    public function create() {
        return view('new_race', []);
    }

    public function postCreate() {
        $race = new Race();
        $race->race_name = Request::input('race_name');
        $race->open_date = Request::input('open_date');
        $race->close_date = Request::input('close_date');
        $race->save();

        return redirect('race');
    }

    public function update($race_id) {
        $race = Race::find($race_id);
        return view('update_race',
            ['race' => $race]);
    }

    public function postUpdate($race_id) {
        $race = Race::find($race_id);
        $race->user_id = Request::input('user_id');
        $race->race_title = Request::input('race_title');
        $race->race_url = Request::input('race_url');
        $race->save();

        return redirect('race');
    }

    public function delete($race_id) {
        $race = Race::find($race_id);
        $race->delete($race_id);

        return redirect('race');
    }

    public function viewAllRaceComments($id) {
        return $this->hasMany('RaceComments');
    }

}