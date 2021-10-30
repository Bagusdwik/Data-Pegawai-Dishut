<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dishut;
use App\Imports\DishutImport;
use Maatwebsite\Excel\Facades\Excel;

class dishutController extends Controller
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
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $tabel = dishut::where('nama', 'LIKE', '%'.$keyword.'%')
            ->orWhere('nip', 'LIKE', '%'.$keyword.'%')
            ->orWhere('jenis_kelamin', 'LIKE', '%'.$keyword.'%')
            ->orWhere('anggota', 'LIKE', '%'.$keyword.'%')
            ->orWhere('nama_jabatan', 'LIKE', '%'.$keyword.'%')
            ->orWhere('jabatan', 'LIKE', '%'.$keyword.'%')
            ->orWhere('unit_kerja', 'LIKE', '%'.$keyword.'%')
            ->orWhere('keterangan', 'LIKE', '%'.$keyword.'%')
            ->simplePaginate(10);
        return view('tabeldishut', compact('tabel','keyword'));
    }

    public function jabatan1(Request $request)
    {
        $tabel = dishut::where('jabatan','Jabatan Struktural')->simplePaginate(10);
        return view('tabelstruktural', compact('tabel'));
    }

    public function jabatan2(Request $request)
    {
        $tabel = dishut::where('jabatan','Jabatan Fungsional')->simplePaginate(10);
        return view('tabelfungsional', compact('tabel'));
    }

    public function jabatan3(Request $request)
    {
        $tabel = dishut::where('jabatan','Jabatan Pelaksana')->simplePaginate(10);
        return view('tabelpelaksana', compact('tabel'));
    }

    public function anggota1(Request $request)
    {
        $tabel = dishut::where('anggota','PNS')->simplePaginate(10);
        return view('tabelpns', compact('tabel'));
    }

    public function anggota2(Request $request)
    {
        $tabel = dishut::where('anggota','CPNS')->simplePaginate(10);
        return view('tabelcpns', compact('tabel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formdishut');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dishut = new dishut;

        $dishut -> nama = $request -> nama;
        $dishut -> nip = $request -> nip;
        $dishut -> anggota = $request -> anggota;
        $dishut -> jenis_kelamin = $request -> jenis_kelamin;
        $dishut -> golongan = $request -> golongan;
        $dishut -> jabatan = $request -> jenis_jabatan;
        $dishut -> eselon = $request ->eselon;
        $dishut -> nama_jabatan = $request -> nama_jabatan;
        $dishut -> kelas_jabatan = $request -> kelas_jabatan;
        $dishut -> unit_kerja = $request -> unit_kerja;
        $dishut -> keterangan = $request -> keterangan;
        $dishut -> save();

        return redirect('formdishut')->with('Pesan', 'Data Berhasil disimpan!');
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
    public function edit($id_dishut)
    {
        $dishut = dishut::find($id_dishut);
        return view('edit-dishut',compact('dishut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_dishut)
    {
        $dishut = dishut::find($id_dishut);

        $dishut -> nama = $request -> nama;
        $dishut -> nip = $request -> nip;
        $dishut -> anggota = $request -> anggota;
        $dishut -> jenis_kelamin = $request -> jenis_kelamin;
        $dishut -> golongan = $request -> golongan;
        $dishut -> jabatan = $request -> jenis_jabatan;
        $dishut -> eselon = $request ->eselon;
        $dishut -> nama_jabatan = $request -> nama_jabatan;
        $dishut -> kelas_jabatan = $request -> kelas_jabatan;
        $dishut -> unit_kerja = $request -> unit_kerja;
        $dishut -> keterangan = $request -> keterangan;
        $dishut -> save();

        return redirect('tabeldishut')->with('Pesan', 'Data Berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_dishut)
    {
        $dishut = dishut::find($id_dishut);
        $dishut->delete();
        return redirect('tabeldishut');
    }

    public function import(request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('dishut', $namafile);
        Excel::import(new DishutImport, public_path('/dishut/'.$namafile));
        return redirect('tabeldishut')->with('Psn', 'Data Berhasil diimport!');
    }
}
