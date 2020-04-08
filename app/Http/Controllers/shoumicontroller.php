<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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

    $date = \date('Y-n-j',strtotime('+1 week'));

    $date2 = \date('Y-n-j');

    return view('index', ['input'=> $input , 'date'=>$date, 'date2'=>$date2 ]);
  }

  public function index(Request $request)
  {
    $cond_shouhin = $request->cond_shouhin;
    if ($cond_shouhin != '') {
      $input = shoumi::where('shouhin', $cond_shouhin)->get();
    }else{
      $input = shoumi::all();
    }

    $date = \date('Y-n-j',strtotime('+1 week'));

    $date2 = \date('Y-n-j');

    return view ('index', ['input' => $input, 'cond_shouhin' => $cond_shouhin, 'date'=>$date, 'date2'=>$date2]);
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

   return redirect('shoumi/index');
 }

 public function delete(Request $request)
 {
   $shoumi = shoumi::find($request->id);

   $shoumi->delete();

   return redirect('shoumi/index');

 }

}
