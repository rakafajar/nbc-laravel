<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiModel;
use App\AtributModel;
use DB;
use App\AtributJoinNilaiModel;

class NilaiController extends Controller
{
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
        $nilai = NilaiModel::all();
        $atribut_nilai = AtributJoinNilaiModel::all();
        return view('nilai.index', compact('nilai', 'atribut_nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $atribut = AtributModel::all();
        return view('nilai.create', compact('atribut'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nilai = new NilaiModel();
        $nilai->kode_nilai = $request['kode_nilai'];
        $nilai->atribut_id = $request['atribut_id'];
        $nilai->nama_nilai = $request['nama_nilai'];
        $nilai->save();

        return redirect(route('nilai.index'))->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = NilaiModel::find($id);
        $atribut = AtributModel::all();
        return view('nilai.edit', compact('nilai', 'atribut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nilai = NilaiModel::find($id);
        $nilai->kode_nilai = $request['kode_nilai'];
        $nilai->atribut_id = $request['atribut_id'];
        $nilai->nama_nilai = $request['nama_nilai'];
        $nilai->update();

        return redirect(route('nilai.index'))->with('info', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_nilai')->where('id_nilai', '=', $id)->delete();
        return back()->with('warning', 'Data Berhasil Dihapus!');
    }
}
