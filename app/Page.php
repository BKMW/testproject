<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  /*========RELATION BETWEEN TABLE ONE TO MANY (PAGES->NOTES)=================*/
  public function notes(){
    return $this->hasMany(Note::class);

  }
}
