@extends('layouts.master')


@section('title', 'dashboard')

@section('content')
    <div class="jumbotron">
        <div class="create bg-white p-5 m-3">
            <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <h4 class="text-center">EDIT WHAT TO DO</h4>
                <hr>
                <p>Title</p>
                <p>
                    <input type="text" name="title" id="title" value="{{ $task->title }}" required>
                </p>
                <p>Task</p>
                <p>
                    <textarea name="task" id="task" rows="5">{{ $task->task }}</textarea>
                    <input type="hidden" name="id" id="id" value="{{ $task->id }}">
                </p>
                <p>Time</p>
                <p>
                    <input type="date" name="date" id="date" value="{{ $task->created_at }}" required>
                </p>
                <p>
                    <button class="btn btn-warning">ADD</button>
                </p>
            </form>
        </div>
    </div>
@endsection
