<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'nama' => 'Paracetamol', 'harga' => 3500],
            ['id' => 2, 'nama' => 'Amoxicillin', 'harga' => 6000],
            ['id' => 3, 'nama' => 'Ibuprofen', 'harga' => 4000],
            ['id' => 4, 'nama' => 'Salep Scabimite', 'harga' => 80000],
            ['id' => 5, 'nama' => 'Sanmol Syrup', 'harga' => 18000],
        ];

        return view('katalog.index', compact('products'));
    }

    public function show($id)
    {
        $all = [
            1 => ['id' => 1, 'nama' => 'Paracetamol', 'harga' => 3500, 'deskripsi' => 'Pereda demam & nyeri.'],
            2 => ['id' => 2, 'nama' => 'Amoxicillin', 'harga' => 6000, 'deskripsi' => 'Antibiotik.'],
            3 => ['id' => 3, 'nama' => 'Ibuprofen ', 'harga' => 4000, 'deskripsi' => 'Anti-inflamasi.'],
            4 => ['id' => 4, 'nama' => 'Salep Antiseptik', 'harga' => 80000, 'deskripsi' => 'Untuk luka ringan.'],
            5 => ['id' => 5, 'nama' => 'Sanmol Syrup', 'harga' => 18000, 'deskripsi' => 'Sirup penurun panas.'],
        ];

        if (!isset($all[$id])) {
            abort(404, 'Produk tidak ditemukan.');
        }

        $product = $all[$id];

        return view('katalog.show', compact('product'));
    }
}