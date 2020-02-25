@extends('layouts.shoumi')

@section('title','登録済みデータ')

@section('content')
<div class="container">
        <div class="row">
            <h2>ニュース一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('shoumicontroller@add') }}" role="button" class="btn btn-primary">新規作成</a>
            
