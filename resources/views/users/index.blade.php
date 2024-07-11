@extends('layouts.app')
@section('content')
<h3><a href="{{route('users.create')}}">To create </a></h3>
<div>
    @foreach ($users as $user)
    <li><a href="{{route('users.show',$user)}}">{{$user->name}}</a></li>  
      <h3>{{$user->email}}</h3>
      <form action="{{route('users.destroy',$user)}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete</button>
      </form>
      <a href="{{route('users.edit',$user)}}">Edit</a>
    </div>  
      <hr>
    @endforeach
</div>
    r
@endsection