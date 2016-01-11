@extends('layouts.master')

@section('title', 'Index')

@section('sidebar')
  @parent

@stop

@section('content')
    <h2>
        {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
        {{ $task->name }}
    </h2>

    {{ $task->description }}
@stop
