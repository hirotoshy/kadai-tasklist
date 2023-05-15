<div class="mt-4">
    @if (isset($tasks))
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>投稿者id</th>
                    <th>タスク</th>
                    <th>タスク内容</th>
                    <th>ステータス</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{!! nl2br(e($task->user->name)) !!}</td>
                    <td>{!! nl2br(e($task->title)) !!}</td>
                    <td>{!! nl2br(e($task->content)) !!}</td>
                    <td>{!! nl2br(e($task->status)) !!}</td>
                    <td>                           
                    @if (Auth::id() == $task->user_id)
                                {{-- 投稿削除ボタンのフォーム --}}
                            <div>
                                <a href="{{ route('tasks.edit', $task->id) }}">
                                    <button type="submit" class="btn btn-sm normal-case" >編集</button>
                                </a>
                    </td>
                    <td> 
                                <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-error btn-sm normal-case" >消去</button>
                                </form>
                            </div>
                    @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- ページネーションのリンク --}}
        {{ $tasks->links() }}
    @endif
</div>