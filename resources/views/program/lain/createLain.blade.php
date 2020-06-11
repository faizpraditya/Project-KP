@extends('layout.main')

@section('title', 'Tambah Penerima Program Lain')

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
                            <li class="breadcrumb-item active">Tambah Data Penerima Program Lain</li>
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

                            <h4 class="mt-0 header-title">Tambah Data Penerima Program Lain</h4>
                            <p class="text-muted mb-4">Isi data penerima Program Lain baru pada form dibawah ini dengan lengkap.</p>

                            <form method="POST" class="custom-validation" action="/lain">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nama Program</label>
                                            <input name="nama_program" type="text" class="form-control" required placeholder="Nama penerima Program Lain"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Penerima</label>
                                            <input name="nama_penerima" type="text" class="form-control" required placeholder="Nama penerima Program Lain"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="keterangan" required class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" required class="form-control" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input name="foto" type="file" class="filestyle" required data-buttonname="btn-secondary">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

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
                                            <button type="submit" class="btn btn-primary btn-icon">
                                                <span class="btn-icon-label"><i class="mdi mdi-account-arrow-right mr-2"></i></span> Submit
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