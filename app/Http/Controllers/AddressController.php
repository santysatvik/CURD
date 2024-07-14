<?php

namespace App\Http\Controllers;
use App\Http\Requests\AddressRequest;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        //
        return view ('users.addresses.create',[
            'user'=>$user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddressRequest $request,User $user)
    {
        $user->addresses()->create($request->validated());
        return redirect()->route('users.show',$user);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user,Address $address)
    {
        return view('users.addresses.edit',['user'=>$user,'address'=>$address]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressRequest $request,User $user,Address $address)
    {
        $address->update($request->validated());
        return redirect()->route('users.show',$user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user,Address $address)
    {
        //
        $address->delete();
        return redirect()->route('users.show',$user);
    }
}
