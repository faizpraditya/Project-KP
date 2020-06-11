<?php

namespace App\Http\Controllers;

use App\Karyawan;
use App\Relawan;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class RelawansController extends Controller
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
        $relawan = Relawan::all();
        return view('relawan.indexRelawan', compact('relawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('relawan.createRelawan');
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
        Relawan::create($request->all());

        return redirect('/relawan')->with('status', 'Data Relawan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Relawan  $relawan
     * @return \Illuminate\Http\Response
     */
    public function show(Relawan $relawan)
    {
        //
        return view('relawan.showRelawan', compact('relawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Relawan  $relawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Relawan $relawan)
    {
        //
        return view('relawan.editRelawan', compact('relawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Relawan  $relawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relawan $relawan)
    {
        //
        Relawan::where('id', $relawan->id)
            ->update([
                'nama' => $request->nama,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'profesi' => $request->profesi,
                'foto' => $request->foto,
                'status' => $request->status
            ]);

        return redirect('/relawan')->with('status', 'Data Relawan berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Relawan  $relawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relawan $relawan)
    {
        //
        Relawan::destroy($relawan->id);

        return redirect('/relawan')->with('status', 'Data Relawan berhasil dihapus!');
    }
}
