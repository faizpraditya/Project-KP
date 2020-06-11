<?php

namespace App\Http\Controllers;

use App\Donatur;
use Illuminate\Http\Request;

class DonatursController extends Controller
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
        //
        // $donatur = DB::table('data_donaturs')->get();
        $donatur = Donatur::all();
        // return view('donasi.donaturTetap', ['donatur' => $donatur]);
        return view('donatur.indexDonatur', compact('donatur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('donatur.createDonatur');
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
        // $donatur = new Donatur;
        // $donatur->nama = $request->nama;
        // $donatur->email = $request->email;

        // Donatur::create([
        //     'nama' => $request->nama,
        //     'email' => $request->email
        // ]);

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required'
        ]);

        Donatur::create($request->all());

        return redirect('/donatur')->with('status', 'Data Donatur berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donatur $donatur
     * @return \Illuminate\Http\Response
     */
    public function show(Donatur $donatur)
    {
        //
        return view('donatur.showDonatur', compact('donatur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donatur $donatur
     * @return \Illuminate\Http\Response
     */
    public function edit(Donatur $donatur)
    {
        //
        return view('donatur.editDonatur', compact('donatur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donatur $donatur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donatur $donatur)
    {
        //
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required'
        ]);

        Donatur::where('id', $donatur->id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'tgl_lahir' => $request->tgl_lahir,
                'pekerjaan' => $request->pekerjaan,
                'status' => $request->status
            ]);

        return redirect('/donatur')->with('status', 'Data Donatur berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donatur $donatur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donatur $donatur)
    {
        //
        Donatur::destroy($donatur->id);

        return redirect('/donatur')->with('status', 'Data Donatur berhasil dihapus!');
    }
}
