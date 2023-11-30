<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $data = Products::all();
        return view('product/v_tampil', compact('data'))->with('name', 'product');
    }

    public function addProduct()
    {
        return view('product/v_add');
    }

    function aksiTambah(Request $request)
    {
        $data = [
            'id_product' => $request->id_product,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ];
        Products::create($data);
        return redirect()->route('product')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function ubah($id_product)
    {
        $data = Products::find($id_product);
        return view('product/v_ubah', compact('data'))->with('name', 'ubah');
    }

    function aksiUbah(Request $request, $id_product)
    {
        $data = [
            'id_product' => $request->id_product,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ];
        Products::find($id_product)->update($data);
        return redirect()->route('product')->with('success', 'Data Berhasil Diubah');
    }

    function hapus($id_product)
    {
        Products::find($id_product)->delete();
        return redirect()->route('product')->with('success', 'Data Berhasil Dihapus');
    }
}
