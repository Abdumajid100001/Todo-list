@extends('layouts.app')

@section('title')
@endsection
@section('header')
@endsection
@section('content')
    <table class="table table-striped">
        <tr>
            <td>Title</td>
            <td>{{$task->title}}</td>
        </tr>
        <tr>
            <td>Description</td>
            <td>{{$task->description}}</td>
        </tr>
        <tr>
            <td>startTime</td>
            <td>{{$task->startTime}}</td>
        </tr>
        <tr>
            <td>endTime</td>
            <td>{{$task->endTime}}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{$task->status}}</td>
        </tr>
    </table>
    <a class="btn btn-primary" href="{{route('tasks.index')}}">Назад</a>
@endsection
