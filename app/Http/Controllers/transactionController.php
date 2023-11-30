<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Transactions;
use Illuminate\Http\Request;

class transactionController extends Controller
{
    public function index()
    {
        $data = Transactions::all();
        return view('trans/v_tampil', compact('data'))->with('name', 'trans');
    }

    public function addTransaksi()
    {
        $data = Products::all();
        return view('trans/v_add', compact('data'))->with('name', 'addTransaksi');
    }

    private function getProductDetails($id_product)
    {
        $product = Products::find($id_product);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return [
            'id_product' => $product->id_product,
            'name' => $product->name,
            'price' => $product->price,
        ];
    }

    private function generateReferenceNo()
    {
        return 'INV' . date('YmdHis') . rand(10000, 99999);
    }

    function aksiTambah(Request $request)
    {
        $request->validate([
            'quantity' => 'required|integer|',
            'price' => 'required|integer|',
            'id_product' => 'required|integer|',
        ]);

        
        $id_product = $request->input('id_product');
        $productDetails = $this->getProductDetails($id_product);

        
        $paymentAmount = $request->input('quantity') * $productDetails['price'];

        
        $referenceNo = $this->generateReferenceNo();

        
        $transaction = new Transactions([
            'reference_no' => $referenceNo,
            'quantity' => $request->input('quantity'),
            'price' => $productDetails['price'],
            'payment_amount' => $paymentAmount,
            'id_product' => $id_product,
        ]);

        $transaction->save();
        return redirect()->route('trans')->with('success', 'Data Berhasil Ditambahkan');
    }
}
