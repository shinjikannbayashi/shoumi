@extends('layouts.shoumi')

@section('title','賞味期限')

@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-8 mx-auto">
       <h1>記入項目欄</h1>
       <form action="" method="POST">
         <p>
         <label for="username">ユーザーネーム</label>
         <input type="text" name="name" id="username" size="100" value={{$auths->name}}>
       </p>
       <p>
         <label for="shouhinname">商品名</label>
         <input type="text" name="shouhin" id="shouhinname" size="100">
       </p>
       <br>
       <p>
         <label for="year">年</label>
         <input type="text" name="year" id="year" size="20">
       </p>
       <p>
       <label for="month">月</lavel>
         <input type="text" name="month" id="month" size="10">
       </p>
       <p>
         <label for="day">日</lavel>
           <input type="text" name="day" id="day" size="10">
         </p>
         <p>
           <input type="submit" value="送信する">
         </p>


     </div>
   </div>
 </div>
 @endsection
