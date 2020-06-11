@extends('layout.main')

@section('title', 'Tambah Laporan Penyaluran')

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
                            <li class="breadcrumb-item"><a href="/lain">Laporan Penyaluran Donasi</a></li>
                            <li class="breadcrumb-item active">Tambah Laporan Penyaluran Donasi</li>
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

                            <h4 class="mt-0 header-title">Tambah Laporan Penyaluran Donasi</h4>
                            <p class="text-muted mb-4">Isi laporan penyaluran donasi baru pada form dibawah ini dengan lengkap.</p>

                            <form method="POST" class="custom-validation" action="/lain">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Program</label>
                                            <input name="nama_program" type="text" class="form-control" required placeholder="Nama program"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Penerima</label>
                                            <input name="nama_penerima" type="text" class="form-control" required placeholder="Nama penerima"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Program</label>
                                            <select name="program" class="form-control select2">
                                                <option>Select</option>
                                                <option value="BUS">BUS</option>
                                                <option value="KUBAH">KUBAH</option>
                                                <option value="SIMBAHKU">SIMBAHKU</option>
                                                <option value="Program Lain">Program Lain</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nama Penerima</label>
                                            <select name="penerima" class="form-control select2">
                                                <option value="-">Select</option>
                                                @foreach ($bus as $bs)
                                                    <option value="{{ $bs->nama }}">{{ $bs->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input name="tgl_donasi" class="form-control" type="date" id="example-date-input" value="<?= date('Y-m-d') ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Penanggung Jawab</label>
                                            <input name="png_jawab" type="text" class="form-control" required placeholder="Penanggung jawab"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nominal</label>
                                            <input id="rupiah" name="nominal" data-parsley-type="digits" type="text" class="form-control" required value="0"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="keterangan" required class="form-control" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input name="foto" type="file" class="filestyle" required data-buttonname="btn-secondary">
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