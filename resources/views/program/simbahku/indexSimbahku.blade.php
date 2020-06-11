@extends('layout.main')

@section('title', 'Data Penerima SIMBAHKU')

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
                                <li class="breadcrumb-item active">Data Penerima SIMBAHKU</li>
                            </ol>
                        </div>
                        <div class="col-sm-6 button-items">
                            <div class="float-right d-md-block">
                                <a class="btn btn-primary arrow-none waves-effect waves-light btn-icon" href="/simbahku/create">
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
                                {{-- Pesan with dari controller Kubah --}}
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
                                            <th>Alamat </th>
                                            <th>Status </th>
                                            <th>Info </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($simbahku as $smb)
                                        @php
                                            $dateObj = DateTime::createFromFormat('Y-m-d', $smb->tgl_lahir); 
                                            $tanggal = $dateObj->format('j F Y');
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $smb->nama }}</td>
                                            <td>{{ $smb->tmp_lahir }}, {{ $tanggal }}</td>
                                            <td>{{ $smb->alamat }}</td>
                                            <td>{{ $smb->status }}</td>
                                            <td>
                                                <a href="/simbahku/{{ $smb->id }}" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="mdi mdi-account-details font-18"></i></a>
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