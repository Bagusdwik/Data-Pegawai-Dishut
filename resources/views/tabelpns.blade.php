@extends('layouts.menu')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Data Anggota PNS</h2>
              <p></p>
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">
                      <!-- table -->
                      <table class="table datatables" id="dataTable-1">
                        <thead class="thead-dark">
                          <tr>
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
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($tabel as $tabel1)
                            <tr>
                              <td>{{ $tabel1['nama'] }}</td>
                              <td>{{ $tabel1['nip'] }}</td>
                              <td>{{ $tabel1->anggota}}</td>
                              <td>{{ $tabel1['jenis_kelamin'] }}</td>
                              <td>{{ $tabel1->golongan }}</td>
                              <td>{{ $tabel1->jabatan }}</td>
                              <td>{{ $tabel1['eselon'] }}</td>
                              <td>{{ $tabel1['nama_jabatan'] }}</td>
                              <td>{{ $tabel1['kelas_jabatan'] }}</td>
                              <td>{{ $tabel1['unit_kerja'] }}</td>
                              <td>{{ $tabel1['keterangan'] }}</td>
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