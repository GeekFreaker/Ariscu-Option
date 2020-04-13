@extends('layouts.app')

@section('content')


@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

@if(Session::has('remove_flash_message'))
    <div class="alert alert-warning">
        {{ Session::get('flash_message') }}
    </div>
@endif

@if(Session::has('edit_flash_message'))
    <div class="alert alert-info">
        {{ Session::get('flash_message') }}
    </div>
@endif

<div class="container">
    @if(isset($tasks))
      <p> The Search results for your query "<b> {{ $query }} </b>"" are :</p>
    <h2>Task details</h2>
    <table class="table table-striped">

        <thead>
            <tr>
                <th>User ID</th>
                <th>Created At</th>
                <th>Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{$task->user_id}}</td>
                <td>{{$task->created_at}}</td>
                <td>{{$task->name}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <a href="/tasks" class="btn btn-danger">  <i class="fa fa-back"></i> Main Page.</a>
    <a href="/tasks" class="btn btn-warning"> <i class="fa fa-edit"></i> Edit. </a>
  @else
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">A novel To-Do List <i style="color:red" class="fa fa-check"></i> </div>

                <div style="background:transparent !important" class="jumbotron">
                  <h1 style="color:blue">Welcome!</h1>
                  <p style="color:black">A novel to-do list on a user-per-user basis.</p>
</div>
            </div>
        </div>
    </div>
 @endif
</div>
@endsection
