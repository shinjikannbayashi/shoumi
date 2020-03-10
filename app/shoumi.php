<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoumi extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    'shouhin' => 'required',
    'year' => 'bail|required|integer|numeric',
    'month' => 'bail|required|integer|numeric|between:1,12',
    'day' => 'bail|required|integer|numeric|between:1,31',

  );
    //
}
