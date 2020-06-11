@extends('layout.main')

@section('title', 'Data Karyawan')

@section('container')
    <!-- ============================================================== -->
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
                                <li class="breadcrumb-item active">Data Karyawan</li>
                            </ol>
                        </div>
                        <div class="col-sm-6 button-items">
                            <div class="float-right d-md-block">
                                <a class="btn btn-primary arrow-none waves-effect waves-light btn-icon" href="/karyawan/create">
                                    <span class="btn-icon-label"><i class="mdi mdi-account-plus mr-2"></i></span> Tambah Data
                                </a>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
                <!-- end page-title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- Pesan with dari controller karyawan --}}
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <table id="datatable" class="table dt-responsive nowrap table-vertical table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th># </th>
                                            <th>Nama </th>
                                            <th>TTL </th>
                                            <th>Email </th>
                                            <th>No HP </th>
                                            <th>Alamat </th>
                                            <th>Jabatan </th>
                                            <th>Tahun Masuk </th>
                                            <th>Lama Kerja </th>
                                            <th>Status </th>
                                            <th>Info </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($karyawan as $kyw)
                                        @php
                                            $dateObj = DateTime::createFromFormat('Y-m-d', $kyw->tgl_lahir); 
                                            $tanggal = $dateObj->format('j F Y');
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kyw->nama }}</td>
                                            <td>{{ $kyw->tmp_lahir }}, {{ $tanggal }}</td>
                                            <td>{{ $kyw->email }}</td>
                                            <td>{{ $kyw->no_hp }}</td>
                                            <td>{{ $kyw->alamat }}</td>
                                            <td>{{ $kyw->jabatan }}</td>
                                            <td>{{ $kyw->tahun_masuk }}</td>
                                            {{-- <td>{{ $kyw->lama_kerja }}</td> --}}
                                            @php
                                                $lama_kerja=2020-$kyw->tahun_masuk;
                                            @endphp
                                            <td>{{ $lama_kerja }} Tahun</td>
                                            <td>{{ $kyw->status }}</td>
                                            <td>
                                                <a href="/karyawan/{{ $kyw->id }}" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="mdi mdi-account-details font-18"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->
@endsection