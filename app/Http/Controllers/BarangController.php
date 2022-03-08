<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //list
    public function index()
    {
        $data = BarangModel::all();
        $sent = [
            'data' => $data
        ];
        return view('barang.index', $sent);
    }

    //add
    public function create(Request $r)
    {
        BarangModel::create($r->all());
        return redirect('/barang')->with('sukses','Data berhasil diinput');
    }

    //detail
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

    //update
    public function find_update($id)
    {
        $find = BarangModel::find($id);
        $data = BarangModel::all();
        $sent = [
            'data' => $data,
            'edit' => $find
        ];
        return view('barang.index', $sent);
    }

    public function update(Request $r)
    {
        $data = BarangModel::find($r->id);
        $data->update($r->all());
        return redirect('/barang')->with('sukses','Data berhasil diupdate');
    }

    //delete
    public function find_delete($id)
    {
        $delete = BarangModel::find($id);
        $data = BarangModel::all();
        $sent = [
            'data' => $data,
            'delete' => $delete
        ];
        return view('barang.index', $sent);
    }

    public function delete(Request $r)
    {
        $data = BarangModel::find($r->id);
        $data->delete();
        return redirect('/barang')->with('sukses','Data berhasil dihapus');
    }
}
