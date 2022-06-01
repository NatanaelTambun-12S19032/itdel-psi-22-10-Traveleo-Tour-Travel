<?php

namespace App\Http\Controllers\Dashboard\Supir;
// namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Supir;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Supir';
        $data['q'] = $request->get('q');
        $data['supir'] = Supir::where('nama', 'like', '%' . $data['q'] . '%')->get();
        return view('dashboard.supir.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add Supir';
        return view('dashboard.supir.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'usia' => 'required',
        ]);

        $supir = new Supir($request->all());
        $supir->save();
        return view('dashboard.supir.create')->with('success', 'Data supir berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Supir $supir)
    {
        $data['title'] = 'Supir';
        $data['supir'] = $supir;
        return view('dashboard.supir.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Supir $supir)
    {
        $data['title'] = 'Edit Supir';
        $data['supir'] = $supir;
        return view('dashboard.supir.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supir $supir)
    {
        $request->validate([
            'nama' => 'required',
            'usia' => 'required',
        ]);

        $supir->nama = $request->nama;
        $supir->usia = $request->usia;
        $supir->email = $request->email;
        $supir->jenis_kelamin = $request->jenis_kelamin;
        $supir->no_telepon = $request->no_telepon;
        $supir->alamat = $request->alamat;
        $supir->tgl_lahir = $request->tgl_lahir;
        $supir->save();
        return redirect()->back()->with('success', 'Data supir berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supir $supir)
    {
        $supir->delete();
        return redirect()->back()->with('success', 'Supir deleted successfully');
    }
}
