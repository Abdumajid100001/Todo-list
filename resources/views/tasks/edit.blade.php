@extends('layouts.app')
@section('title')
    Edit
@endsection
@section('header')
    Edit
@endsection
@section('content')
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
        <title>Document</title>
    </head>
    <body>
    <div class="container col-md-6">

        <form action="{{route('tasks.update', $task)}}" method="post">
            @csrf
            @method('PUT')
            <label for="">title</label>
            <input type="text" class="form-control" name="title" value="{{$task->title}}" id=""><br>
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" value="{{$task->description}}"><br>
            <label for="">startTime</label>
            <input type="text" class="form-control" name="startTime" value="{{$task->startTime}}" id=""><br>
            <label for="">endTime</label>
            <input type="text" class="form-control" name="endTime" value="{{$task->endTime}}" id=""><br>
            <label>Status</label>
            <select class="form-control" name="status" value="{{$task->status}}" id="">
                <option>Done</option>
                <option>doing</option>
                <option>Not started</option>
            </select><br>
            <input class="btn btn-outline-primary" type="submit" value="Send">
        </form>
    </div>
    </body>
    </html>

@endsection
