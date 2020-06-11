<?php

namespace App\Http\Controllers;

use App\Lain;
use Illuminate\Http\Request;

class LainsController extends Controller
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
        $lain = Lain::all();
        return view('program.lain.indexLain', compact('lain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('program.lain.createLain');
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
        Lain::create($request->all());

        return redirect('/lain')->with('status', 'Data Penerima Program Lain berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function show(Lain $lain)
    {
        //
        return view('program.lain.showLain', compact('lain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function edit(Lain $lain)
    {
        //
        return view('program.lain.editLain', compact('lain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lain $lain)
    {
        //
        Lain::where('id', $lain->id)
            ->update([
                'nama_program' => $request->nama_program,
                'nama_penerima' => $request->nama_penerima,
                'keterangan' => $request->keterangan,
                'alamat' => $request->alamat,
                'foto' => $request->foto,
                'status' => $request->status
            ]);

        return redirect('/lain')->with('status', 'Data Penerima Program Lain berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lain $lain)
    {
        //
        Lain::destroy($lain->id);

        return redirect('/lain')->with('status', 'Data Penerima Program Lain berhasil dihapus!');
    }
}
