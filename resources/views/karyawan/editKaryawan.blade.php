@extends('layout.main')

@section('title', 'Tambah Karyawan')

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
                            <li class="breadcrumb-item active">Edit Data Karyawan</li>
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

                            <h4 class="mt-0 header-title">Edit Data Karyawan</h4>
                            <p class="text-muted mb-4">Isi data Karyawan baru pada form dibawah ini dengan lengkap.</p>

                            <form method="POST" class="custom-validation" action="/karyawan/{{ $karyawan->id }}">
                                @method('patch')
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input value="{{ $karyawan->nama }}" name="nama" type="text" class="form-control" required placeholder="Nama Karyawan"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input value="{{ $karyawan->tmp_lahir }}" name="tmp_lahir" type="text" class="form-control" required placeholder="Tempat lahir"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input value="{{ $karyawan->tgl_lahir }}" name="tgl_lahir" class="form-control" type="date" id="example-date-input" value="<?= date('Y-m-d') ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>E-Mail</label>
                                            <input value="{{ $karyawan->email }}" name="email" type="email" class="form-control" required parsley-type="email" placeholder="E-Mail Karyawan"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input value="{{ $karyawan->no_hp }}" name="no_hp" data-parsley-type="digits" type="text" class="form-control" required placeholder="Nomor HP Karyawan"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" required class="form-control" rows="5">{{ $karyawan->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input value="{{ $karyawan->jabatan }}" name="jabatan" type="text" class="form-control" required placeholder="Jabatan karyawan"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Masuk</label>
                                            <input value="{{ $karyawan->tahun_masuk }}" name="tahun_masuk" type="text" class="form-control" required placeholder="Tahun masuk karyawan"/>
                                        </div>
                                        <div class="form-group">
                                            <input value="{{ $karyawan->lama_kerja }}" value="0" name="lama_kerja" type="hidden" class="form-control" required placeholder="Tahun masuk karyawan"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input value="{{ $karyawan->foto }}" name="foto" type="file" class="filestyle" required data-buttonname="btn-secondary">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                @if ($karyawan->status=="Aktif")
                                                <option value="Aktif" selected>Aktif</option>
                                                <option value="Tidak Aktif">Tidak aktif</option>
                                                @else
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif" selected>Tidak aktif</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 button-items" dir="ltr">
                                        <a href="/karyawan/{{ $karyawan->id }}">
                                            <button type="button" class="btn btn-secondary btn-icon">
                                                <span class="btn-icon-label"><i class="mdi mdi-keyboard-backspace mr-2"></i></span> Kembali
                                            </button>
                                        </a>
                                        
                                    </div>
                                    <div class="col-sm-8 button-items float-right" dir="ltr">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-success btn-icon">
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