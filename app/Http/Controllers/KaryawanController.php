<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan_model;

class KaryawanController extends Controller
{
    public function index (){
        // return ("Testing Katalog");
        $mykaryawan = new karyawan_model();
         $karyawan = $mykaryawan->tampil_karyawan();
         $data = array('karyawan' => $karyawan);
         return view('karyawan/index', $data);
     }
     public function tambah(){
         // return ('Testing');
         return view('karyawan/tambah');
      }
  
      public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('karyawan')
        ->insert([
            'id_karyawan' => $request->id_karyawan,
            'nama_karyawan' => $request->nama_karyawan,
            'alamat'  =>  $request->alamat,
            'no_hp'  =>  $request->no_hp,
            
        ]);
        return redirect('karyawan');
      }
      public function edit($id_karyawan){
        $data['karyawan'] = karyawan_model::where('id_karyawan',$id_karyawan)->first();

        return view('karyawan/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('karyawan')->where('id_karyawan',$request->id_karyawan)
         ->update([
            'nama_karyawan' => $request->nama_karyawan,
            'alamat'  =>  $request->alamat,
            'no_hp'  =>  $request->no_hp
              ]);
         return redirect('karyawan');
     }
 
     public function delete($id_karyawan){
         $query = \DB::table('karyawan')->where('id_karyawan',$id_karyawan)->delete();
         return redirect('karyawan');
     }
 }
 