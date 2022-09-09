<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    function index()
    {
        $data['list_artikel'] = Artikel::all();
        return view('artikel.index', $data);
    }
    function create()
    {
        return view('artikel.create');
    }
    function store()
    {
        $artikel = new Artikel;
        $artikel->judul = request('judul');
        $artikel->penulis = request('penulis');
        $artikel->deskripsi = request('deskripsi');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show($artikel)
    {
        $data['artikel'] = Artikel::find($artikel);
        return view('artikel.show', $data);
    }
    function edit(Artikel $artikel)
    {
        $data['artikel'] =  $artikel;
        return view('artikel.edit', $data);
    }
    function update(Artikel $artikel)
    {
        $artikel->judul = request('judul');
        $artikel->penulis = request('penulis');
        $artikel->deskripsi = request('deskripsi');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Diedit');
    }

    function destroy(Artikel $artikel)
    {
        $artikel->delete();

        return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');
    }

}
