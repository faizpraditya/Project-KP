@extends('layout.main')

@section('title', 'Edit Donasi')

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
                            <li class="breadcrumb-item"><a href="/donasi">Laporan Donasi</a></li>
                            <li class="breadcrumb-item active">Edit Donasi</li>
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

                            <h4 class="mt-0 header-title">Edit Data Donasi</h4>
                            <p class="text-muted mb-4">Isi data donasi baru pada form dibawah ini dengan lengkap. Jika ada data yang kosong isi dengan tanda "-".</p>

                            <form method="POST" class="custom-validation" action="/donasi/{{ $donasi->id }}">
                                @method('patch')
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>No. Bukti</label>
                                            <input value="{{ $donasi->no_bukti }}" name="no_bukti" type="text" class="form-control" required placeholder="Nomor Bukti"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input value="{{ $donasi->tgl_donasi }}" name="tgl_donasi" class="form-control" type="date" id="example-date-input" value="<?= date('Y-m-d') ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Amil</label>
                                            <input value="{{ $donasi->nama_amil}}" name="nama_amil" type="text" class="form-control" required placeholder="Nama Amil"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" required class="form-control" rows="5">{{ $donasi->alamat }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nama Donatur</label>
                                            <select name="nama_donatur" class="form-control select2">
                                                <option value="-">Select</option>
                                                @foreach ($donatur as $dnt)
                                                    @if ($donasi->nama_donatur==$dnt->nama)
                                                        <option value="{{ $dnt->nama }}" selected>{{ $dnt->nama }}</option>
                                                    @else
                                                        <option value="{{ $dnt->nama }}">{{ $dnt->nama }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Debet</label>
                                            <input value="{{ $donasi->debet }}" id="rupiah" name="debet" data-parsley-type="digits" type="text" class="form-control" required value="0"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Kredit</label>
                                            <input value="{{ $donasi->kredit }}" id="rupiah" name="kredit" data-parsley-type="digits" type="text" class="form-control" required value="0"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="keterangan" required class="form-control" rows="3">{{ $donasi->keterangan }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Rincian ROA</label>
                                            <textarea name="rincian_roa" required class="form-control" rows="3">{{ $donasi->rincian_roa }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <input name="saldo" data-parsley-type="digits" type="hidden" class="form-control" required value="0"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 button-items" dir="ltr">
                                        <a href="/donasi">
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