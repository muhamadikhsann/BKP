<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggaran;

class PelanggaranController extends Controller
{
    public function pelanggaran()
    {
        $pelanggaran = Pelanggaran::all();
        return view('pelanggaran', ['pelanggaran' => $pelanggaran]);
    }

    public function tambah()
    {
        return view('pelanggaran_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'kode_pelanggaran' => 'required',
    		'keterangan' => 'required',
    		'poin' => 'required'
    	]);
 
        Pelanggaran::create([
    		'kode_pelanggaran' => $request->kode_pelanggaran,
            'keterangan' => $request->keterangan,
    		'poin' => $request->poin
            
    	]);
 
    	return redirect('/pelanggaran');
    }

    public function edit($id)
    {
        $pelanggaran = Pelanggaran::find($id);
        return view('pelanggaran_edit', ['pelanggaran' => $pelanggaran]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'kode_pelanggaran' => 'required',
            'keterangan' => 'required',
            'poin' => 'required'
        ]);
    
        $pelanggaran = Pelanggaran::find($id);
        $pelanggaran->kode_pelanggaran = $request->kode_pelanggaran;
        $pelanggaran->keterangan = $request->keterangan;
        $pelanggaran->poin = $request->poin;
        $pelanggaran->save();
        return redirect('/pelanggaran');
    }

    public function delete($id)
    {
        $pelanggaran = Pelanggaran::find($id);
        $pelanggaran->delete();
        return redirect('/pelanggaran');
    }
}
