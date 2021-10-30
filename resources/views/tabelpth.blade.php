@extends('layouts.menu')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Data Pegawai UPT PTH</h2>
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
                            <th>Niptt-pk</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat</th>
                            <th>Tanggal lahir</th>
                            <th>Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Jabatan</th>
                            <th>UPT</th>
                            <th>Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($pth as $tabel)
                            <tr>
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
                            </tr>  
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> <!-- simple table -->
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
</main>
@endsection