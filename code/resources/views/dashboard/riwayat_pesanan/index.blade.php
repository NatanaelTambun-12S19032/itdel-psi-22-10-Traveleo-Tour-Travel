@extends('layouts.dashboard')
@section('title', 'Riwayat Pesanan')

@section('content')
<style>
    #opendropdown:hover #itemdropdown {
        display: contents;
    }
</style>

<div class="page-heading">
    <h3>Riwayat Pesanan</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Merk Mobil</th>
                                    <th>Nama Mobil</th>
                                    <th>No Pesanan</th>
                                    <th>Tanggal Sewa</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Jaminan</th>
                                    <th>Status Pembayaran</th>
                                    <th>Bukti Transfer</th>
                                    <th>Status Peminjaman</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                <tr>
                                    <td class="text-bold-500">{{ $key + 1 }}</td>
                                    <td>{{ $item->cars->merk_mobil }}</td>
                                    <td class="text-bold-500">{{ $item->cars->nama_mobil }}</td>
                                    <td>{{ $item->no_pesanan }}</td>
                                    <td>{{ $item->tgl_sewa }}</td>
                                    <td>{{ $item->tgl_selesai }}</td>
                                    <td>{{ $item->jaminan }}</td>
                                    <td class="dropdown" style="overflow: visible">
                                        {{ $item->status_pembayaran == 0 ? 'Belum Dibayar' : 'Lunas' }}
                                        @if($item->status_pembayaran == 0)
                                        {{"Belum Dibayar"}}
                                        <div id="opendropdown" class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Bayar
                                            </button>
                                            <div id="itemdropdown" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ route('Pembayaran.index', ['id' => $item->id, 'method'=>'Upload']) }}">Transfer</a>
                                                <a class="dropdown-item" href="{{ route('Pembayaran.index', ['id' => $item->id, 'method'=>'Cash']) }}">Bayar Cash</a>
                                            </div>
                                        </div>
                                        @elseif($item->status_pembayaran == 0 && $item->status_peminjaman == 1)
                                        {{"Belum Dibayar"}}
                                        <a href="{{ route('Pembayaran.index', ['id' => $item->id, 'method'=>'Upload']) }}"><button class="btn btn-success">Upload</button></a>
                                        @elseif($item->status_pembayaran == 5)
                                        {{"(Silahkan langsung membayarkan kepada operator kami!)"}}
                                        @else
                                        {{"Lunas"}}
                                        @endif
                                        <br>
                                    <td>
                                        @if($item->status_pembayaran == 4)
                                        @if($item -> bukti_pembayaran != "-")
                                        <div class="col-md-3">
                                            <img src="{{asset('storage/gambar_mobil/'.$item->bukti_pembayaran) }}" alt="Gambar {{ $item->nama_mobil }}" width="250">
                                        </div>
                                        @else
                                        <p> - </p>
                                        @endif
                                        @elseif($item->status_pembayaran == 5)
                                        <h6 style="color: royalblue">Silahkan melakukan pembayaran langsung kepada operator kami!</h6>
                                        @endif
                                    </td>
                                    <td>{{ ( $item->status_peminjaman == 0 ) ? "Menunggu Konfirmasi" : (( $item->status_peminjaman == 1 )  ? "Sedang Proses Peminjaman" : "Selesai") }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $data->links() }}

                </div>
            </div>
        </div>
    </section>
</div>


@endsection