@extends('layout.main')

@section('title', 'Tambah Relawan')

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
                            <li class="breadcrumb-item"><a href="/relawan">Data Relawan</a></li>
                            <li class="breadcrumb-item active">Tambah Data Relawan</li>
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

                            <h4 class="mt-0 header-title">Tambah Data Relawan</h4>
                            <p class="text-muted mb-4">Isi data Relawan baru pada form dibawah ini dengan lengkap.</p>

                            <form method="POST" class="custom-validation" action="/relawan">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" type="text" class="form-control" required placeholder="Nama relawan"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input name="tmp_lahir" type="text" class="form-control" required placeholder="Tempat lahir"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input name="tgl_lahir" class="form-control" type="date" id="example-date-input" value="<?= date('Y-m-d') ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>E-Mail</label>
                                            <input name="email" type="email" class="form-control" required parsley-type="email" placeholder="E-Mail relawan"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input name="no_hp" data-parsley-type="digits" type="text" class="form-control" required placeholder="Nomor HP relawan"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" required class="form-control" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Profesi</label>
                                            <input name="profesi" type="text" class="form-control" required placeholder="Profesi relawan"/>
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
                                        <a href="/relawan">
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