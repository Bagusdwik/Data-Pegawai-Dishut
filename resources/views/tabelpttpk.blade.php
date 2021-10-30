@extends('layouts.menu')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Data Pegawai PTT-PK</h2>
              <a class="btn btn-primary" href="{{ route('formpttpk') }}">Tambah Data</a>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#defaultModal">
                Import Data
              </button>

              <!-- Modal -->
              <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="defaultModalLabel">Import Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="/pttpkimport" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body"> 
                        <div class="form-group">
                          <input type="file" name="file" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn mb-2 btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <p></p>
              @if (session('Pesan'))
                    <div class="alert alert-success">
                        {{ session('Pesan') }}
                    </div>
              @endif
              @if (session('Psn'))
                    <div class="alert alert-success">
                        {{ session('Psn') }}
                    </div>
              @endif
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">
                      <form action="{{ url('tabelpttpk') }}" method="GET">
                        <div class=" float-right mb-1">
                          <div class="input-group">
                            <div class="form-outline">
                              <input type="text" id="keyword" name="keyword" class="form-control" value="{{ $keyword }}" />
                            </div>
                            <button type="submit" class="btn btn-info">
                              Search
                            </button>
                          </div>
                        </div>
                      </form>
                      <!-- table -->
                      <table class="table datatables" id="dataTable-1">
                        <thead class="thead-dark">
                          <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Niptt-pk</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat</th>
                            <th>Tanggal lahir</th>
                            <th>Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Jabatan</th>
                            <th>UPT</th>
                            <th>Keterangan</th>
                            <th class=" text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($pttpk as $tabel)
                            <tr>
                              <td>{{ $tabel['id_pttpk'] }}</td>
                              <td>{{ $tabel['nama'] }}</td>
                              <td>{{ $tabel['nipttpk'] }}</td>
                              <td>{{ $tabel['jenis_kelamin'] }}</td>
                              <td>{{ $tabel['tempat'] }}</td>
                              <td>{{ $tabel['tanggallahir'] }}</td>
                              <td>{{ $tabel->pendidikan }}</td>
                              <td>{{ $tabel['jurusan'] }}</td>
                              <td>{{ $tabel['jabatan'] }}</td>
                              <td>{{ $tabel->upt }}</td>
                              <td>{{ $tabel['keterangan'] }}</td>
                              <td class=" text-center">
                                <a class=" text-decoration-none btn btn-primary" href="{{ url('editpttpk/'.$tabel->id_pttpk) }}"><i class="fe fe-edit"></i></a>
                                <form method="GET" action="{{ url('data/deletepttpk', $tabel->id_pttpk ) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fe fe-trash-2"></i></button>
                                </form>
                              </td>
                            </tr>  
                          @endforeach
                        </tbody>
                      </table>
                      {{ $pttpk->links() }}
                    </div>
                  </div>
                </div> <!-- simple table -->
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>
@endsection