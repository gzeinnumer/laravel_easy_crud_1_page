<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data = BarangModel::all();
        $sent = [
            'data' => $data
        ];
        return view('barang.index', $sent);
    }

    public function create(Request $r)
    {
        BarangModel::create($r->all());
        return redirect('/barang')->with('sukses','Data berhasil diinput');
    }

    public function delete($id)
    {
        $data_siswa = BarangModel::find($id);
        $data_siswa->delete();
        return redirect('/barang')->with('sukses','Data berhasil dihapus');
    }

    public function find($id)
    {
        $find = BarangModel::find($id);
        $data = BarangModel::all();
        $sent = [
            'data' => $data,
            'find' => $find
        ];
        return view('barang.index', $sent);
    }

    public function update(Request $r)
    {
        $data = BarangModel::find($r->id);
        $data->update($r->all());
        return redirect('/barang')->with('sukses','Data berhasil diupdate');
    }
}
