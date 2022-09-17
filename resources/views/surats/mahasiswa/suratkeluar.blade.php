@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')
<div class="page-heading">
    <h3>Mahasiswa Keluar</h3>
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
                                <th>Tujuan Surat</th>
                                <th>Mitra</th>
                                <th>Alamat Mitra</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surats as $surat)

                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $surat->tujuan }}</td>
                                <td>{{ $surat->mitra }}</td>
                                <td>{{ $surat->alamat_mitra }}</td>
                                <td>{{ $surat->keterangan }}</td>
                                <td>

                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#" method="POST">
                                        <a href="{#" class="btn btn-sm btn-primary my-2">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger my-2">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach ($galeries as $galeri)
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
