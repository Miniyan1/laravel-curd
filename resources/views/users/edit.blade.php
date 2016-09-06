@extends('layout.admin')
@section('content')
    <div class="row">
        <form action="{{route('Update',$users->id)}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">FirstName</label>
                <input type="text" class="form-control" name="first_name" placeholder="First Name"value="{{ $users->first_name}}" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">LastName</label>
                <input type="TEXT" class="form-control" name="last_name" placeholder="Last Name" value="{{ $users->last_name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $users->address}}">
            </div><div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $users->email}}">
            </div>><div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="email" placeholder="password" value="{{ $users->password}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $users->phone}}">

            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@stop