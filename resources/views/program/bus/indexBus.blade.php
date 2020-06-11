@extends('layout.main')

@section('title', 'Data Penerima BUS')

@section('container')
    <!-- ============================================================== -->
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
                                <li class="breadcrumb-item active">Data Penerima BUS</li>
                            </ol>
                        </div>
                        <div class="col-sm-6 button-items">
                            <div class="float-right d-md-block">
                                <a class="btn btn-primary arrow-none waves-effect waves-light btn-icon" href="/bus/create">
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
                                {{-- Pesan with dari controller donatur --}}
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
                                            <th>Korwil </th>
                                            <th>Sekolah </th>
                                            <th>Status </th>
                                            <th>Info </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bus as $bs)
                                        @php
                                            $dateObj = DateTime::createFromFormat('Y-m-d', $bs->tgl_lahir); 
                                            $tanggal = $dateObj->format('j F Y');
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $bs->nama }}</td>
                                            <td>{{ $bs->tmp_lahir }}, {{ $tanggal }}</td>
                                            <td>{{ $bs->email }}</td>
                                            <td>{{ $bs->no_hp }}</td>
                                            <td>{{ $bs->alamat }}</td>
                                            <td>{{ $bs->korwil }}</td>
                                            <td>{{ $bs->sekolah }}</td>
                                            <td>{{ $bs->status }}</td>
                                            <td>
                                                <a href="/bus/{{ $bs->id }}" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="mdi mdi-account-details font-18"></i></a>
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