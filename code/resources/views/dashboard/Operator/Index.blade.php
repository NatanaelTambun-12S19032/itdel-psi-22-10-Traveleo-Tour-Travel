@extends('layouts.dashboard')
@section('title', 'Data Operator')
@section('content')


<div class="page-heading">
    <h3>Data Operator</h3>
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
                <a class="btn btn-primary" href="{{ route('operator.create') }}">Add</a>
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
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($operator as $operator)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $operator->nama }}</td>
                <td>{{ $operator->usia }}</td>
                <td>{{ $operator->email }}</td>
                <td>{{ $operator->jenis_kelamin }}</td>
                <td>{{ $operator->no_telepon }}</td>
                <td>{{ $operator->alamat }}</td>
                <td>{{ $operator->tgl_lahir }}</td>
                <td>{{ $operator->tgl_masuk }}</td>
                <td>
                    <form action="{{ route('operator.destroy', $operator->id) }}" method="POST">

                        <a href="{{ route('operator.show', $operator->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('operator.edit', $operator->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
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