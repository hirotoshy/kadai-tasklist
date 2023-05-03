@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>{{ $task->title }} のタスク詳細</h2>
    </div>

    <table class="table w-full my-4">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->title }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    
    {{-- メッセージ編集ページへのリンク --}}
    <a class="btn btn-outline" href="{{ route('tasks.edit', $task->id) }}">このメッセージを編集</a>
    
@endsection