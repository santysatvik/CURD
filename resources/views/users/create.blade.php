@extends('layouts.app')
@section('content')
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <label for="name">
            Name
        </label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <button>Submit</button>
    </form>
@endsection