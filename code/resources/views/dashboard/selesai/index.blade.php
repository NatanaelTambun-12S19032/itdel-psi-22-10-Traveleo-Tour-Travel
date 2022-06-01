@extends('layouts.dashboard')
@section('title', 'Pesanan')

@section('content')

<div class="page-heading">
    <h3>Data Transaksi</h3>
</div>

<div class="card">
    <div class="container p-3">
        <form action="" method="GET">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Dari Tanggal</label>
                        <input type="date" name="start_date" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Sampai</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" name="cari" class="btn btn-secondary btn-block"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<!-- table bordered -->
<div class="material-card card">
    <div class="card-body">
        <h4 class="card-title">Data Transaksi</h4>
        <h6 class="card-subtitle">Data transaksi yang dilakukan di Rental Mobil ini</h6>
        <div class="table-responsive">
            <table id="multi_col_order" class="table table-striped border display" style="width:100%">
                <div class="mt-5">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk Mobil</th>
                            <th>Nama Mobil</th>
                            <th>No Pesanan</th>
                            <th>Tanggal Sewa</th>
                            <th>Tanggal Selesai</th>
                            <th>Jaminan</th>
                            <th>Status Peminjaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $key => $item)
                        <tr>
                            <td class="text-bold-500">{{ $key + 1 }}</td>
                            <td>{{ $item->cars->merk_mobil }}</td>
                            <td class="text-bold-500">{{ $item->cars->nama_mobil }}</td>
                            <td>{{ $item->no_pesanan }}</td>
                            <td>{{ $item->tgl_sewa }}</td>
                            <td>{{ $item->tgl_selesai }}</td>
                            <td>{{ $item->jaminan }}</td>
                            <td>{{ ( $item->status_peminjaman == 0 ) ? "Menunggu Dibayar" : (( $item->status_peminjaman == 1 )  ? "Sedang Proses Peminjaman" : "Selesai") }}</td>
                        </tr>

                        @empty

                        <tr>
                            <td class="text-bold-500" colspan="9">Tidak Ada Pesanan yang Terselesaikan</td>
                        </tr>

                        @endforelse
                    </tbody>
            </table>
        </div>
        <div class="float-right">
            <a class="btn btn-default" href="{{ route('cetaklaporan') }}" target="_blank"><i class="fa fa-print"></i> Cetak Laporan</a>
        </div>

        <div class="mt-3">
            {{ $data->links() }}
        </div>

    </div>
</div>
</div>
</section>
</div>

@endsection