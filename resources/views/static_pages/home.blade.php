@extends('layouts.default')
@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('statuses._status_form')
                </section>
                <h4>微博列表</h4>
                <hr>
                @include('statuses._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info',['user'=>Auth::user()])
                </section>
                <section class="stats mt-2">
                    @include('shared._stats',['user'=>Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="jumbotron">
            <h1>Gene Laravel</h1>
            <p class="lead">
                您现在看到的是大胖纸Gene的测试Laravel Demo
            </p>
            <p>
                <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
            </p>
        </div>
    @endif

@stop
