@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')
<div class="page-heading">
    <h3>Admin</h3>
</div>

<div class="page-content">
    <section class="content">
        <div class="card">
            <div class="card-content p-3">
                <div class="table-responsive">
                    <table id="pengaduanTable" class="table">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Judul Regulasi</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($regulation as $item) --}}

                            <tr class="text-center">
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>

                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#" method="POST">
                                        <a href="{#" class="btn btn-sm btn-primary my-2">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger my-2">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            {{-- @endforeach ($galeries as $galeri) --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
