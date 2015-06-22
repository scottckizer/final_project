<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Race extends Model implements AuthenticatableContract, CanResetPasswordContract {
    use Authenticatable, CanResetPassword;

    protected $table = 'race';
    protected $primaryKey = 'race_id';
    protected $fillable = ['race_name', 'open_date', 'close_date'];
    

    public function comments() {

        return $this->hasMany('App\Models\RaceComment');

    }

    public function user() {

        return $this->belongsTo('App\User');

    }

    public function races() {

        return $this->belongsTo('App\Models\RaceComment');

    }
    
}