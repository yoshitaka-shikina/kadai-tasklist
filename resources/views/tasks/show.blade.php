@extends('layouts.app')

@section('content')

{{-- タスク編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}

{{-- メッセージ削除フォーム --}}
    {!! Form::model($task, ['route' => ['task.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection