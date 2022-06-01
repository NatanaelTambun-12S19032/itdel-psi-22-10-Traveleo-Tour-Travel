@extends('layouts.dashboard')
@section('title', 'Mobil')

@section('content')

    <div class="page-heading">
        <h3>Mobil</h3>
    </div>

    {{-- Modal --}}
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">Detail Mobil</h5>
                    <button type="button" class="close rounded-pill"
                            data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body mobil">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                        @foreach ($data as $key => $item)
                            <div class="card mb-3 w-100">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <img src="{{asset('storage/gambar_mobil/'.$item->cars->gambar_mobil) }}" alt="Gambar {{ $item->cars->nama_mobil }}" width="250">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item->cars->nama_mobil }}</h5>
                                            <p class="card-text">
                                                Bahan Bakar : {{ $item->cars->bahan_bakar }}
                                            </p>
                                            <p class="">
                                                Biaya Sewa : {{ $item->cars->harga_sewa }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
