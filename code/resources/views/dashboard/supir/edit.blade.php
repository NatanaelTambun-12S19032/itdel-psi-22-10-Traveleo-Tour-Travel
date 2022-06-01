@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Supir</h2>
        </div>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('supir.update', $supir) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="{{ old('nama', $supir->nama) }}" />
            </div>
            <div class="mb-3">
                <label>Usia <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="usia" value="{{ old('usia', $supir->usia) }}" />
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input class="form-control" type="text" name="email" value="{{ old('email', $supir->email) }}" />
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <input class="form-control" type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin', $supir->jenis_kelamin) }}" />
            </div>
            <div class="mb-3">
                <label>No Telepon</label>
                <input class="form-control" type="text" name="no_telepon" value="{{ old('no_telepon', $supir->no_telepon) }}" />
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat" value="{{ old('alamat', $supir->alamat) }}" />
            </div>
            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="text" name="tgl_lahir" value="{{ old('tgl_lahir', $supir->tgl_lahir) }}" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('supir.index') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection