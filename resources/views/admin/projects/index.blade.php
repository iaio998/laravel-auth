@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h1>Index</h1>
        <button class="btn btn-success"><a href="{{route('admin.projects.create')}}">Create new</a></button>
        <div class="col-12">
            <table class="my-3">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Url</th>
                    <th>Actions</th>
                </tr>
                @foreach($projects as $project)
                <tr>
                    <td>
                        {{$project->title}}
                    </td>
                    <td>
                        {{$project->body}}
                    </td>
                    <td>
                        <div class="img-cont"><img src="{{ asset('storage/' . $project->image) }}"
                                alt="{{$project->title}}"></div>
                    </td>
                    <td>
                        <a href="{{$project->url}}">Link to projeck</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.projects.show', $project)}}">Show</a>
                        <a class="btn btn-primary" href="{{route('admin.projects.edit', $project)}}">Edit</a>
                        <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection