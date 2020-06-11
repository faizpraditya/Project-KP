@extends('layout.main')

@section('title', 'Laporan Donasi')

@section('container')
    <!-- ============================================================== -->
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
                                <li class="breadcrumb-item active">Laporan Donasi</li>
                            </ol>
                        </div>
                        <div class="col-sm-6 button-items">
                            <div class="float-right d-md-block">
                                <a class="btn btn-primary arrow-none waves-effect waves-light btn-icon" href="/donasi/create">
                                    <span class="btn-icon-label"><i class="mdi mdi-credit-card-plus mr-2"></i></span> Tambah Data
                                </a>
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
                                {{-- Pesan with dari controller donasi --}}
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <table id="datatable-buttons" class="table dt-responsive nowrap table-vertical table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th># </th>
                                            <th>No Bukti </th>
                                            <th>Tanggal </th>
                                            <th>Nama Amil </th>
                                            <th>Alamat </th>
                                            <th>Nama Donatur </th>
                                            <th>Debet </th>
                                            <th>Kredit </th>
                                            <th>Keterangan </th>
                                            <th>Rincian ROA </th>
                                            <th>Saldo </th>
                                            <th>Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $saldo=0;
                                        @endphp
                                        @foreach ($donasi as $dns)
                                        @php
                                            $dateObj = DateTime::createFromFormat('Y-m-d', $dns->tgl_donasi); 
                                            $tanggal = $dateObj->format('d/m/Y');
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dns->no_bukti }}</td>
                                            <td>{{ $tanggal }}</td>
                                            <td>{{ $dns->nama_amil }}</td>
                                            <td>{{ $dns->alamat }}</td>
                                            <td>{{ $dns->nama_donatur }}</td>
                                            <td>
                                                <i class="mdi mdi-chevron-down-circle text-success mr-1"></i>
                                                {{ rupiah($dns->debet) }}
                                                <p class="m-0 text-muted font-14">Donasi Masuk</p>
                                            </td>
                                            <td>
                                                <i class="mdi mdi-chevron-up-circle text-danger mr-1"></i>
                                                {{ rupiah($dns->kredit) }}
                                                <p class="m-0 text-muted font-14">Donasi Keluar</p>
                                            </td>
                                            <td>{{ $dns->keterangan }}</td>
                                            <td>{{ $dns->rincian_roa }}</td>
                                            @php
                                                $saldo=$saldo+$dns->debet-$dns->kredit;
                                            @endphp
                                            <td>{{ rupiah($saldo) }}</td>
                                            <td>
                                                <form action="/donasi/{{ $dns->id }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="/donasi/{{ $dns->id }}/edit" class="btn btn-sm btn-success btn-icon"><i class="mdi mdi-circle-edit-outline"></i>Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-danger btn-icon"><i class="mdi mdi-delete-forever"></i>Delete</button>
                                                </form>
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