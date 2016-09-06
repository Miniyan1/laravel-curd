@extends('layout.admin')
@section('content')
    <div class="row">
        <form action="{{route('postLogin')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="first_name" placeholder="Email" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="last_name" placeholder="Password" >
            </div>

            <button type="submit" class="btn btn-default">Login</button>
        </form>
    </div>
    @stop