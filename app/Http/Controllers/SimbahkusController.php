<?php

namespace App\Http\Controllers;

use App\Simbahku;
use Illuminate\Http\Request;

class SimbahkusController extends Controller
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
        $simbahku = Simbahku::all();
        return view('program.simbahku.indexSimbahku', compact('simbahku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('program.simbahku.createSimbahku');
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
        Simbahku::create($request->all());

        return redirect('/simbahku')->with('status', 'Data Penerima SIMBAHKU berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Simbahku  $simbahku
     * @return \Illuminate\Http\Response
     */
    public function show(Simbahku $simbahku)
    {
        //
        return view('program.simbahku.showSimbahku', compact('simbahku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Simbahku  $simbahku
     * @return \Illuminate\Http\Response
     */
    public function edit(Simbahku $simbahku)
    {
        //
        return view('program.simbahku.editSimbahku', compact('simbahku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Simbahku  $simbahku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Simbahku $simbahku)
    {
        //
        Simbahku::where('id', $simbahku->id)
            ->update([
                'nama' => $request->nama,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat,
                'foto' => $request->foto,
                'status' => $request->status
            ]);

        return redirect('/simbahku')->with('status', 'Data Penerima SIMBAHKU berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Simbahku  $simbahku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simbahku $simbahku)
    {
        //
        Simbahku::destroy($simbahku->id);

        return redirect('/simbahku')->with('status', 'Data Penerima SIMBAHKU berhasil dihapus!');
    }
}
