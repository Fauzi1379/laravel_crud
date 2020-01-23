<?php

namespace App\Http\Controllers;

use App\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json(){
        return Datatables::of(Teacher::all())->make(true);
    }
    
    public function index()
    {
        $mobils = Mobil::all();
        return view('mobils.index', ['mobils' => $mobils]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_kendarann' => 'required',
                'no_polisi' => 'required|size:8',
                'warna' => 'required'
            ]
            );

        $mobil = new Mobil;
        $mobil->nama_kendarann=$request->nama_kendarann;
        $mobil->no_polisi=$request->no_polisi;
        $mobil->warna=$request->warna;

        //

        $mobil->save();


        return redirect('/mobils')->with('status', 'Data pengajar berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        return view('mobils.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        return view('mobils.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $mobil)
    {
        
        Mobil::where('id', $mobil->id)
                ->update([
                    'nama_kendarann' => $request->nama_kendarann,
                    'no_polisi' => $request->no_polisi,
                    'warna' => $request->warna
                ]);
                $request->validate(
                    [
                        'nama_kendarann' => 'required',
                        'no_polisi' => 'required|size:8',
                        'warna' => 'required'
                    ]
                    );
        return redirect('/mobils')->with('status', 'Data pengajar berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
        Mobil::destroy($mobil->id);
        return redirect('/mobils')->with('status', 'Data pengajar berhasil dihapus');
    }
}
