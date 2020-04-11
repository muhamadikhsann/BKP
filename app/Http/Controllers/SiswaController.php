<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function siswa()
    {
        $siswa = Siswa::all();
        return view('siswa', ['siswa' => $siswa]);
    }

    public function tambah()
    {
        return view('siswa_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'nis' => 'required',
    		'nama' => 'required',
    		'rombel' => 'required',
    		'rayon' => 'required'
    	]);
 
        Siswa::create([
    		'nis' => $request->nis,
            'nama' => $request->nama,
    		'rombel' => $request->rombel,
    		'rayon' => $request->rayon
            
    	]);
 
    	return redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa_edit', ['siswa' => $siswa]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required'
        ]);
    
        $siswa = Siswa::find($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->rombel = $request->rombel;
        $siswa->rayon = $request->rayon;
        $siswa->save();
        return redirect('/siswa');
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }
}
