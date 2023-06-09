<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubBiaya;

class RincianBiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rincianBiayas = SubBiaya::all();

        return view('admin.rincianbiaya.index', ['rincianbiaya' => $rincianBiayas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rincianbiaya.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>  'required',
            'biaya' => 'required',
        ]);

        SubBiaya::create([
            'name' => $request->name,
            'biaya' => $request->biaya,
        ]);

        return redirect()->route('rincianbiaya')->with(['success' => 'berhasil di buat']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
