<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; 

class WebController extends Controller
{
    //di sini isi controller user
    public function index(){
        // mengambil data dari table user join sekolah
        $user = DB::table('user')
                    ->join('sekolah', 'user.id_sekolah', '=', 'sekolah.id_sekolah')
                    ->select('id', 'username', 'name', 'no_hp', 'email', 'sekolah.nama_sekolah as sekolah')
                    ->orderBy('id')
                    ->paginate(10);
 
    	// mengirim data user ke view index
    	return view('index',['user' => $user]);
    }

    //fungsi untuk beralih ke view tambah data
    public function tambah(){
        $sekolah = DB::table('sekolah')->get();
        return view('tambah', ['sekolah' => $sekolah]);
    }

    public function store(Request $request){
        // insert data ke table user
        DB::table('user')->insert([
            'username' => $request->username,
            'password' => md5($request->password),
            'name' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'id_sekolah' => $request->id_sekolah
        ]);

        // alihkan halaman ke halaman user
        return redirect('home');
    
    }

    public function edit($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $user = DB::table('user')->where('id',$id)->get();
        $sekolah = DB::table('sekolah')->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['user' => $user, 'sekolah' => $sekolah]);
    }

    public function update(Request $request){
        // update data user
        DB::table('user')->where('id',$request->id)->update([
            'username' => $request->username,
            'password' => md5($request->password),
            'name' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'id_sekolah' => $request->id_sekolah
        ]);
        // alihkan halaman ke halaman user
        return redirect('home');
    }

    public function hapus($id){
        // menghapus data user berdasarkan id yang dipilih
        DB::table('user')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman user
        return redirect('home');
    }

    public function cari(Request $request){
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table user sesuai pencarian data
		$user = DB::table('user')
		->where('name','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data user ke view index
		return view('index',['user' => $user]);
 
	}
}   