@extends('layouts.master')

@section('title', 'Index')

@section('sidebar')
    @parent

@stop

@section('content')
    <h2>Edit Project</h2>

    {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
    @include('projects/partials/_form', ['submit_text' => 'Edit Project'])
    {!! Form::close() !!}

@stop