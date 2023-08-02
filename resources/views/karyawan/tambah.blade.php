@extends('layout1.main2')
@section('content')


<h4><b>Tambah karyawan</b></h4>
<br>
<form action="{{ asset('karyawan/tambah_proses') }}" method="POST">
@csrf
<div class="mb-3 row">
    <label for="id_karyawan" class="col-sm-2 col-form-label">Id Karyawan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="id_karyawan" name="id_karyawan">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
</div>
<div class="mb-3 row">
    <label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="no_hp" name="no_hp">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection