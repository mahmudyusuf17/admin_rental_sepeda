<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SepedaController extends Controller
{
    public function index()
    {
        $sepeda = Bike::latest()->get();
        // return response([
        //     'success' => true,
        //     'message' => 'List Semua Sepeda',
        //     'data' => $sepeda
        // ], 200);
        return view('admin.sepeda', compact('sepeda'));
    }

    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'merk'          => 'required',
            'jenis'         => 'required',
            'no_rangka'     => 'required', 
            'warna'         => 'required', 
            'gambar'        => 'required', 
            'deskripsi'     => 'required', 
            'jml_sepeda'    => 'required',
            'harga_sewa'    => 'required',
            'status'        => 'required'
        ],
            [
                'merk.required' => 'Masukkan Merk Sepeda !',
                'jenis.required' => 'Masukkan Jenis Sepeda !',
                'no_rangka.required' => 'Masukkan Nomor Rangka Sepeda !',
                'warna.required' => 'Masukkan Warna Sepeda !',
                'gambar.required' => 'Masukkan Gambar Sepeda !',
                'deskripsi.required' => 'Masukkan Deskripsi Sepeda !',
                'jml_sepeda.required' => 'Masukkan Jumlah Sepeda Sepeda !',
                'harga_sewa.required' => 'Masukkan Harga Sewa Sepeda !',
                'status.required' => 'Masukkan Status Sepeda !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $sepeda = Bike::create([
                'merk'          => $request->input('merk'),
                'jenis'         => $request->input('jenis'),
                'no_rangka'     => $request->input('no_rangka'),
                'warna'         => $request->input('warna'),
                'gambar'        => $request->input('gambar'),
                'deskripsi'     => $request->input('deskripsi'),
                'jml_sepeda'    => $request->input('jml_sepeda'),
                'harga_sewa'    => $request->input('harga_sewa'),
                'status'        => $request->input('status'),
            ]);


            if ($sepeda) {
                return view('admin.sepeda');
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Sepeda Gagal Disimpan!',
                ], 400);
            }
        }
    }


    public function show($id)
    {
        $sepeda = Bike::whereId($id)->first();

        if ($sepeda) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Sepeda!',
                'data'    => $sepeda
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sepeda Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'merk'     => 'required',
            'jenis'   => 'required',
            'no_rangka' => 'required', 
            'warna' => 'required', 
            'gambar' => 'required', 
            'deskripsi' => 'required', 
            'jml_sepeda' => 'required',
            'harga_sewa' => 'required',
            'status' => 'required'
        ],
            [
                'merk.required' => 'Masukkan Merk Sepeda !',
                'jenis.required' => 'Masukkan Jenis Sepeda !',
                'no_rangka.required' => 'Masukkan Nomor Rangka Sepeda !',
                'warna.required' => 'Masukkan Warna Sepeda !',
                'gambar.required' => 'Masukkan Gambar Sepeda !',
                'deskripsi.required' => 'Masukkan Deskripsi Sepeda !',
                'jml_sepeda.required' => 'Masukkan Jumlah Sepeda Sepeda !',
                'harga_sewa.required' => 'Masukkan Harga Sewa Sepeda !',
                'status.required' => 'Masukkan Status Sepeda !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $sepeda = Bike::whereId($request->input('id'))->update([
                'merk'          => $request->input('merk'),
                'jenis'         => $request->input('jenis'),
                'no_rangka'     => $request->input('no_rangka'),
                'warna'         => $request->input('warna'),
                'gambar'        => $request->input('gambar'),
                'deskripsi'     => $request->input('deskripsi'),
                'jml_sepeda'    => $request->input('jml_sepeda'),
                'harga_sewa'    => $request->input('harga_sewa'),
                'status'        => $request->input('status'),
            ]);


            if ($sepeda) {
                return response()->json([
                    'success' => true,
                    'message' => 'Sepeda Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Sepeda Gagal Diupdate!',
                ], 500);
            }

        }

    }

    public function destroy($id)
    {
        $sepeda = Bike::findOrFail($id);
        $sepeda->delete();

        if ($sepeda) {
            return response()->json([
                'success' => true,
                'message' => 'Sepeda Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sepeda Gagal Dihapus!',
            ], 500);
        }

    }
}
