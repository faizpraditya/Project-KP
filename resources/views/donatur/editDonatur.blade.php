@extends('layout.main')

@section('title', 'Edit Donatur')

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
                            <li class="breadcrumb-item"><a href="/donaturTetap">Data Donatur Tetap</a></li>
                            <li class="breadcrumb-item active">Edit Donatur</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end page-title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Edit Data Donatur</h4>
                            <p class="text-muted mb-4">Isi data donatur baru pada form dibawah ini dengan lengkap.</p>

                            <form method="POST" class="custom-validation" action="/donatur/{{ $donatur->id }}">
                                @method('patch')
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input value="{{ $donatur->nama }}" name="nama" type="text" class="form-control" required placeholder="Nama donatur"/>
                                        </div>
                                        <div class="form-group">
                                            <label>E-Mail</label>
                                            <input value="{{ $donatur->email }}" name="email" type="email" class="form-control" required parsley-type="email" placeholder="E-Mail donatur"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                @if ($donatur->status=="Aktif")
                                                <option value="Aktif" selected>Aktif</option>
                                                <option value="Tidak Aktif">Tidak aktif</option>
                                                @else
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif" selected>Tidak aktif</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input value="{{ $donatur->pekerjaan }}"  name="pekerjaan" type="text" class="form-control" required placeholder="Pekerjaan donatur"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input value="{{ $donatur->no_hp }}"  name="no_hp" data-parsley-type="digits" type="text" class="form-control" required placeholder="Nomor HP donatur"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input value="{{ $donatur->tgl_lahir }}"  name="tgl_lahir" class="form-control" type="date" id="example-date-input" value="<?= date('Y-m-d') ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" required class="form-control" rows="5">{{ $donatur->alamat }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 button-items" dir="ltr">
                                        <a href="/donatur/{{ $donatur->id }}">
                                            <button type="button" class="btn btn-secondary btn-icon">
                                                <span class="btn-icon-label"><i class="mdi mdi-keyboard-backspace mr-2"></i></span> Kembali
                                            </button>
                                        </a>
                                        
                                    </div>
                                    <div class="col-sm-8 button-items float-right" dir="ltr">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary btn-icon">
                                                <span class="btn-icon-label"><i class="mdi mdi-checkbox-marked-circle-outline mr-2"></i></span> Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection