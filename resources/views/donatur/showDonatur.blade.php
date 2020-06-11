@extends('layout.main')

@section('title', 'Detail Donatur')

@section('container')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Donasi</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item"><a href="/donatur">Data Donatur Tetap</a></li>
                            <li class="breadcrumb-item active">Detail Donatur</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end page-title -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Profil Donatur</h4>
                            <p class="text-muted mb-4"></p>
                            @php
                                $dateObj = DateTime::createFromFormat('Y-m-d', $donatur->tgl_lahir); 
                                $tanggal = $dateObj->format('j F Y');
                            @endphp

                            <dl class="row">
                                <dt class="col-sm-3">Nama</dt>
                                <dd class="col-sm-9">{{ $donatur->nama }}</dd>

                                <dt class="col-sm-3">E-Mail</dt>
                                <dd class="col-sm-9">{{ $donatur->email }}</dd>
                                    
                                <dt class="col-sm-3">Nomor HP</dt>
                                <dd class="col-sm-9">{{ $donatur->no_hp }}</dd>
    
                                <dt class="col-sm-3">Alamat</dt>
                                <dd class="col-sm-9">{{ $donatur->alamat }}</dd>

                                <dt class="col-sm-3">Tanggal Lahir</dt>
                                <dd class="col-sm-9">{{ $tanggal }}</dd>

                                <dt class="col-sm-3">Pekerjaan</dt>
                                <dd class="col-sm-9">{{ $donatur->pekerjaan }}</dd>

                                <dt class="col-sm-3">Status</dt>
                                <dd class="col-sm-9">{{ $donatur->status }}</dd>
                            </dl>
                            <div class="row">
                                <div class="col-sm-4 button-items" dir="ltr">
                                    <a href="/donatur">
                                        <button type="button" class="btn btn-secondary btn-icon">
                                            <span class="btn-icon-label"><i class="mdi mdi-keyboard-backspace mr-2"></i></span> Kembali
                                        </button>
                                    </a>
                                    
                                </div>
                                <div class="col-sm-8 button-items float-right" dir="ltr">
                                    <div class="float-right">
                                        <form action="{{ $donatur->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ $donatur->id }}/edit" class="btn btn-success btn-icon">
                                                <span class="btn-icon-label"><i class="mdi mdi-circle-edit-outline mr-2"></i></span> Edit
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-icon">
                                                <span class="btn-icon-label"><i class="mdi mdi-delete-circle mr-2"></i></span> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Informasi Donasi Donatur</h4>
                            <p class="text-muted mb-4"></p>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection