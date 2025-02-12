<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = [
            ['name' => 'Pemain', 'url' => route('pemain.index')]
        ];
        $pemain = Pemain::all();
        return view('Dashboard.pemain.index', compact('breadcrumb','pemain'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemain $pemain)
    {
        $breadcrumb = [
            ['name' => 'Pemain', 'url' => route('pemain.index')],
            ['name' => 'Detail Pemain', 'url' => route('pemain.show', $pemain->id)]
        ];
        return view('Dashboard.pemain.show', compact('pemain','breadcrumb'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemain $pemain)
    {
        $breadcrumb = [
            ['name' => 'Pemain', 'url' => route('pemain.index')],
            ['name' => 'Edit Pemain', 'url' => route('pemain.edit', $pemain->id)]
        ];
        return view('Dashboard.pemain.edit', compact('pemain','breadcrumb'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemain $pemain)
    {
        $pemain->update([
            'name' => $request->name,
            'age' => $request->age,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'game' => $request->game,
            'skor' => $request->skor,
        ]);

        return redirect()->route('pemain.index')->with('success', 'Berhasil mengubah data pemain');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemain $pemain)
    {
        $pemain->delete();
        return redirect()->route('pemain.index')->with('success', 'Berhasil menghapus data pemain');
    }
}
