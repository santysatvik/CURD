@extends('layouts.app')
@section('content')
<h1>{{$user->name}}</h1>
<form action="{{route("users.addresses.store",$user)}}" method="POST">
    @csrf
    <label for="address">New Adress</label>
    <textarea name="address" id="address" cols="30" rows="10"></textarea>
    <button>Submit</button>
</form>
    
@endsection