@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="">
            <div class="">
                {{-- 投稿一覧 --}}
                @include('tasks.tasks')
            </div>
        </div>
    @else
        <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
            <div class="hero-content text-center my-10">
                <div class="max-w-md mb-10">
                    <h2>タスク管理アプリへようこそ</h2>
                    {{-- ユーザ登録ページへのリンク --}}
                    <a class="btn btn-primary btn-lg normal-case" href="{{ route('register') }}">新規登録する</a>
                </div>
            </div>
        </div>
    @endif
@endsection