@extends('layout.main')

@section('title', 'Detail Penerima Program Lain')

@section('container')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Program</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item"><a href="/lain">Data Penerima Program Lain</a></li>
                            <li class="breadcrumb-item active">Detail Penerima Program Lain</li>
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

                            <h4 class="mt-0 header-title">Profil Penerima Program Lain</h4>
                            <p class="text-muted mb-4"></p>

                            <dl class="row">
                                <dt class="col-sm-4">Nama Program</dt>
                                <dd class="col-sm-8">{{ $lain->nama_program }}</dd>

                                <dt class="col-sm-4">Nama Penerima</dt>
                                <dd class="col-sm-8">{{ $lain->nama_penerima }}</dd>

                                <dt class="col-sm-4">Keterangan</dt>
                                <dd class="col-sm-8">{{ $lain->keterangan }}</dd>

                                <dt class="col-sm-4">Alamat</dt>
                                <dd class="col-sm-8">{{ $lain->alamat }}</dd>

                                <dt class="col-sm-4">Foto</dt>
                                <dd class="col-sm-8">{{ $lain->foto }}</dd>

                                <dt class="col-sm-4">Status</dt>
                                <dd class="col-sm-8">{{ $lain->status }}</dd>
                            </dl>
                            <div class="row">
                                <div class="col-sm-4 button-items" dir="ltr">
                                    <a href="/lain">
                                        <button type="button" class="btn btn-secondary btn-icon">
                                            <span class="btn-icon-label"><i class="mdi mdi-keyboard-backspace mr-2"></i></span> Kembali
                                        </button>
                                    </a>
                                    
                                </div>
                                <div class="col-sm-8 button-items float-right" dir="ltr">
                                    <div class="float-right">
                                        <form action="{{ $lain->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ $lain->id }}/edit" class="btn btn-success btn-icon">
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

                            <h4 class="mt-0 header-title">Informasi Donasi Penerima Program Lain</h4>
                            <p class="text-muted mb-4"></p>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection