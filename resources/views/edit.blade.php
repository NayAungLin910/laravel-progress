@extends('layout.master')

@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
<form action="{{route('item.update', $item->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">Enter Name</label>
        <input value='{{$item->name}}' type="text" class="form-control @error('name') border border-danger @enderror" name="name">
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
        <img src="{{asset($item->image)}}" width="150px" style="border-radius:20px;" alt="">
    </div>
    <br/>
    <input type="submit" value="Update" class="btn btn-sm btn-dark">
</form>
@endsection
