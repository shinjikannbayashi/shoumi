@extends('layouts.shoumi')

@section('title','登録済みデータ')

@section('content')
<div class="container">
        <div class="row">
            <h2>一覧画面</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('shoumicontroller@add') }}" role="button" class="btn btn-primary">新規作成</a>
              </div>
              <div class="col-md-8">
                <form action="{{ action('shoumicontroller@index') }}" method="post">
                  <div class="form-group row">
                    <label class="col-md-2" for="name">商品名</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="name" name="cond_shouhin">
                      </div>
                      <div class="col-md-2">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="検索する">
                      </div>
                    </div>
                  </form>
                </div>
            </div>
                <div class="row">
                  <div class="col-md-12 mx-auto">
                    <div class="row">
                      <table class="table table-dark" >
                        <thead>
                          <tr>
                            <th width="20%">ユーザー名</th>
                            <th width="50%">商品名</th>
                            <th width="10%">年</th>
                            <th width="10%">月</th>
                            <th width="10%">日</th>
                            <th width="20%">差分</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($input as $shoumi)
                                <tr>
                                    <th>{{ $shoumi->username }}</th>
                                    <td>{{ str_limit($shoumi->shouhin, 100) }}</td>
                                    <td>{{ str_limit($shoumi->year, 100) }}</td>
                                    <td>{{ str_limit($shoumi->month, 100) }}</td>
                                    <td>{{ str_limit($shoumi->day, 100) }}</td>
                                    @if($shoumi->year."-".$shoumi->month."-".$shoumi->day == $date)
                                    <td>1週間前です。</td>
                                    @else
                                    <td></td>
                                    @endif
                                    <td>
                                      <div>
                                        <a href="{{ action('shoumicontroller@edit',['id' => $shoumi->id]) }}">編集</a>
                                      </div>
                                      <div>
                                        <a href="{{ action('shoumicontroller@delete', ['id' => $shoumi->id])}}">削除</a>
                                      </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
@endsection
