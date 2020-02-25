<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoumi extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    'shouhin' => 'required',
    'year' => 'required',
    'month' => 'required',
    'day' => 'required',

  );
    //
}
