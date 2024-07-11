@extends('layouts.app')

@section('content')
  <form action="{{route('users.addresses.update',['user' => $user, 'address' => $address])}}" method="POST">
    @csrf
    @method('PUT')
    <label for="address">Address</label>
    <textarea name="address" id="address" cols="30" rows="10">{{$address->address}}</textarea>
    <button>Submit</button>
  </form>

    
@endsection