@extends('layout1.main2')
@section('content')

<h4><b>Data Master</b></h4>
<br>
<a href="{{ asset('karyawan/tambah')  }}">Tambah karyawan</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID_karyawan</td>
    <td><b>Nama karyawan</td>
    <td><b>Alamat</td>
    <td><b>No Hp</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($karyawan as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_karyawan}}</td>
    <td>{{ $rows->nama_karyawan }}</td>
    <td>{{ $rows->alamat }}</td>
    <td>{{ $rows->no_hp }}</td>
    <td>
        <a href="{{ asset('karyawan/edit/'.$rows->id_karyawan ) }}">Edit</a>
        <a href="{{ asset('karyawan/delete/'.$rows->id_karyawan ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>

@endsection