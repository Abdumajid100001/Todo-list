@extends('layouts.app')

@section('title')
    Task create
@endsection
@section('header')
    Добавление
@endsection
@section('content')
<form action="{{route('tasks.store')}}" method="post">
    @csrf
    <label>Имя</label>
    <input type="text" name="title" class="form-control">
    <label>Описание</label>
    <textarea class="form-control" name="description" cols="30" rows="10">

    </textarea>
    <label>StartTime</label>
    <input class="form-control" type="date" name="startTime">
    <label>EndTime</label>
    <input class="form-control" type="date" name="endTime">
    <label>Status</label>
    <select class="form-control" name="status">
        <option value="doing">In progres</option>
        <option value="done">Done</option>
        <option value="not started">Not started</option>
    </select><br>
    <input type="submit" class="btn btn-outline-primary" value="Добавить">
</form>
@endsection
