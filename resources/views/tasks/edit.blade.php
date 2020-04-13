@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Edit Task - {{$task->name}} </h1>
  <input type="text" name="" value="{{$task->name}}">

  <button type="submit" id="save-task-{{ $task->id }}" class="btn btn-info md">
    <i class="fa fa-btn fa-save"></i>Save
  </button>
  <hr />

  <p class="lead">Edit this task below. Go <a href="{{url('/tasks')}}">back</a> to all tasks.</p>

<div class="container">
@stop
