@extends('layouts.app')

@section('title')
@endsection
@section('header')
@endsection
@section('content')
    <table class=" table table-striped">
    <tr>
        <th>#</th>
        <th>Имя</th>
        <th>Описание</th>
        <th>Время начала</th>
        <th>Время окончание</th>
        <th>Статус</th>
        <th>Удалить</th>
        <th>Просмотрет</th>
        <th>Изменить</th>
    </tr>
        @foreach($tasks as $task)
<tr>

    <td>{{$loop->iteration}}</td>
    <td>{{$task->title}}</td>
    <td>{{$task->description}}</td>
    <td>{{$task->startTime}}</td>
    <td>{{$task->endTime}}</td>
    <td>{{$task->status}}</td>
    <td>
    <form action="{{route('tasks.destroy',$task)}}" method="post">
        @csrf
        @method('delete')
        <input class="btn btn-outline-warning" type="submit" value="Удалить">
    </form>
    </td>
    <td>
        <a class="btn btn-outline-secondary" href="{{route('tasks.show',$task)}}">Просмотрет</a>
    </td>
    <td>
        <a class="btn btn-outline-success" href="{{route('tasks.edit',$task)}}">Изменить</a>
    </td>
</tr>
        @endforeach
    </table>
    <a class="btn btn-google" href="{{route('tasks.create')}}">Добавить</a>
@endsection
