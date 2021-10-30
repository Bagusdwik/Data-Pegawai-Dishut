@extends('layouts.menu')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Form Pegawai Dinas Kehutanan</h2>
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Isi data</strong>
                </div>
                <form action="{{ url('/dishut/create') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  @if (session('Pesan'))
                    <div class="alert alert-success">
                        {{ session('Pesan') }}
                    </div>
                  @endif
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3 ">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" style="text-transform: uppercase" class="form-control" autofocus required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="nip">NIP</label>
                        <input type="text" id="nip" name="nip" class="form-control" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="nama_jabatan">Nama Jabatan</label>
                        <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" required>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="anggota">Anggota</label>
                          <select class="custom-select" id="anggota" name="anggota" required>
                            <option value="">-Pilih-</option>
                            <option value="PNS">PNS</option>
                            <option value="CPNS">CPNS</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="golongan">Golongan Ruang</label>
                          <select class="custom-select" id="golongan" name="golongan" required="">
                            <option value="">-Pilih-</option>
                            <option value="IA">IA</option>  
                            <option value="IB">IB</option>  
                            <option value="IC">IC</option>  
                            <option value="ID">ID</option>  
                            <option value="IIA">IIA</option>  
                            <option value="IIB">IIB</option>  
                            <option value="IIC">IIC</option>  
                            <option value="IID">IID</option>  
                            <option value="IIIA">IIIA</option>  
                            <option value="IIIB">IIIB</option>  
                            <option value="IIIC">IIIC</option>  
                            <option value="IIID">IIID</option>  
                            <option value="IVA">IVA</option>  
                            <option value="IVB">IVB</option>  
                            <option value="IVC">IVC</option>  
                            <option value="IVD">IVD</option>  
                            <option value="IVE">IVE</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="eselon">Eselon</label>
                          <input type="text" id="eselon" name="eselon" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="kelas_jabatan">Kelas Jabatan</label>
                          <input type="text" id="kelas_jabatan" name="kelas_jabatan" class="form-control" required>
                        </div>
                      </div>
                      
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="jenis_kelamin1" name="jenis_kelamin" value="L" class="custom-control-input" checked>
                          <label class="custom-control-label" for="jenis_kelamin1">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="P" class="custom-control-input">
                          <label class="custom-control-label" for="jenis_kelamin2">Perempuan</label>
                        </div>
                      </div>
                      <div class="form-group mb-3">
                        <label for="jenis_jabatan">Jenis Jabatan</label>
                        <select class="custom-select" id="jenis_jabatan" name="jenis_jabatan" required>
                          <option value="">-Pilih-</option>
                          <option value="Jabatan Struktural">Jabatan Struktural</option>
                          <option value="Jabatan Fungsional">Jabatan Fungsional</option>
                          <option value="Jabatan Fungsional">Jabatan Fungsional</option>
                        </select>
                      </div>
                      <div class="form-group mb-3 ">
                        <label for="unit_kerja">Unit Kerja</label>
                        <input type="text" id="unit_kerja" name="unit_kerja" class="form-control" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="4.5" required></textarea>
                      </div>
                    </div>
                  </div>
                      <div class="form-group mb-3">
                        <div class="float-right">      
                          <button type="submit" class="btn mb-2 btn-success">Simpan</button>
                          <button type="reset" class="btn mb-2 btn-danger">Batal</button>
                        </div>
                      </div>
                  </form>
                </div>
                </form>
              </div>
            </div>
          </div>      
        </div>
</main>
@endsection