<?php

namespace App\Http\Controllers;

use App\Bus;
use Illuminate\Http\Request;

class BusesController extends Controller
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
        $bus = Bus::all();
        return view('program.bus.indexBus', compact('bus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('program.bus.createBus');
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
        // $bus = new Bus();

        // if ($request->hasFile('foto')) {
        //     $file = $request->file('foto');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;

        //     $file->move('uploads/program/bus/', $filename);
        //     // $bus->foto = $filename;
        // } else {
        //     return $request;
        //     $bus->foto = '';
        // }

        Bus::create($request->all());

        return redirect('/bus')->with('status', 'Data Penerima BUS berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bus)
    {
        //
        return view('program.bus.showBus', compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bus)
    {
        //
        return view('program.bus.editBus', compact('bus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bus)
    {
        //
        Bus::where('id', $bus->id)
            ->update([
                'nama' => $request->nama,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'korwil' => $request->korwil,
                'sekolah' => $request->sekolah,
                'foto' => $request->foto,
                'raport' => $request->raport,
                'status' => $request->status
            ]);

        return redirect('/bus')->with('status', 'Data Penerima BUS berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bus $bus)
    {
        //
        Bus::destroy($bus->id);

        return redirect('/bus')->with('status', 'Data Penerima BUS berhasil dihapus!');
    }
}
