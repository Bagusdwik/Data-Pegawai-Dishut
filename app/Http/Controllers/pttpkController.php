<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pttpk;
use App\Imports\PttpkImport;
use Maatwebsite\Excel\Facades\Excel;

class pttpkController extends Controller
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
        $pttpk = pttpk::where('nama', 'LIKE', '%'.$keyword.'%')
            ->orWhere('nipttpk', 'LIKE', '%'.$keyword.'%')
            ->orWhere('jenis_kelamin', 'LIKE', '%'.$keyword.'%')
            ->orWhere('jabatan', 'LIKE', '%'.$keyword.'%')
            ->orWhere('tempat', 'LIKE', '%'.$keyword.'%')
            ->orWhere('jurusan', 'LIKE', '%'.$keyword.'%')
            ->orWhere('upt', 'LIKE', '%'.$keyword.'%')
            ->orWhere('pendidikan', 'LIKE', '%'.$keyword.'%')
            ->orWhere('keterangan', 'LIKE', '%'.$keyword.'%')
            ->simplePaginate(10);
        return view('tabelpttpk', compact('pttpk','keyword'));
    }

    public function import(request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('pttpk', $namafile);
        Excel::import(new pttpkImport, public_path('/pttpk/'.$namafile));
        return redirect('tabelpttpk')->with('Psn', 'Data berhasil diimport!');
    }

    public function pphh()
    {
        $pphh = pttpk::where('upt','UPT Pelayanan Pengelolaan Hasil Hutan')->get();
        return view('tabelpphh', compact('pphh'));
    }

    public function tahura()
    {
        $tahura = pttpk::where('upt','UPT Tahura Raden Soerjo')->get();
        return view('tabeltahura', compact('tahura'));
    }

    public function pth()
    {
        $pth = pttpk::where('upt','UPT Perbenihan Tanaman Hutan')->get();
        return view('tabelpth', compact('pth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formpttpk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pttpk = new pttpk;

        $pttpk -> nama = $request -> nama;
        $pttpk -> nipttpk = $request -> nipttpk;
        $pttpk -> jenis_kelamin = $request -> jenis_kelamin;
        $pttpk -> tempat = $request -> tempat;
        $pttpk -> tanggallahir = $request -> tanggal;
        $pttpk -> pendidikan = $request -> pendidikan;
        $pttpk -> jurusan = $request -> jurusan;
        $pttpk -> jabatan = $request -> jabatan;
        $pttpk -> upt = $request -> upt;
        $pttpk -> keterangan = $request -> keterangan;
        $pttpk -> save();

        return redirect('formpttpk')->with('Pesan', 'Data Berhasil disimpan!');
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
    public function edit($id_pttpk)
    {
        $pttpk = pttpk::find($id_pttpk);
        return view('edit-pttpk', compact('pttpk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pttpk)
    {
        $pttpk = pttpk::find($id_pttpk);
        $pttpk -> nama = $request -> nama;
        $pttpk -> nipttpk = $request -> nipttpk;
        $pttpk -> jenis_kelamin = $request -> jenis_kelamin;
        $pttpk -> tempat = $request -> tempat;
        $pttpk -> tanggallahir = $request -> tanggal;
        $pttpk -> pendidikan = $request -> pendidikan;
        $pttpk -> jurusan = $request -> jurusan;
        $pttpk -> jabatan = $request -> jabatan;
        $pttpk -> upt = $request -> upt;
        $pttpk -> keterangan = $request -> keterangan;
        $pttpk -> save();

        return redirect('tabelpttpk')->with('Pesan', 'Data Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pttpk)
    {
        $pttpk = pttpk::find($id_pttpk);
        $pttpk->delete();
        return redirect('tabelpttpk');
    }
}
