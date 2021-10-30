@extends('layouts.menu')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <!-- <h2>Section title</h2> -->
              <h2 class="h3 page-title">Dashboard</h2>
              
              <!-- info small box -->
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong>Dinas Kehutanan</strong>
                      <a class="float-right small text-muted" href="{{ route('tabeldishut') }}">View all</a>
                    </div>
                    <div class="card-body ">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="h2 mb-0">{{ $dishut }}</span>
                          <p class="mb-0">Jumlah Pegawai</p>
                        </div>
                        <div class="col-auto">
                          <span class="fe fe-32 fe-users text-muted mb-0"></span>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                      <div class="col-md-6 text-center mt-3">
                        <p class="mb-1">Laki-Laki</p>
                        <h6 class="mb-0 h3">{{ $laki }}</h6>
                      </div>
                      <div class="col-md-6 text-center mt-3">
                        <p class="mb-1">Perempuan</p>
                        <h6 class="mb-0 h3">{{ $perempuan }}</h6>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong>Jabatan</strong>
                    </div>
                    <div class="card-body ">
                      <div class="row">
                      <div class="col-md-4 text-center mt-3">
                        <p class="mb-1">Struktural</p>
                        <h6 class="mb-0 h4">{{ $struktural }}</h6>
                        <a class=" text-center text-muted pt-2"  href="{{ route('tabelstruktural') }}">View</a>
                      </div>
                      <div class="col-md-4 text-center mt-3">
                        <p class="mb-1">Fungsional</p>
                        <h6 class="mb-0 h4">{{ $fungsional }}</h6>
                        <a class=" text-center text-muted pt-2"  href="{{ route('tabelfungsional') }}">View</a>
                      </div>
                      <div class="col-md-4 text-center mt-3">
                        <p class="mb-1">Pelaksana</p>
                        <h6 class="mb-0 h4">{{ $pelaksana }}</h6>
                        <a class=" text-center text-muted pt-2"  href="{{ route('tabelpelaksana') }}">View</a>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong>Anggota</strong>
                    </div>
                    <div class="card-body ">
                      <div class="row">
                      <div class="col-md-6 text-center mt-3">
                        <p class="mb-1">PNS</p>
                        <h6 class="mb-0 h4">{{ $pns }}</h6>
                        <a class=" text-center text-muted pt-2"  href="{{ route('tabelpns') }}">View</a>
                      </div>
                      <div class="col-md-6 text-center mt-3">
                        <p class="mb-1">CPNS</p>
                        <h6 class="mb-0 h4">{{ $cpns }}</h6>
                        <a class=" text-center text-muted pt-2"  href="{{ route('tabelcpns') }}">View</a>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- end section -->
              <p><strong>Data Sebaran PTT-PK</strong></p>
              <!-- widgets -->
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong>UPT PPHH</strong>
                      <a class="float-right small text-muted" href="{{ route('tabelpphh') }}">View all</a>
                    </div>
                    <div class="card-body ">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="h2 mb-0">{{ $pphh }}</span>
                          <p class="mb-0">Jumlah Pegawai</p>
                        </div>
                        <div class="col-auto">
                          <span class="fe fe-32 fe-users text-muted mb-0"></span>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                      <div class="col-md-6 text-center mt-3">
                        <p class="mb-1">Laki-Laki</p>
                        <h6 class="mb-0 h3">{{ $jk_pphh }}</h6>
                      </div>
                      <div class="col-md-6 text-center mt-3">
                        <p class="mb-1">Perempuan</p>
                        <h6 class="mb-0 h3">{{ $jk_pphh1 }}</h6>
                      </div>
                      </div>
                    </div>
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong>UPT Tahura</strong>
                      <a class="float-right small text-muted" href="{{ route('tabeltahura') }}">View all</a>
                    </div>
                    <div class="card-body ">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="h2 mb-0">{{ $tahura }}</span>
                          <p class="mb-0">Jumlah Pegawai</p>
                        </div>
                        <div class="col-auto">
                          <span class="fe fe-32 fe-users text-muted mb-0"></span>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                      <div class="col-md-6 text-center mt-3">
                        <p class="mb-1">Laki-Laki</p>
                        <h6 class="mb-0 h3">{{ $jk_tahura }}</h6>
                      </div>
                      <div class="col-md-6 text-center mt-3">
                        <p class="mb-1">Perempuan</p>
                        <h6 class="mb-0 h3">{{ $jk_tahura1 }}</h6>
                      </div>
                      </div>
                    </div>
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong>UPT PTH</strong>
                      <a class="float-right small text-muted" href="{{ route('tabelpth') }}">View all</a>
                    </div>
                    <div class="card-body ">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="h2 mb-0">{{ $pth }}</span>
                          <p class="mb-0">Jumlah Pegawai</p>
                        </div>
                        <div class="col-auto">
                          <span class="fe fe-32 fe-users text-muted mb-0"></span>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                      <div class="col-md-6 text-center mt-3">
                        <p class="mb-1">Laki-Laki</p>
                        <h6 class="mb-0 h3">{{ $jk_pth }}</h6>
                      </div>
                      <div class="col-md-6 text-center mt-3">
                        <p class="mb-1">Perempuan</p>
                        <h6 class="mb-0 h3">{{ $jk_pth1 }}</h6>
                      </div>
                      </div>
                    </div>
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
              </div> <!-- end section -->
              <div class="row">
              <div class="col-md-12 mb-12">
                <div class="card shadow">
                  <div class="card-header">
                    <strong>Pendidikan PTT-PK</strong>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3 text-center mb-3 border-right">
                        <p class="text-muted mb-1">SD</p>
                        <h6 class="mb-1 h4">{{ $sd }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3 border-right">
                        <p class="text-muted mb-1">SLTP</p>
                        <h6 class="mb-1 h4">{{ $sltp }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3 border-right">
                        <p class="text-muted mb-1">SMP</p>
                        <h6 class="mb-1 h4">{{ $smp }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3">
                        <p class="text-muted mb-1">SMA</p>
                        <h6 class="mb-1 h4">{{ $sma }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3 border-right">
                        <p class="text-muted mb-1">SMEA</p>
                        <h6 class="mb-1 h4">{{ $smea }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3 border-right">
                        <p class="text-muted mb-1">MA</p>
                        <h6 class="mb-1 h4">{{ $ma }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3 border-right">
                        <p class="text-muted mb-1">SMU</p>
                        <h6 class="mb-1 h4">{{ $smu }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3">
                        <p class="text-muted mb-1">SLTA</p>
                        <h6 class="mb-1 h4">{{ $slta }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3 border-right">
                        <p class="text-muted mb-1">SMK</p>
                        <h6 class="mb-1 h4">{{ $smk }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3 border-right">
                        <p class="text-muted mb-1">STM</p>
                        <h6 class="mb-1 h4">{{ $stm }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3 border-right">
                        <p class="text-muted mb-1">D1</p>
                        <h6 class="mb-1 h4">{{ $d1 }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3">
                        <p class="text-muted mb-1">D III</p>
                        <h6 class="mb-1 h4">{{ $d3 }}</h6>
                      </div>
                      <div class="col-3 text-center mb-3">
                        <p class="text-muted mb-1">S1</p>
                        <h6 class="mb-1 h4">{{ $sarjana }}</h6>
                      </div>
                    </div>
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
              </div>
              </div>
                  
            </div> <!-- .row -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
      </main> <!-- main -->
@endsection