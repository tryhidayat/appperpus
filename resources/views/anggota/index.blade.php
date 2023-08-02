@extends('layout1.main2')
@section('content')

<h4><b>Data Master</b></h4>
<br>
<a href="{{ asset('anggota/tambah')  }}">Tambah Anggota</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID_Anggota</td>
    <td><b>Nama Anggota</td>
    <td><b>Alamat</td>
    <td><b>No Hp</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($anggota as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_anggota}}</td>
    <td>{{ $rows->nama_anggota }}</td>
    <td>{{ $rows->alamat }}</td>
    <td>{{ $rows->no_hp }}</td>
    <td>
        <a href="{{ asset('anggota/edit/'.$rows->id_anggota ) }}">Edit</a>
        <a href="{{ asset('anggota/delete/'.$rows->id_anggota ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection