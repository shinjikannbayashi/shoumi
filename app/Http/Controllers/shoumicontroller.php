<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class shoumicontroller extends Controller
{
  public function add()
  {
    $auths = Auth::user();

    return view('writting',[ 'auths' => $auths ]);
  } //
}
