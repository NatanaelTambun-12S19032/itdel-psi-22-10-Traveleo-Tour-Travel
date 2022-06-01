@extends('layouts.dashboard')
@section('title', 'Data Supir')
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
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th width="280px">Action</th>
            </tr>
            <?php $no = 1 ?>
            @foreach($supir as $supir)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $supir->nama }}</td>
                <td>{{ $supir->usia }}</td>
                <td>{{ $supir->email }}</td>
                <td>{{ $supir->jenis_kelamin }}</td>
                <td>{{ $supir->no_telepon }}</td>
                <td>{{ $supir->alamat }}</td>
                <td>{{ $supir->tgl_lahir }}</td>
                <td>
                    <form action="{{ route('supir.destroy', $supir->id) }}" method="POST">
                        <a class="btn btn-sm btn-success" href="{{ route('supir.show', $supir->id) }}">Detail</a>
                        </a>
                        <a class="btn btn-sm btn-warning" href="{{ route('supir.edit', $supir) }}">Edit</a>
                        </a>

                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    @endsection