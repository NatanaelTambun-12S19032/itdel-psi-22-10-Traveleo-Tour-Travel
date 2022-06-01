@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Operator</h2>
        </div>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('operator.update', $operator) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="{{ old('nama', $operator->nama) }}" />
            </div>
            <div class="mb-3">
                <label>Usia <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="usia" value="{{ old('usia', $operator->usia) }}" />
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input class="form-control" type="text" name="email" value="{{ old('email', $operator->email) }}" />
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <input class="form-control" type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin', $operator->jenis_kelamin) }}" />
            </div>
            <div class="mb-3">
                <label>No Telepon</label>
                <input class="form-control" type="text" name="no_telepon" value="{{ old('no_telepon', $operator->no_telepon) }}" />
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat" value="{{ old('alamat', $operator->alamat) }}" />
            </div>
            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="text" name="tgl_lahir" value="{{ old('tgl_lahir', $operator->tgl_lahir) }}" />
            </div>
            <div class="mb-3">
                <label>Tanggal Masuk</label>
                <input class="form-control" type="text" name="tgl_masuk" value="{{ old('tgl_masuk', $operator->tgl_masuk) }}" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('operator.index') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection