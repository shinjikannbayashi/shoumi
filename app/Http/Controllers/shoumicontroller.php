<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\shoumi;

class shoumicontroller extends Controller
{
  public function add()
  {
    $auths = Auth::user();

    return view('writting',[ 'auths' => $auths ]);
  } //
  public function create(Request $request)
  {

    $this->validate($request, shoumi::$rules);

    return view('index');
  }

}
