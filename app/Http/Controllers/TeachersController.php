<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
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
                'nik' => 'required|size:16',
                'nama' => 'required'
            ]
            );

        $teacher = new Teacher;
        $teacher->nik=$request->nik;
        $teacher->nama=$request->nama;
        $teacher->alamat=$request->alamat;

        //

        $teacher->save();


        return redirect('/teachers')->with('status', 'Data pengajar berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        Teacher::where('id', $teacher->id)
                ->update([
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'alamat' => $request->alamat
                ]);
        
        return redirect('/teachers')->with('status', 'Data pengajar berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($teacher->id);
        return redirect('/teachers')->with('status', 'Data pengajar berhasil dihapus');
    }
}
