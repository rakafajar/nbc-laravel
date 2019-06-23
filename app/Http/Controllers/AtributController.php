<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AtributModel;
use DB;

class AtributController extends Controller
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
        $atribut = AtributModel::all();
        return view('atribut.index', compact('atribut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atribut.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atribut = new AtributModel();
        $atribut->kode_atribut = $request['kode_atribut'];
        $atribut->nama_atribut = $request['nama_atribut'];
        $atribut->save();

        return redirect(route('atribut.index'))->with('success', 'Data Berhasil Disimpan!');
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
        $atribut = AtributModel::find($id);
        return view('atribut.edit', compact('atribut', $atribut));
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
        $atribut = AtributModel::find($id);
        $atribut->kode_atribut = $request['kode_atribut'];
        $atribut->nama_atribut = $request['nama_atribut'];
        $atribut->update();

        return redirect(route('atribut.index'))->with('info', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_atribut')->where('id_atribut', '=', $id)->delete();
        return back()->with('warning', 'Data Berhasil Dihapus!');
    }
}
