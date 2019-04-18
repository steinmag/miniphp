@extends('layouts.app')

@section('content')
<h1>My users</h1>
@foreach ($users as $user)
    <div class="card mt-2 flex" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{ $user->name }}</h5>
        <p class="card-text">{{ $user->email }}</p>
        <a href="#" class="btn btn-primary">More info</a>
      </div>
    </div>
@endforeach
@endsection
