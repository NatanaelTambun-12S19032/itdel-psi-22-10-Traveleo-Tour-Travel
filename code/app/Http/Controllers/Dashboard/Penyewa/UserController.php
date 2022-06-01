<?php

namespace App\Http\Controllers\Dashboard\Penyewa;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::where('role', 0)->paginate(10);

        return view('dashboard.penyewa.index', compact('data'));
    }
    public function edit($id)
    {
        $data = User::where('id', $id)->first();

        return view('dashboard.penyewa.edit', compact('data'));
    }
    public function destroy(User $item)
    {
        $item->delete();
        return redirect()->back()->with('success', 'Penyewa deleted successfully');
    }
    public function update(Request $request, User $item)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
        ]);

        $item->nama_lengkap = $request->nama_lengkap;
        $item->email = $request->email;
        $item->no_telephone = $request->no_telephone;
        $item->alamat = $request->alamat;
        $item->save();
        return redirect()->back()->with('success', 'Data penyewa berhasil diubah');
    }
}
