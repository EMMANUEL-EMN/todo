@extends('layouts.master')


@section('title', 'dashboard')

@section('content')
    <div class="jumbotron">
        <div class="dashboard">
            <div class="add">
                <button class="text-right btn btn-success" id="tbtn">ADD TASK</button>
                <button class="text-right btn btn-success" id="vbtn">VIEW TASKS</button>
                <a href="/logout">
                    <button class="text-right btn btn-warning" id="lg">LOGOUT</button>
                </a>
            </div>
            <div id="addTask1">
                @include('dashboard.add')
            </div>
            <div class="display bg-white p-5 m-3">
                <h4 class="text-center">TASKS TO DO</h4>
                <center>
                    <div class="table-responsive-sm">
                        <table class="table-primary table-bordered table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Task</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($task as $t)
                                <tr>
                                    <td>{{ $t->id }}</td>
                                    <td>{{ $t->title }}</td>
                                    <td>{{ $t->task }}</td>
                                    <td>{{ $t->created_at }}</td>
                                    <td>
                                        <a href="/delete/{{ $t->id }}">
                                            <i class="fa fa-trash-alt" style="color: red"></i>
                                        </a>
                                        <a href="/edit/{{ $t->id }}">
                                            <i class="fa fa-edit" style="color: green"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </center>
            </div>
        </div>
    </div>
@endsection
