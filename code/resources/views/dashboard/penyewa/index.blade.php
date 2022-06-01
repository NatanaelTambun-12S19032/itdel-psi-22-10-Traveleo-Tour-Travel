@extends('layouts.dashboard')
@section('title', 'Penyewa')

@section('content')

<div class="page-heading">
    <h3>Penyewa</h3>
</div>
<div class="card card-default">
    <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <input class="form-control" type="text" placeholder="Search here..." />
            </div>
            <div class="col">
                <button class="btn btn-success">Refresh</button>
            </div>
        </form>
    </div>

    <!-- table bordered -->
    <div class="table-responsive">
        <table class="table table-bordered mb-0 text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penyewa</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $key => $item)
                <tr>
                    <td class="text-bold-500">{{ $key + 1 }}</td>
                    <td>{{ $item->nama_lengkap ? $item->nama_lengkap : '-' }}</td>
                    <td class="text-bold-500">{{ $item->email ? $item->email : '-' }}</td>
                    <td>{{ $item->alamat ? $item->alamat : '-' }}</td>
                    <td>{{ $item->no_telephone ? $item->no_telephone : '-' }}</td>
                    <td>


                        <a href="{{ route('penyewa.edit', $item->id) }}">
                            <button class="btn btn-sm btn-warning" style="margin-right: 10px">Edit</button>
                        </a>
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger" data-lok="{{ $item->id }}">Hapus</button>
    </div>
    </form>
    </td>
    </tr>

    @empty

    <tr>
        <td class="text-bold-500" colspan="9">Tidak Ada Data User</td>
    </tr>

    @endforelse
    </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $data->links() }}
</div>

</div>
</div>
</div>
</section>
</div>

@endsection