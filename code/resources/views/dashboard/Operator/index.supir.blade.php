@extends('layouts.dashboard')
@section('title', 'Data Operator')
@section('content')


<div class="page-heading">
    <h3>Data Supir</h3>
</div>

@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Search here..." />
            </div>
            <div class="col">
                <button class="btn btn-success">Refresh</button>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="{{ route('supir.create') }}">Add</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Tanggal Kerja</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($operator as $operator)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $supir->nama }}</td>
                <td>{{ $supir->usia }}</td>
                <td>{{ $supir->email }}</td>
                <td>{{ $supir->jenis_kelamin }}</td>
                <td>{{ $supir->no_telepon }}</td>
                <td>{{ $supir->alamat }}</td>
                <td>{{ $supir->tgl_kerja }}</td>
                <td>{{ $supir->tgl_kembali }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('supir.edit', $supir) }}">Detail</a>
                    <form method="POST" action="{{ route('supir.destroy', $supir) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="mt-3"></div>
    <div class="dataTable-bottom">
        <div class="dataTable-info">Showing 1 to 1 of 1 entries</div>
        <ul class="pagination pagination-primary float-end dataTable-pagination"></ul>
    </div>
</div>
@endsection