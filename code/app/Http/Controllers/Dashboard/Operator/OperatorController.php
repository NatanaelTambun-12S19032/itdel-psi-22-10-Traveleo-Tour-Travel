<?php

namespace App\Http\Controllers\Dashboard\Operator;

use App\Http\Controllers\Controller;
use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Operator';
        $data['q'] = $request->get('q');
        $data['operator'] = Operator::where('nama', 'like', '%' . $data['q'] . '%')->get();
        return view('dashboard.operator.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add Operator';
        return view('dashboard.operator.create', $data);
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

        $operator = new Operator($request->all());
        $operator->save();
        return view('dashboard.operator.create')->with('success', 'Data operator berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Operator $operator)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Operator $operator)
    {
        $data['title'] = 'Edit Operator';
        $data['operator'] = $operator;
        return view('dashboard.operator.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operator $operator)
    {
        $request->validate([
            'nama' => 'required',
            'usia' => 'required',
        ]);

        $operator->nama = $request->nama;
        $operator->usia = $request->usia;
        $operator->email = $request->email;
        $operator->jenis_kelamin = $request->jenis_kelamin;
        $operator->no_telepon = $request->no_telepon;
        $operator->alamat = $request->alamat;
        $operator->tgl_lahir = $request->tgl_lahir;
        $operator->tgl_masuk = $request->tgl_masuk;
        $operator->save();
        return redirect()->back()->with('success', 'Data operator berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operator $operator)
    {
        $operator->delete();
        return redirect()->back()->with('success', 'Operator deleted successfully');
    }
}
