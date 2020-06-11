<?php

namespace App\Http\Controllers;

use App\Kubah;
use Illuminate\Http\Request;

class KubahsController extends Controller
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
        $kubah = Kubah::all();
        return view('program.kubah.indexKubah', compact('kubah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('program.kubah.createKubah');
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
        Kubah::create($request->all());

        return redirect('/kubah')->with('status', 'Data Penerima BUS berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kubah  $kubah
     * @return \Illuminate\Http\Response
     */
    public function show(Kubah $kubah)
    {
        //
        return view('program.kubah.showKubah', compact('kubah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kubah  $kubah
     * @return \Illuminate\Http\Response
     */
    public function edit(Kubah $kubah)
    {
        //
        return view('program.kubah.editKubah', compact('kubah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kubah  $kubah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kubah $kubah)
    {
        //
        Kubah::where('id', $kubah->id)
            ->update([
                'nama' => $request->nama,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'jns_usaha' => $request->jns_usaha,
                'dtl_usaha' => $request->dtl_usaha,
                'foto' => $request->foto,
                'status' => $request->status
            ]);

        return redirect('/kubah')->with('status', 'Data Penerima KUBAH berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kubah  $kubah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kubah $kubah)
    {
        //
        Kubah::destroy($kubah->id);

        return redirect('/kubah')->with('status', 'Data Penerima KUBAH berhasil dihapus!');
    }
}
