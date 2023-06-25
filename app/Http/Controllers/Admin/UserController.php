<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Crypt::encrypt($request->password)
        ]);

        return redirect()->route('user')->with(['success' => 'berhasil di buat']);
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
    public function edit(string $id)
    {
        //get post by ID
        $passwordUser = User::where('id', '=', $id)->first()->password;
        $user = User::findOrFail($id);
        // $pass = "12345";
        // $encryptpass = Crypt::encrypt($pass);
        // $hasilpass = Crypt::decrypt($passwordUser);
        
        dd($user);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required'
        ]);
        
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Crypt::encrypt($request->password)
        ]);

        dd($user);

        return redirect()->route('user')->with(['success' => 'user berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
