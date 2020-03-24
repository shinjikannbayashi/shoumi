@extends('layouts.shoumi')
@section('title','編集画面')

@section('content')
<div class="container">

  @if (count($errors) > 0)
           <div class= "alert alert-danger" role="alert">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif

  <div class="row">
    <div class="col-md-8 mx-auto">
      <h1>編集画面</h1>
      <form action="{{ action('shoumicontroller@update') }}" method="post">
        {{csrf_field()}}
        <p>
        <label for="username">ユーザーネーム</label>
        <input type="text" name="username" id="username" size="100" value="{{ $shoumi_form->username }}">
      </p>
      <p>
        <label for="shouhinname">商品名</label>
        <input type="text" name="shouhin" id="shouhinname" size="100" value="{{ $shoumi_form->shouhin }}">
      </p>
      <br>
      <p>
        <label for="year">年</label>
        <input type="text" name="year" id="year" size="20" value="{{ $shoumi_form->year }}">
      </p>
      <p>
      <label for="month">月</lavel>
        <input type="text" name="month" id="month" size="10" value="{{ $shoumi_form->month }}">
      </p>
      <p>
        <label for="day">日</lavel>
          <input type="text" name="day" id="day" size="10" value="{{ $shoumi_form->day }}">
        </p>
        <input type="hidden" name="id" value="{{ $shoumi_form->id }}">
        <p>
          <input type="submit" value="更新">
        </p>
      </form>
    </div>
  </div>
</div>
@endsection
