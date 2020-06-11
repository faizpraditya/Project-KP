@extends('layout.main')

@section('title', 'Laporan Penyaluran Donasi')

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
                                <li class="breadcrumb-item active">Laporan Penyaluran Donasi</li>
                            </ol>
                        </div>
                        <div class="col-sm-6 button-items">
                            <div class="float-right d-md-block">
                                {{-- <a class="btn btn-primary arrow-none waves-effect waves-light btn-icon" href="/penyaluran/create">
                                    <span class="btn-icon-label"><i class="mdi mdi-credit-card-plus mr-2"></i></span> Tambah Data
                                </a> --}}
                                
                                <div class="dropdown">
                                    <button class="btn btn-primary arrow-none waves-effect waves-light btn-icon" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="btn-icon-label"><i class="mdi mdi-credit-card-plus mr-2"></i></span> Tambah Data
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/penyaluran/createBus">BUS</a>
                                        <a class="dropdown-item" href="/penyaluran/createKubah">KUBAH</a>
                                        <a class="dropdown-item" href="/penyaluran/createSimbahku">SIMBAHKU</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/penyaluran/createLain">Porgram Lain</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
                <!-- end page-title -->

                <div class="row">
                    @php
                        function rupiah($angka){
                            $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                            return $hasil_rupiah;
                        }
                    @endphp
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- Pesan with dari controller penyaluran --}}
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <table id="datatable-buttons" class="table dt-responsive nowrap table-vertical table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th># </th>
                                            <th>Program </th>
                                            <th>Nama Penerima </th>
                                            <th>Tanggal </th>
                                            <th>Penanggung Jawab </th>
                                            <th>Nominal </th>
                                            <th>Keterangan </th>
                                            <th>Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $saldo=0;
                                        @endphp
                                        @foreach ($penyaluran as $pyl)
                                        @php
                                            $dateObj = DateTime::createFromFormat('Y-m-d', $pyl->tgl_penyaluran); 
                                            $tanggal = $dateObj->format('d/m/Y');
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pyl->program }}</td>
                                            <td>{{ $pyl->penerima }}</td>
                                            <td>{{ $tanggal }}</td>
                                            <td>{{ $pyl->png_jawab }}</td>
                                            <td>{{ rupiah($pyl->nominal) }}</td>
                                            <td>{{ $pyl->keterangan }}</td>
                                            <td>
                                                <a href="/penyaluran/{{ $pyl->id }}" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="mdi mdi-account-details font-18"></i></a>
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