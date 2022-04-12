@extends('layout.master')

@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>  
@endif
<table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $i)
                            <tr>
                            <td>{{$i->id}}</td>
                            <td>{{$i->name}}</td>
                            <td>
                                <img src="{{$i->image}}" alt="" width="100px" style="border-radius:20px;">
                            </td>
                            <td>
                                <a href="{{route('item.edit', $i->id)}}" class="badge badge-warning">Update</a>
                                <a href="{{route('item.delete', $i->id)}}" class="badge badge-danger">Delete</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    {{$items->links()}}
@endsection