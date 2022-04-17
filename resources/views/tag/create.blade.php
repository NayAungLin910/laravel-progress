@extends('layout.master')

@section('content')
    <form action="{{route('tag.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Tag Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <input type="submit" value="Create" class="btn btn-sm btn-danger">
    </form>
@endsection