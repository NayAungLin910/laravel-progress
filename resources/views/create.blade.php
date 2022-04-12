@extends('layout.master')

@section('content')
<form action="{{route('item.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Enter Name</label>
        <input type="text" class="form-control @error('name') border border-danger @enderror" name="name">
        @error('name')
            <small class="text text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Choose Image</label>
        <input type="file" class="form-control @error('image') border border-danger @enderror" name="image">
        @error('image')
            <small class="text text-danger">{{$message}}</small>
        @enderror
    </div>
    <br/>
    <input type="submit" value="Create" class="btn btn-sm btn-dark">
</form>
@endsection
