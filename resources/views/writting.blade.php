@extends('layouts.shoumi')

@section('title','賞味期限')

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
       <h1>記入項目欄</h1>
       <form action="{{ action('shoumicontroller@create') }}" method="POST">
         {{ csrf_field() }}
         <p>
         <label for="username">ユーザーネーム</label>
         <input type="text" name="username" id="username" size="100" value={{ $auths->name }}>
       </p>
       <p>
         <label for="shouhinname">商品名</label>
         <input type="text" name="shouhin" id="shouhinname" size="100" value="{{ old('shouhin') }}">
       </p>
       <br>
       <p>
         <label for="year">年</label>
         <input type="text" name="year" id="year" size="20" value="{{ old('year') }}">
       </p>
       <p>
       <label for="month">月</lavel>
         <input type="text" name="month" id="month" size="10" value="{{ old('month') }}">
       </p>
       <p>
         <label for="day">日</lavel>
           <input type="text" name="day" id="day" size="10" value="{{ old('day') }}">
         </p>
         <p>
           <input type="submit" value="送信する">
         </p>
     </div>
   </div>
 </div>
 @endsection
