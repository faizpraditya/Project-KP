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
                            <li class="breadcrumb-item"><a href="/penyaluran">Laporan Penyaluran Donasi</a></li>
                            <li class="breadcrumb-item active">Edit Laporan Penyaluran Donasi</li>
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

                            <h4 class="mt-0 header-title">Edit Laporan Penyaluran Donasi</h4>
                            <p class="text-muted mb-4">Isi laporan penyaluran donasi baru pada form dibawah ini dengan lengkap.</p>

                            <form method="POST" class="custom-validation" action="/penyaluran/{{ $penyaluran->id }}">
                                @method('patch')
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Program</label>
                                            <input value="{{ $penyaluran->program }}" name="program" type="text" class="form-control" required placeholder="Nama program" hidden />
                                            <input value="{{ $penyaluran->program }}" name="program" type="text" class="form-control" required placeholder="Nama program" disabled />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nama Penerima</label>
                                            <select name="penerima" class="form-control select2">
                                                <option value="-">Select</option>
                                                @if ($penyaluran->program=='BUS')
                                                    @foreach ($bus as $bs)
                                                        @if ($penyaluran->penerima==$bs->nama)
                                                            <option value="{{ $bs->nama }}" selected>{{ $bs->nama }}</option>
                                                        @else
                                                            <option value="{{ $bs->nama }}">{{ $bs->nama }}</option>
                                                        @endif
                                                    @endforeach
                                                @elseif ($penyaluran->program=='KUBAH')
                                                    @foreach ($kubah as $kbh)
                                                        @if ($penyaluran->penerima==$kbh->nama)
                                                            <option value="{{ $kbh->nama }}" selected>{{ $kbh->nama }}</option>
                                                        @else
                                                            <option value="{{ $kbh->nama }}">{{ $kbh->nama }}</option>
                                                        @endif
                                                    @endforeach
                                                @elseif ($penyaluran->program=='SIMBAHKU')
                                                    @foreach ($simbahku as $smb)
                                                        @if ($penyaluran->penerima==$smb->nama)
                                                            <option value="{{ $smb->nama }}" selected>{{ $smb->nama }}</option>
                                                        @else
                                                            <option value="{{ $smb->nama }}">{{ $smb->nama }}</option>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    @foreach ($lain as $ln)
                                                        @if ($penyaluran->penerima==$ln->nama_penerima)
                                                            <option value="{{ $ln->nama_penerima }}" selected>{{ $ln->nama_penerima }}</option>
                                                        @else
                                                            <option value="{{ $ln->nama_penerima }}">{{ $ln->nama_penerima }}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input value="{{ $penyaluran->tgl_penyaluran }}" name="tgl_penyaluran" class="form-control" type="date" id="example-date-input" value="<?= date('Y-m-d') ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Penanggung Jawab</label>
                                            <input value="{{ $penyaluran->png_jawab }}" name="png_jawab" type="text" class="form-control" required placeholder="Penanggung jawab"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nominal</label>
                                            <input value="{{ $penyaluran->nominal }}" id="rupiah" name="nominal" data-parsley-type="digits" type="text" class="form-control" required value="0"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="keterangan" required class="form-control" rows="5">{{ $penyaluran->keterangan }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input value="{{ $penyaluran->foto }}" name="foto" type="file" class="filestyle" required data-buttonname="btn-secondary">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 button-items" dir="ltr">
                                        <a href="/penyaluran/{{ $penyaluran->id }}">
                                            <button type="button" class="btn btn-secondary btn-icon">
                                                <span class="btn-icon-label"><i class="mdi mdi-keyboard-backspace mr-2"></i></span> Kembali
                                            </button>
                                        </a>
                                        
                                    </div>
                                    <div class="col-sm-8 button-items float-right" dir="ltr">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-success btn-icon">
                                                <span class="btn-icon-label"><i class="mdi mdi-checkbox-marked-circle-outline mr-2"></i></span> Save
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