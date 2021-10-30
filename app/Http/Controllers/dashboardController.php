<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dishut;
use App\Models\pttpk;

class dashboardController extends Controller
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
        $dishut = dishut::All()->count();
        $laki = dishut::where('jenis_kelamin','L')->count();
        $perempuan = dishut::where('jenis_kelamin','P')->count();
        $struktural= dishut::where('jabatan','Jabatan Struktural')->count();
        $fungsional= dishut::where('jabatan','Jabatan Fungsional')->count();
        $pelaksana= dishut::where('jabatan','Jabatan Pelaksana')->count();
        $pns =dishut::where('anggota','PNS')->count();
        $cpns = dishut::where('anggota','CPNS')->count();

        $pphh = pttpk::where('upt','UPT Pelayanan Pengelolaan Hasil Hutan')->count();
        $jk_pphh = pttpk::where('jenis_kelamin','L')
            ->where('upt','UPT Pelayanan Pengelolaan Hasil Hutan')->count();
        $jk_pphh1 = pttpk::where('jenis_kelamin','P')
            ->where('upt','UPT Pelayanan Pengelolaan Hasil Hutan')->count();
        
        $tahura = pttpk::where('upt','UPT Tahura Raden Soerjo')->count(); 
        $jk_tahura = pttpk::where('jenis_kelamin','L')
            ->where('upt','UPT Tahura Raden Soerjo')->count();
        $jk_tahura1 = pttpk::where('jenis_kelamin','P')
            ->where('upt','UPT Tahura Raden Soerjo')->count();   
        
        $pth = pttpk::where('upt','UPT Perbenihan Tanaman Hutan')->count(); 
        $jk_pth = pttpk::where('jenis_kelamin','L')
            ->where('upt','UPT Perbenihan Tanaman Hutan')->count();
        $jk_pth1 = pttpk::where('jenis_kelamin','P')
            ->where('upt','UPT Perbenihan Tanaman Hutan')->count(); 
        
        $sd = pttpk::where('pendidikan','SD')->count();
        $smp = pttpk::where('pendidikan','SMP')->count();
        $sltp = pttpk::where('pendidikan','SLTP')->count();
        $sma = pttpk::where('pendidikan','SMA')->count();
        $smea = pttpk::where('pendidikan','SMEA')->count();
        $ma = pttpk::where('pendidikan','MA')->count();
        $smu = pttpk::where('pendidikan','SMU')->count();
        $slta = pttpk::where('pendidikan','SLTA')->count();
        $smk = pttpk::where('pendidikan','SMK')->count();
        $stm = pttpk::where('pendidikan','STM')->count();
        
        $d3 = pttpk::where('pendidikan','D III')->count();
        $d1 = pttpk::where('pendidikan','D1')->count();
        $sarjana = pttpk::where('pendidikan','S1')->count();
        return view('dashboard', compact('stm','smk','slta','smu','ma','smea','sltp','sd','smp','sma','d3','d1','sarjana','jk_pth1','jk_pth','pth','jk_tahura1','jk_tahura','tahura','jk_pphh1','jk_pphh','pphh','cpns','pns','dishut','perempuan','laki','fungsional','struktural','pelaksana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
