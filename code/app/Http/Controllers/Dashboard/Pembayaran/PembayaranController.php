<?php

namespace App\Http\Controllers\Dashboard\Pembayaran;

use App\Http\Controllers\Controller;

use App\Models\Cars;
use App\Models\Merk;
use App\Models\Pesanan;
use Illuminate\Http\Request;


class PembayaranController extends Controller
{
    public function index()
    {
        if ($_GET['method'] == 'Upload') {
            $id = $_GET['id'];
            $data = Pesanan::find($id);
            $data->status_pembayaran = '4';
            $data->save();

            return view('dashboard.Pembayaran.index', ['id' => $id]);
        } else if ($_GET['method'] == 'Cash') {
            $id = $_GET['id'];
            $data = Pesanan::find($id);
            $data->status_pembayaran = '5';
            $data->save();

            return redirect()->back()->with('success', 'Berhasil Mengubah Metode Pembayaran');
        } else {
            $id = $_GET['id'];
            $data = Pesanan::with('user:id,name', 'cars:id,nama_mobil,merk_mobil,gambar_mobil,harga_sewa')->where('id', $id)->first();

            return view('dashboard.riwayat_pesanan.detail', compact('data'));
        }
    }

    public function store(Request  $request)
    {
        $id = $_GET['id'];
        $data = Pesanan::find($id);
        $data->status_pembayaran = '1';
        $data->status_peminjaman = '1';
        if ($request->bukti_pembayaran !== null) {
            $bukti = $request->bukti_pembayaran->store('/gambar_mobil', 'public');
            $data->bukti_pembayaran = pathinfo($bukti)['basename'];
        }

        $data->save();

        return redirect()->back()->with('success', 'Berhasil Menambahkan Data Mobil');
    }
}
