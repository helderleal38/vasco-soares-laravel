<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'scoolName', 'year', 'matter', 'responsible', 'address', 'user_id',
    ];

    /**
  * one student is one user.
  */
  public function users(){
    return $this->belongsTo(User::class);
  }
}
