@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h1>Index</h1>
        <button class="btn btn-success"><a href="{{route('admin.projects.create')}}">Create new</a></button>
        @foreach($projects as $project)
        <div class="col-4 col-md-4 text-center g-2">
            <div class="img-cont">
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{$project->title}}">
            </div>
            <div class="">
                <h2 class="fs-4">
                    {{ $project->title }}
                </h2>
                <p>Description: {{ $project->body }}</p>
                <p><a href="{{$project->url}}">Link to projeck</a></p>
                <a class="btn btn-primary" href="{{route('admin.projects.show', $project)}}">Show more</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection