<?php

namespace App\Http\Controllers;

use App\Donasi;
use App\Donatur;
use App\Bus;
use App\Kubah;
use App\Simbahku;
use App\Lain;
use App\Penyaluran;
use App\Karyawan;
use App\Relawan;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index()
    {
        $donasi = Donasi::all();
        return view('index', compact(['donasi']));
    }
}
