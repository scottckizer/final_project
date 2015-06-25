<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Race_Points extends Model implements AuthenticatableContract, CanResetPasswordContract {
    use Authenticatable, CanResetPassword;

    protected $table = 'race_points';
    protected $primaryKey = 'id';
    protected $fillable = ['race_name', 'open_date', 'close_date'];
    

    public function race_points() {

        return $this->hasMany('App\Models\Race_Points');

    }

    public function race() {

        return $this->belongsTo('App\Race');

    }

    public function races() {

        return $this->belongsTo('App\Models\RaceComment');

    }
    
}