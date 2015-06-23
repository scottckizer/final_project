<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Trail extends Model implements AuthenticatableContract, CanResetPasswordContract {
    use Authenticatable, CanResetPassword;

    protected $table = 'trail';
    protected $primaryKey = 'id';
    protected $fillable = ['trail_name'];
    

    public function comments() {

        return $this->hasMany('App\Models\TrailComment');

    }

    public function user() {

        return $this->belongsTo('App\User');

    }

    public function trails() {

        return $this->belongsTo('App\Models\RaceComment');

    }
    
}