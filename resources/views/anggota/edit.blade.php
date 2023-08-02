@extends('layout1.main2')
@section('content')


<h4><b>Edit Data Transaksi</b></h1>
<br>
<form action="{{ asset('anggota/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id_anggota" value="<?php echo $anggota->id_anggota ?>">
<div class="mb-3 row">
    <label for="nama_anggota" class="col-sm-2 col-form-label">Nama anggota</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="<?php echo $anggota->nama_anggota ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $anggota->alamat ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $anggota->no_hp ?>">
    </div>
</div>

<input type="submit" value="Simpan">
</form>

@endsection