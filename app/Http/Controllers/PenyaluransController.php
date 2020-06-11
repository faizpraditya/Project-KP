<?php

namespace App\Http\Controllers;

use App\Penyaluran;
use App\Bus;
use App\Kubah;
use App\Simbahku;
use App\Lain;
use Illuminate\Http\Request;

class PenyaluransController extends Controller
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
        $penyaluran = Penyaluran::all();
        return view('penyaluran.indexPenyaluran', compact('penyaluran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $penyaluran = Penyaluran::all();
        $bus = Bus::all();
        $kubah = Kubah::all();
        $simbahku = Simbahku::all();
        $lain = Lain::all();

        return view('penyaluran.createPenyaluran', compact(['bus', 'kubah', 'simbahku', 'lain']));
    }

    public function createBus()
    {
        //
        $penyaluran = Penyaluran::all();
        $bus = Bus::all();

        return view('penyaluran.createPenyaluranBus', compact('bus'));
    }
    public function createKubah()
    {
        //
        $penyaluran = Penyaluran::all();
        $kubah = Kubah::all();

        return view('penyaluran.createPenyaluranKubah', compact('kubah'));
    }
    public function createSimbahku()
    {
        //
        $penyaluran = Penyaluran::all();
        $simbahku = Simbahku::all();

        return view('penyaluran.createPenyaluranSimbahku', compact('simbahku'));
    }
    public function createLain()
    {
        //
        $penyaluran = Penyaluran::all();
        $lain = Lain::all();

        return view('penyaluran.createPenyaluranLain', compact('lain'));
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
        Penyaluran::create($request->all());

        return redirect('/penyaluran')->with('status', 'Data Penyaluran berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penyaluran  $penyaluran
     * @return \Illuminate\Http\Response
     */
    public function show(Penyaluran $penyaluran)
    {
        //
        return view('penyaluran.showPenyaluran', compact('penyaluran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penyaluran  $penyaluran
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyaluran $penyaluran)
    {
        //
        // $donatur = Donatur::all();

        $bus = Bus::all();
        $kubah = Kubah::all();
        $simbahku = Simbahku::all();
        $lain = Lain::all();

        if ($penyaluran->program == 'BUS') {
            return view('penyaluran.editPenyaluran', compact(['penyaluran', 'bus']));
        } else if ($penyaluran->program == 'KUBAH') {
            return view('penyaluran.editPenyaluran', compact(['penyaluran', 'kubah']));
        } else if ($penyaluran->program == 'SIMBAHKU') {
            return view('penyaluran.editPenyaluran', compact(['penyaluran', 'simbahku']));
        } else {
            return view('penyaluran.editPenyaluran', compact(['penyaluran', 'lain']));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penyaluran  $penyaluran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyaluran $penyaluran)
    {
        //
        Penyaluran::where('id', $penyaluran->id)
            ->update([
                'program' => $request->program,
                'penerima' => $request->penerima,
                'tgl_penyaluran' => $request->tgl_penyaluran,
                'png_jawab' => $request->png_jawab,
                'nominal' => $request->nominal,
                'keterangan' => $request->keterangan,
                'foto' => $request->foto,
            ]);

        return redirect('/penyaluran')->with('status', 'Data Penyaluran berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penyaluran  $penyaluran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyaluran $penyaluran)
    {
        //
        Penyaluran::destroy($penyaluran->id);

        return redirect('/penyaluran')->with('status', 'Data Penyaluran berhasil dihapus!');
    }
}
