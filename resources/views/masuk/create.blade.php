@extends('layouts.app')

@section('title','E-Sarinah-Dashboard')
@section('header','Input Barang Masuk')
@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
    <div class="col-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <form class="form" data-parsley-validate>
              <!-- Form Row 1 -->
              <div class="row">
                <!-- Kategori -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="kategori-column" class="form-label">Kategori</label>
                    <select id="kategori-column" class="form-select" name="kategori-column" required>
                      <option value="" selected disabled>Pilih Kategori</option>
                      <option value="Elektronik">Elektronik</option>
                      <option value="Furniture">Furniture</option>
                      <option value="Alat Tulis">Alat Tulis</option>
                      <option value="Peralatan">Peralatan</option>
                    </select>
                  </div>
                </div>
                <!-- Barang -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="barang-column" class="form-label">Barang</label>
                    <input type="text" id="barang-column" class="form-control" placeholder="Barang" name="barang-column" required />
                  </div>
                </div>
              </div>

              <!-- Form Row 2 -->
              <div class="row">
                <!-- Sumber Dana -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="sumber-dana-column" class="form-label">Sumber Dana</label>
                    <input type="text" id="sumber-dana-column" class="form-control" placeholder="Sumber Dana" name="sumber-dana-column" required />
                  </div>
                </div>
                <!-- Jumlah -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="jumlah-column" class="form-label">Jumlah</label>
                    <input type="number" id="jumlah-column" class="form-control" placeholder="Jumlah" name="jumlah-column" required />
                  </div>
                </div>
              </div>

              <!-- Form Row 3 -->
              <div class="row">
                <!-- Kondisi -->
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

                <!-- Lokasi -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="lokasi-column" class="form-label">Lokasi</label>
                    <select id="lokasi-column" class="form-select" name="lokasi-column" required>
                      <option value="" selected disabled>Pilih Lokasi</option>
                      <option value="Gudang">Gudang</option>
                      <option value="Dapur">Dapur</option>
                      <option value="Kantor">Kantor</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Form Row 4 -->
              <div class="row">
                <!-- Tanggal -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="tanggal-column" class="form-label">Tanggal</label>
                    <input type="date" id="tanggal-column" class="form-control" name="tanggal-column" required />
                  </div>
                </div>
              </div>

              <!-- Submit & Reset Buttons -->
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
</section>

  <!-- // Basic multiple Column Form section end -->
</div>
<script src="{{asset('dist/assets/static/js/components/dark.js')}}"></script>
<script src="{{asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>


<script src="{{asset('dist/assets/compiled/js/app.js')}}"></script>
<script src="{{asset('dist/assets/extensions/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dist/assets/extensions/parsleyjs/parsley.min.js')}}"></script>
<script src="{{asset('dist/assets/static/js/pages/parsley.js')}}"></script>

@endsection