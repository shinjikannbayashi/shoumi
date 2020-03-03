<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoumi extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    'shouhin' => 'required',
    'year' => 'required|digits:4',
    'month' => 'required|digits:2',
    'day' => 'required',

  );
    //
}
