@extends('layouts.app')
@section('content')
<h1>{{$user->name}}</h1>
<ul>
    @foreach ($user->addresses as $address)
      <div>
        <li>{{$address->address}}</li> 
        <a href="{{route('users.addresses.edit',['user' => $user, 'address' => $address])}}">Edit</a>
        <form action="{{ route('users.addresses.destroy', ['user' => $user, 'address' => $address]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Delete Address</button>
      </form>
      </div>
        
    @endforeach
</ul>
<a href="{{route("users.addresses.create",$user)}}">To add Address</a>
@endsection