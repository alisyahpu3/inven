@extends('layouts.app')

@section('title','E-Sarinah-Dashboard')
@section('header','Input Barang Keluar')
@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
    <div class="col-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <form class="form">
              <div class="row">
                <!-- Penanggung Jawab -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="pic-column" class="form-label">Penanggung Jawab</label>
                    <input type="text" id="pic-column" class="form-control" placeholder="Penanggung Jawab" name="pic-column" required />
                  </div>
                </div>

                <!-- Kategori -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="kategori-column" class="form-label">Kategori</label>
                    <select id="kategori-column" class="form-select" name="kategori-column" style="max-height: 150px; overflow-y: auto;" required>
                      <option value="" selected disabled>Pilih Kategori</option>
                      <option value="Gudang">Gudang</option>
                      <option value="Dapur">Dapur</option>
                      <option value="Kantor">Kantor</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Barang -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="barang-column" class="form-label">Barang</label>
                    <select id="barang-column" class="form-select" name="barang-column" style="max-height: 150px; overflow-y: auto;" required>
                      <option value="" selected disabled>Pilih Barang</option>
                    </select>
                  </div>
                </div>

                <!-- Sumber Dana -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="sumber-dana-column" class="form-label">Sumber Dana</label>
                    <select id="sumber-dana-column" class="form-select" name="sumber-dana-column" style="max-height: 150px; overflow-y: auto;" required>
                      <option value="" selected disabled>Pilih Sumber Dana</option>
                      <option value="APBN">APBN</option>
                      <option value="APBD">APBD</option>
                      <option value="Donasi">Donasi</option>
                      <option value="Hibah">Hibah</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Jumlah -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="jumlah-column" class="form-label">Jumlah</label>
                    <input type="number" id="jumlah-column" class="form-control" placeholder="Jumlah" name="jumlah-column" required />
                  </div>
                </div>

                <!-- Kondisi -->
<div class="col-md-6 col-12">
  <div class="form-group">
      <label for="kondisi-column" class="form-label">Kondisi</label>
      <select id="kondisi-column" class="form-control" name="kondisi-column" required>
          <option value="" disabled selected>Pilih Kondisi</option>
          <option value="Baru">Baru</option>
          <option value="Rusak">Rusak</option>
          <option value="Diperbaiki">Diperbaiki</option>
      </select>
  </div>
</div>


              <div class="row">
                <!-- Lokasi -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="lokasi-column" class="form-label">Lokasi</label>
                    <select id="lokasi-column" class="form-select" name="lokasi-column" style="max-height: 150px; overflow-y: auto;" required>
                      <option value="" selected disabled>Pilih Lokasi</option>
                      <option value="Gudang">Gudang</option>
                      <option value="Dapur">Dapur</option>
                      <option value="Kantor">Kantor</option>
                    </select>
                  </div>
                </div>

                <!-- Tanggal -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="tanggal-column" class="form-label">Tanggal</label>
                    <input type="date" id="tanggal-column" class="form-control" name="tanggal-column" required />
                  </div>
                </div>
              </div>

              
                <!-- masa pakai] -->
                <!-- Masa Pakai -->
<div class="col-md-6 col-12">
  <div class="form-group">
      <label for="masapakai-column" class="form-label">Masa Pakai</label>
      <select id="masapakai-column" class="form-control" name="masapakai-column" required>
          <option value="" disabled selected>Tahun Masa Pakai</option>
          <option value="1 tahun">1 tahun</option>
          <option value="3 tahun">3 tahun</option>
          <option value="5 tahun">5 tahun</option>
      </select>
  </div>
</div>


              <div class="row">
                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                  <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <style>
    .form-select {
  max-height: 150px; /* Tinggi maksimum dropdown */
  overflow-y: auto; /* Tambahkan scroll vertikal */
}

.form-control, .form-select {
  width: 100%; /* Pastikan semua elemen form lebar penuh */
  box-sizing: border-box; /* Menghindari masalah padding */
}

.card-body {
  padding: 2rem;
}

.form-label {
  font-weight: bold;
  margin-bottom: 0.5rem;
}

button {
  min-width: 100px; /* Konsistensi lebar tombol */
}

  </style>
</section>

  <!-- // Basic multiple Column Form section end -->

<script src="{{asset('dist/assets/static/js/components/dark.js')}}"></script>
<script src="{{asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('dist/assets/compiled/js/app.js')}}"></script>
<script src="{{asset('dist/assets/extensions/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dist/assets/extensions/parsleyjs/parsley.min.js')}}"></script>
<script src="{{asset('dist/assets/static/js/pages/parsley.js')}}"></script>

@endsection