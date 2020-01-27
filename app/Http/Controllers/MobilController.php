<?php

namespace App\Http\Controllers;
use App\Teacher;
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher= Teacher::all();
        return view('mobils.create',compact('teacher'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobils = new Mobil;
        $mobils->nama_kendarann=$request->nama_kendarann;
        $mobils->teacher_id=$request->teacher_id;
        $mobils->warna=$request->warna;
        $mobils->no_polisi=$request->no_polisi;
        

        $request->validate([
            'nama_kendarann'=>'required',
            'teacher_id'=>'required',
            'no_polisi'=>'required|min:3|max:8',
            'warna'=>'required',
            
        ]);

        $mobils->save();


        return redirect('/mobils')->with('status','Data Kendaraan Siswa berhasil ditambahkan');
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
        $teacher= Teacher::all();
        return view('mobils.edit',['mobils'=>$mobil],compact('teacher'));
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
    Mobil::where('id',$mobil->id)
            ->update([
                'nama_kendarann'=>$request->nama_kendarann,
                'teacher_id'=>$request->teacher_id,
                'no_polisi'=>$request->no_polisi,
                'warna'=>$request->warna,
                
                
                
            ]);
            $request->validate([
                'nama_kendarann'=>'required',
                'teacher_id'=>'required',
                 'no_polisi'=>'required|min:3|max:8',
                'warna'=>'required',
                
            ]);
            return redirect('/mobils')->with('status','Data Kendaraan Siswa berhasil diubah'); 
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
