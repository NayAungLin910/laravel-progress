@extends('layout.master')

@section('content')
    <div>
        <a href="{{route('tag.create')}}" class="btn btn-sm btn-success">Create</a>
    </div>
    <table class="table table-striped">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Options</td>
        </tr>
        @foreach($tags as $t)
            <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->name}}</td>
                <td>
                    <a href="{{route('tag.edit', $t->id)}}" class="btn btn-sm btn-success">Update</a>
                    <form action="{{route('tag.destroy', $t->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                    </form> 
                </td>
            </tr>
        @endforeach
    </table>
@endsection