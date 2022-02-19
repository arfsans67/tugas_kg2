<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function home(){
        return view('home');
    }
    public function index(){
        $data = DB::table('data')->get();
        return view('index',['data' => $data]);
    }

    public function cari($id){
        $data = DB::table('data')->where('idsiswa',$id)->get();
        return view('index',['data' => $data]);
    }
    public function tambah(Request $request){

        //insert data ke table books
        DB::table('data')->insert([
            'idsiswa'=>$request->idsiswa,
            'NamaSiswa'=>$request->NamaSiswa,
            'Alamat'=>$request->Alamat,
            'Kelas'=>$request->Kelas,
        ]);
        return redirect('/');
    } 
    public function hapus($id){
        $data=DB::table('data')->where('idsiswa',$id)->delete();
        return redirect('/');
    }
    public function show($id){
        $siswa=DB::table('data')->where('idsiswa',$id)->get();
        return view('update',['data'=>$siswa]);
    }

    public function edit(Request $request){
        DB::table('data')->where('idsiswa',$request->idsiswa)->update([
            
            'NamaSiswa'=>$request->NamaSiswa,
            'Alamat'=>$request->Alamat,
            'Kelas'=>$request->Kelas,
        ]);
        return redirect('/');
    }
}
