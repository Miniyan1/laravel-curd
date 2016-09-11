@extends('layout.admin')
@section('content')
    <div class="row">
        @if (Session::has('message'))

                {!! Session::get('message')  !!}


            @endif
        <form action="{{route('postLogin')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" >
            </div>

            <button type="submit" class="btn btn-info">Login</button>
        </form>
    </div>
    @stop