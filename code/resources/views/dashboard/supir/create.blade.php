@extends('layouts.dashboard')
@section('title', 'Data Supir')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Supir</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('supir.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{ $err }}</p>
@endforeach
@endif
<form action="{{ route('supir.store') }}" method="POST">
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
        <input class="form-control" type="text" name="tgl_lahir" value="{{ old('tgl_lahir') }}" />
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>

</form>
@endsection