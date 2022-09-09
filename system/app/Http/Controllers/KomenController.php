<?php

namespace App\Http\Controllers;

use App\Models\Komen;

class KomenController extends Controller
{
    function index()
    {
        $data['list_komen'] = Komen::all();
        return view('komen.index', $data);
    }

    function store()
    {
        $komen = new Komen;
        $komen->isi = request('isi');
        $komen->nama = request('nama');
        $komen->save();

        return redirect('admin/komen');
    }
    function show($komen)
    {
        $data['komen'] = $komen;
        return view('komen.show', $data);
    }

    function destroy(Komen $komen)
    {
        $komen->delete();

        return redirect('admin/komen')->with('danger', 'Data Berhasil Dihapus');
    }

}
