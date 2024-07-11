@extends('layouts.app')
@section('content')
    <form action="{{route('users.update',$user)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$user->name}}">
        <label for="email">Name</label>
        <input type="email" name="email" id="email" value="{{$user->email}}">
        <button>Submit</button>
    </form>
@endsection