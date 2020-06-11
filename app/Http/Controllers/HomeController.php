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

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $donasi = Donasi::all();
        return view('home', compact(['donasi']));
    }
}
