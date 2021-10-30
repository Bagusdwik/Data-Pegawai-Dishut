@extends('layouts.menu')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Data Pegawai Dinas Kehutanan</h2>
              <a class="btn btn-primary" href="{{ route('formdishut') }}">Tambah Data</a>

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
                    <form action="/import" method="POST" enctype="multipart/form-data">
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
                      <form action="{{ url('tabeldishut') }}" method="GET">
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
                            <th>NIP</th>
                            <th>Anggota</th>
                            <th>Jenis Kelamin</th>
                            <th>Gol. Ruang</th>
                            <th>Jenis Jabatan</th>
                            <th>Eselon</th>
                            <th>Nama Jabatan</th>
                            <th>Kelas Jabatan</th>
                            <th>Unit Kerja</th>
                            <th>Keterangan</th>
                            <th class=" text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($tabel as $tabel1)
                            <tr>
                              <td>{{ $tabel1['id_dishut'] }}</td>
                              <td>{{ $tabel1['nama'] }}</td>
                              <td>{{ $tabel1['nip'] }}</td>
                              <td>{{ $tabel1->anggota }}</td>
                              <td>{{ $tabel1['jenis_kelamin'] }}</td>
                              <td>{{ $tabel1->golongan }}</td>
                              <td>{{ $tabel1->jabatan }}</td>
                              <td>{{ $tabel1['eselon'] }}</td>
                              <td>{{ $tabel1['nama_jabatan'] }}</td>
                              <td>{{ $tabel1['kelas_jabatan'] }}</td>
                              <td>{{ $tabel1['unit_kerja'] }}</td>
                              <td>{{ $tabel1['keterangan'] }}</td>
                              <td class=" text-center">
                                <a class=" text-decoration-none btn btn-primary" href="{{ url('edit/'.$tabel1->id_dishut) }}"><i class="fe fe-edit"></i></a>
                                <form method="GET" action="{{ url('post/delete', $tabel1->id_dishut ) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fe fe-trash-2"></i></button>
                                </form>
                              </td>
                            </tr>  
                          @endforeach
                        </tbody>
                      </table>
                      <div class=" float-right">
                        {{ $tabel->links() }}
                      </div>
                    </div>
                  </div>
                </div> <!-- simple table -->
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <script>
          $('#dataTable-1').DataTable(
          {
            autoWidth: true,
            "lengthMenu": [
              [16, 32, 64, -1],
              [16, 32, 64, "All"]
            ]
          });
        </script>
        <script src={{ asset('js/jquery.dataTables.min.js') }}></script>
        <script src={{ asset('js/dataTables.bootstrap4.min.js') }}></script>
    </main>
@endsection