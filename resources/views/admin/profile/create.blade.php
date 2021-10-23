<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <title>編集</title>
    </head>
    <body>
        <h1>プロフィール編集画面</h1>
        
        {{-- layouts/profile.blade.phpを読み込む --}}
        @extends('layouts.profile')
        
        {{-- profile.blade.phpの@yield('title')に'プロフィール'を埋め込む --}}
        @section('title', 'プロフィール')
        
        {{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
        @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>プロフィール</h2>
                    <from action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/from-data">
                        
                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <div class="from-group row">
                            <label class="col-md-2">氏名</label>
                            <div class="col-md-10">
                                <input type="text" class="from-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="from-group row">
                            <label class="col-md-2">性別</label>
                            <div class="col-md-10">
                                <input type="text" class="from-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="from-group row">
                            <label class="col-md-2">趣味</label>
                            <div class="col-md-10">
                                <input type="text" class="from-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="from-group row">
                            <label class="col-md-2">自己紹介欄</label>
                            <div class="col-md-10">
                                <textarea class="from-control" name="body" rows="20">{{ old('body') }}</textarea>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="更新">
                    </from>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>