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
  }

  public function create(Request $request)
  {

    $this->validate($request, shoumi::$rules);

    $shoumi = new shoumi;

    $form = $request->all();
    unset($form['_token']);

    $shoumi->fill($form);
    $shoumi->save();

    $input = shoumi::all();

    return view('index', ['input'=> $input,]);
  }

  public function get(Request $request)
  {
    $cond_shouhin = $request->cond_shouhin;
    if ($cond_shouhin != '') {
      $input = shoumi::where('shouhin', $cond_shouhin)->get();
    }else{
      $input = shoumi::all();
    }
    return view ('index', ['input' => $input, 'cond_shouhin' => $cond_shouhin]);
  }

  public function edit(Request $request)
  {
  $shoumi = shoumi::find($request->id);
  if (empty($shoumi)){
    abort(404);
  }
  return view('edit',['shoumi_form' => $shoumi]);
}

public function update(Request $request)
{
  $this->validate($request, shoumi::$rules);

  $shoumi = shoumi::find($request->id);

  $shoumi_form = $request->all();
  unset($shoumi_form['_token']);

  $shoumi->fill($shoumi_form)->save();

  return view ('shoumi/create');
}

public function delete(Request $request)
{
$shoumi = shoumi::find($request->id);

$shoumi->delete();

return view('shoumi/create');
}

}
