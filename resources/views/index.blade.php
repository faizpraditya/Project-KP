@extends('layout.main')

@section('title', 'Dashboard')

@section('container')
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content dasboard-content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title">Dashboard</h4>
                            <ol class="breadcrumb">
                                <!-- <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="mdi mdi-home-outline"></i></a></li> -->
                                <li class="breadcrumb-item active">Selamat datang di dashboard Lazis Baiturrahman</li>
                            </ol>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-sm-6">
                            <div class="float-right d-none d-md-block">
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
                        $saldo=0;
                        $debit=0;
                        $kredit=0;
                    @endphp
                    @foreach ($donasi as $dns)
                    @php
                    $saldo=$saldo+$dns->debet-$dns->kredit;
                    $debit=$debit+$dns->debet;
                    $kredit=$kredit+$dns->kredit;
                    @endphp
                    @endforeach
                    <div class="col-lg-4">
                        <div class="card mini-stat bg-pattern">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-bank bg-soft-primary text-primary float-right h4"></i>
                                </div>
                                <h6 class="text-uppercase mb-3 mt-0">Revenue</h6>
                                <h5 class="mb-3">{{ rupiah($saldo) }}</h5>
                                <p class="text-muted mb-0">
                                    <span class="text-success mr-2">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </span> Sisa saldo donasi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mini-stat bg-pattern">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-inbox-arrow-down bg-soft-primary text-primary float-right h4"></i>
                                </div>
                                <h6 class="text-uppercase mb-3 mt-0">Debit</h6>
                                <h5 class="mb-3">{{ rupiah($debit) }}</h5>
                                <p class="text-muted mb-0">
                                    <span class="text-success mr-2">
                                        <i class="mdi mdi-arrow-down"></i>
                                    </span> Total donasi masuk
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mini-stat bg-pattern">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-inbox-arrow-up bg-soft-primary text-primary float-right h4"></i>
                                </div>
                                <h6 class="text-uppercase mb-3 mt-0">Credit</h6>
                                <h5 class="mb-3">{{ rupiah($kredit) }}</h5>
                                <p class="text-muted mb-0"><span class="text-danger mr-2"><i
                                            class="mdi mdi-arrow-up"></i> </span> Total donasi keluar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Data Donasi</h4>
                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Nama Amil </th>
                                                <th>Nama Donatur </th>
                                                <th>Debet </th>
                                                <th>Kredit </th>
                                                <th>Keterangan </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($donasi as $dns)
                                            @php
                                                $dateObj = DateTime::createFromFormat('Y-m-d', $dns->tgl_donasi); 
                                                $tanggal = $dateObj->format('d/m/Y');
                                                $loop->iteration;
                                            @endphp
                                            @if ($loop->iteration<=3)
                                            <tr>
                                                <td>{{ $dns->nama_amil }}
                                                    <p class="m-0 text-muted">{{ $tanggal }}</p>
                                                </td>
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
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>

                                <div class="text-center">
                                    <a href="/donasi" class="btn btn-primary btn-sm">Load more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- content -->
@endsection

@section('rightSidebar')
<div class="right-sidebar d-none d-xl-block">
    <div class="slimscroll-menu">
        <div class="px-4 pt-4">
            <div class="card user-wid text-center overflow-hidden">
                <div class="p-4 bg-lighten-danger"></div>
                <div class="mx-3">
                    <div class="bg-white user-wid-content p-1 rounded">
                        <div class="user-img">
                            <img src="assets/images/users/user-1.jpg" alt="user-img" title=""
                                class="rounded-circle thumb-md img-fluid">
                        </div>
                        <h5 class="font-14 mb-1"><a href="javascript: void(0);">{{ Auth::user()->name }}</a> </h5>
                        <p class="text-muted mb-2"><small>{{ Auth::user()->email }}</small></p>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="font-14">Calender</h5>

                <div class="dashboard-date-pick" id="date-pick-widget" data-provide="datepicker-inline"></div>
            </div>
        </div>
    </div>
</div>
@endsection