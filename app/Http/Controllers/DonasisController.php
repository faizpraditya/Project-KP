<?php

namespace App\Http\Controllers;

use App\Donasi;
use App\Donatur;
use Illuminate\Http\Request;

class DonasisController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donasi = Donasi::all();
        return view('donasi.indexDonasi', compact('donasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $donatur = Donatur::all();
        return view('donasi.createDonasi', compact('donatur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Donasi::create($request->all());

        return redirect('/donasi')->with('status', 'Data Donasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function show(Donasi $donasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Donasi $donasi)
    {
        //
        $donatur = Donatur::all();
        return view('donasi.editDonasi', compact(['donasi', 'donatur']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donasi $donasi)
    {
        //
        Donasi::where('id', $donasi->id)
            ->update([
                'no_bukti' => $request->no_bukti,
                'tgl_donasi' => $request->tgl_donasi,
                'nama_amil' => $request->nama_amil,
                'alamat' => $request->alamat,
                'nama_donatur' => $request->nama_donatur,
                'debet' => $request->debet,
                'kredit' => $request->kredit,
                'keterangan' => $request->keterangan,
                'rincian_roa' => $request->rincian_roa,
                'saldo' => $request->saldo
            ]);

        return redirect('/donasi')->with('status', 'Data Donasi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donasi $donasi)
    {
        //
        Donasi::destroy($donasi->id);

        return redirect('/donasi')->with('status', 'Data Donasi berhasil dihapus!');
    }
}
