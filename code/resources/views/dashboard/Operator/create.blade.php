@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Operator</h2>
        </div>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('operator.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label> Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" />
            </div>
            <div class="mb-3">
                <label>Usia <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="usia" value="{{ old('usia') }}" />
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input class="form-control" type="text" name="email" value="{{ old('email') }}" />
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <input class="form-control" type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" />
            </div>
            <div class="mb-3">
                <label>No Telepon</label>
                <input class="form-control" type="text" name="no_telepon" value="{{ old('no_telepon') }}" />
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}" />
            </div>
            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}" />
            </div>
            <div class="mb-3">
                <label>Tanggal Masuk</label>
                <input class="form-control" type="date" name="tgl_masuk" value="{{ old('tgl_masuk') }}" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('operator.index') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection