@extends('layout.main')

@section('title', 'Detail Karyawan')

@section('container')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">SDM</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item"><a href="/karyawan">Data Karyawan</a></li>
                            <li class="breadcrumb-item active">Detail Karyawan</li>
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

                            <h4 class="mt-0 header-title">Profil Karyawan</h4>
                            <p class="text-muted mb-4"></p>
                            @php
                                $dateObj = DateTime::createFromFormat('Y-m-d', $karyawan->tgl_lahir); 
                                $tanggal = $dateObj->format('j F Y');
                            @endphp

                            <dl class="row">
                                <dt class="col-sm-4">Nama</dt>
                                <dd class="col-sm-8">{{ $karyawan->nama }}</dd>

                                <dt class="col-sm-4">Tempat, Tanggal Lahir</dt>
                                <dd class="col-sm-8">{{ $karyawan->tmp_lahir }}, {{ $tanggal }}</dd>

                                <dt class="col-sm-4">E-Mail</dt>
                                <dd class="col-sm-8">{{ $karyawan->email }}</dd>
                                    
                                <dt class="col-sm-4">Nomor HP</dt>
                                <dd class="col-sm-8">{{ $karyawan->no_hp }}</dd>
    
                                <dt class="col-sm-4">Alamat</dt>
                                <dd class="col-sm-8">{{ $karyawan->alamat }}</dd>

                                <dt class="col-sm-4">Jabatan</dt>
                                <dd class="col-sm-8">{{ $karyawan->jabatan }}</dd>

                                <dt class="col-sm-4">Tahun Masuk</dt>
                                <dd class="col-sm-8">{{ $karyawan->tahun_masuk }}</dd>

                                <dt class="col-sm-4">Lama Kerja</dt>
                                <dd class="col-sm-8">{{ $lamakerja=2020-$karyawan->tahun_masuk }} Tahun</dd>

                                <dt class="col-sm-4">Status</dt>
                                <dd class="col-sm-8">{{ $karyawan->status }}</dd>
                            </dl>
                            <div class="row">
                                <div class="col-sm-4 button-items" dir="ltr">
                                    <a href="/karyawan">
                                        <button type="button" class="btn btn-secondary btn-icon">
                                            <span class="btn-icon-label"><i class="mdi mdi-keyboard-backspace mr-2"></i></span> Kembali
                                        </button>
                                    </a>
                                    
                                </div>
                                <div class="col-sm-8 button-items float-right" dir="ltr">
                                    <div class="float-right">
                                        <form action="{{ $karyawan->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ $karyawan->id }}/edit" class="btn btn-success btn-icon">
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

                            <h4 class="mt-0 header-title">Informasi Donasi Karyawan</h4>
                            <p class="text-muted mb-4"></p>
                            <dl class="row">
                                <dt class="col-sm-4">Foto</dt>
                                <dd class="col-sm-8">{{ $karyawan->foto }}</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection