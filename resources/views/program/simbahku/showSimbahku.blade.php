@extends('layout.main')

@section('title', 'Detail Penerima SIMBAHKU')

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
                            <li class="breadcrumb-item"><a href="/simbahku">Data Penerima SIMBAHKU</a></li>
                            <li class="breadcrumb-item active">Detail Penerima SIMBAHKU</li>
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

                            <h4 class="mt-0 header-title">Profil Penerima SIMBAHKU</h4>
                            <p class="text-muted mb-4"></p>
                            @php
                                $dateObj = DateTime::createFromFormat('Y-m-d', $simbahku->tgl_lahir); 
                                $tanggal = $dateObj->format('j F Y');
                            @endphp

                            <dl class="row">
                                <dt class="col-sm-4">Nama</dt>
                                <dd class="col-sm-8">{{ $simbahku->nama }}</dd>

                                <dt class="col-sm-4">Tempat, Tanggal Lahir</dt>
                                <dd class="col-sm-8">{{ $simbahku->tmp_lahir }}, {{ $tanggal }}</dd>
    
                                <dt class="col-sm-4">Alamat</dt>
                                <dd class="col-sm-8">{{ $simbahku->alamat }}</dd>

                                <dt class="col-sm-4">Foto</dt>
                                <dd class="col-sm-8">{{ $simbahku->foto }}</dd>

                                <dt class="col-sm-4">Status</dt>
                                <dd class="col-sm-8">{{ $simbahku->status }}</dd>
                            </dl>
                            <div class="row">
                                <div class="col-sm-4 button-items" dir="ltr">
                                    <a href="/simbahku">
                                        <button type="button" class="btn btn-secondary btn-icon">
                                            <span class="btn-icon-label"><i class="mdi mdi-keyboard-backspace mr-2"></i></span> Kembali
                                        </button>
                                    </a>
                                    
                                </div>
                                <div class="col-sm-8 button-items float-right" dir="ltr">
                                    <div class="float-right">
                                        <form action="{{ $simbahku->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ $simbahku->id }}/edit" class="btn btn-success btn-icon">
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

                            <h4 class="mt-0 header-title">Informasi Donasi Penerima SIMBAHKU</h4>
                            <p class="text-muted mb-4"></p>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection