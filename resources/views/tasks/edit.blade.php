@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <div class="prose ml-4">
        <h2> {!! nl2br(e($task->title)) !!} の編集ページ</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('tasks.update', $task->id) }}" class="w-1/2">
            @csrf
            @method('PUT')

                <div class="form-control my-4">
                    <label for="id" class="label">
                        <span class="label-text">ID：{{ $task->id }}</span>
                    </label>
                    <label for="title" class="label">
                        <span class="label-text">タスク:</span>
                    </label>
                    <input type="text" name="title" value="{{ $task->title }}" class="input input-bordered w-full">
                    <label for="content" class="label">
                        <span class="label-text">タスク内容:</span>
                    </label>
                    <input type="text" name="content" value="{{ $task->content }}" class="input input-bordered w-full">
                    <label for="status" class="label">
                        <span class="label-text">ステータス:</span>
                    </label>
                    <input type="text" name="status" value="{{ $task->status }}" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-outline">更新</button>
        </form>
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