<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  /*========RELATION BETWEEN TABLE MANY TO ONE (NOTES->PAGES)=================*/
  public function page(){
    return $this->belongsTo(Page::class);
  }
}
