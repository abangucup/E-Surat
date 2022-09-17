@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6 @if (auth()->user()->role_id == 1)col-lg-4 @else col-lg-6 @endif col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="col-md-12">
                                    <h6 class="text-muted font-semibold">Surat Masuk</h6>
                                    <h6 class="font-extrabold mb-0">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 @if (auth()->user()->role_id == 1)col-lg-4 @else col-lg-6 @endif col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="col-md-12">
                                    <h6 class="text-muted font-semibold">Surat Keluar</h6>
                                    <h6 class="font-extrabold mb-0">{{ $suratkeluar ?? '0' }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (auth()->user()->role_id == 1)
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="text-muted font-semibold">Surat Permohonan</h6>
                                        <h6 class="font-extrabold mb-0">0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Statistik Pengaduan</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">Jumlah Aduan</h6>
                                            <h6 class="font-extrabold mb-0">0</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">Dalam Tindakan</h6>
                                            <h6 class="font-extrabold mb-0">0</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">Diselesaikan</h6>
                                            <h6 class="font-extrabold mb-0">0</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection