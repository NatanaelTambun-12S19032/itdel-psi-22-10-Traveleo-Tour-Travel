@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Data Penyewa</h2>
        </div>
        <div class="col-md-10">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form action="{{ route('penyewa.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Nama </label>
                    <input class="form-control" type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $data->nama_lengkap) }}" />
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" type="text" name="email" value="{{ old('email', $data->email) }}" />
                </div>
                <div class="mb-3">
                    <label>No Telepon</label>
                    <input class="form-control" type="text" name="no_telephone" value="{{ old('no_telephone', $data->no_telephone) }}" />
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <input class="form-control" type="text" name="alamat" value="{{ old('alamat', $data->alamat) }}" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Save</button>
                    <a class="btn btn-danger" href="{{ route('penyewa.index') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection