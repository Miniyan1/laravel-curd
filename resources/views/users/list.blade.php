@extends('layout.admin')
@section('content')

    <div class="row">

            {{csrf_field()}}
        <table class="table">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
@foreach($users as $user)

            <tr>
                <td>{{$user->first_name }}</td>
                <td>{{$user->last_name }}</td>
                <td>{{$user->address }}</td>
                <td>{{$user->phone }}</td>
                <td>{{$user->email }}</td>
                <td><a href="{{route('editUser',$user->id)}}">Edit</a>
                    <a class="btn btn-danger delete-user" data-id="{{$user->id}}">Delete</a> </td>
            </tr>
@endforeach
        </table>
        {{$users->links()}}
    </div>

@stop
