<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    #method get
    public function index() {
        // $user = [
        //     'nama'=> 'Syita Dwi Safitri',
        //     'jurusan' => 'Teknik Informatika'
        // ];
        $mahasiswas = Mahasiswa::all();
        $data = [
            'message' => 'Get all mahasiswa',
            'data' => $mahasiswas 
        ];
        return response()->json($data, 200);
    }
    // public function store(Request $request){
    //     $input = [
    //         'nama' => $request->nama,
    //         'nim' => $request->nim,
    //         'email' => $request->email,
    //         'jurusan' => $request->jurusan,
    //     ];
    //     $mahasiswa = Mahasiswa::create($input);
    //     $data = [
    //         'message' => 'Data mahasiswa berhasil dibuat',
    //         'data' => $mahasiswa, 
    //     ];
    //     return response()->json($data, 201);
    // }

        # menambahkan resource mahas$mahasiswa
    # membuat method store
    public function store(Request $request)
    {
        $mahasiswa = New Mahasiswa();

        # menangkap data request
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->jurusan = $request->input('jurusan');

        # menggunakan mahas$mahasiswa untuk insert data
        $mahasiswa->save();

        $data = [
            'message' => 'mahas$mahasiswa is created successfully',
            'data' => $mahasiswa,
        ]; 

        # mengembalikan data (json) status code 200
        return response()->json($data, 200);
    }    
    // public function update(Request $request, $id){
    //     $mahasiswa = Mahasiswa::find ($id);
    //     $mahasiswa->update([
    //         'nama' => $request->nama,
    //         'nim' => $request->nim,
    //         'email' => $request->email,
    //         'jurusan' => $request->jurusan,
    //         'updated_at' => now()
    //     ]);
    //     $data = [
    //         'message' => 'Data berhasil diubah' .$id,
    //         'data' => $mahasiswa
    //     ];
    //     return response()->json($data, 200);
    // }

    // mengupdate resouce mahas$mahasiswa
    // membuat method update
    public function update(Request $request, $id)
    {
        // cari data mahas$mahasiswa yg ingin di update
        $mahasiswa = Mahasiswa::find($id);

        // mendapatkan data request
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];
        $mahasiswa->update($input);
    
        $data = [
            'message' => 'Resource mahas$mahasiswa update',
            'data' => $mahasiswa,
        ];
        // mengirimkan respon json dengan status code 200
        return response()->json($data,200);
    }

    // public function delete($id){
    //     $mahasiswa2 = Mahasiswa::destroy($id);
    //     $data = [
    //         'message' => 'Data Berhasil dihapus' .$id,
    //         'jumlah data yang terhapus' =>$mahasiswa2
    //     ];
    //     return response()->json($data, 200);
    // }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        if($mahasiswa){
            $mahasiswa->delete();
        $data = [
            'message'=>'mahas$mahasiswa is deleted',
        ];

        // mengembalikan data json status code 200
        return response()->json($data,200);
        }else{
            $data = [
                'message'=>'mahas$mahasiswa not found',
            ];
            return response()->json($data,404);
        }
    }

    // mendapatkan detail resource mahas$mahasiswa
    // membuat method show
    public function show($id)
    {
        // mencari data mahas$mahasiswa
        $mahasiswa = Mahasiswa::find($id);

        if($mahasiswa)
        {
            $data = [
                'messege'=>'Get Detail mahas$mahasiswa',
                'data'=>$mahasiswa,
            ];
    
            // mengambil data json status code 200
            return response()->json($data,200);
        }else{
            $data = [
                'message' => 'mahas$mahasiswa not found',
            ];

            // mengembalikan data json
            return response()->json($data,404);
        }
    }

}
