@extends('layout.master')

@section('content')
    <div>
        <a href="{{route('tag.index')}}" class="btn btn-sm btn-success">All</a>
    </div>
    <form action="{{route('tag.update', $tag->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Tag Name</label>
            <input type="text" name="name" class="form-control" value="{{$tag->name}}">
        </div>
        <input type="submit" value="Update" class="btn btn-sm btn-danger">
    </form>
@endsection