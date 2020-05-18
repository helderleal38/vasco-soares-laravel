<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

  /**
  * Un role peut avoir plusieurs utilisateurs.
  */
  public function users(){
    return $this->belongsToMany(User::class);
  }

}
