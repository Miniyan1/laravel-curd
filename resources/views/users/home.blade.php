@extends('layout.admin')

@section('content')
  <div class="row">
      <div class="container">
          <div class="card card-block"></div>
      </div>
      @foreach($users as $user)
          <div class="card card-block" style="border: double darkgray">
          <h4 class="card-title">{{$user->first_name." " . $user->last_name}}</h4>

                  {{$user->first_name }}<br>
                  {{$user->last_name }}
                  {{$user->address }}
                  {{$user->phone }}
                  {{$user->email }}

          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
      </div><br>
      @endforeach
      {{$users->links()}}
  </div>
@endsection