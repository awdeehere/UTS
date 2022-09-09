<?php


namespace App\Http\Controllers;

use App\Models\Komen;

class KomenClientController extends Controller
{
    function store()
    {

        $komen = new Komen();
        $komen->isi = request('isi');
        $komen->nama = request('nama');
        $komen->save();

        return redirect()->back();
    }
}

