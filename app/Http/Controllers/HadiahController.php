<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hadiah;

class HadiahController extends Controller
{
    public function hadiah()
    {
        $hadiah = Hadiah::all();
        return view('hadiah', ['hadiah' => $hadiah]);
    }

    public function tambah()
    {
        return view('hadiah_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'kode_hadiah' => 'required',
    		'keterangan' => 'required',
    		'poin' => 'required'
    	]);
 
        Hadiah::create([
    		'kode_hadiah' => $request->kode_hadiah,
            'keterangan' => $request->keterangan,
    		'poin' => $request->poin
            
    	]);
 
    	return redirect('/hadiah');
    }

    public function edit($id)
    {
        $hadiah = hadiah::find($id);
        return view('hadiah_edit', ['hadiah' => $hadiah]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'kode_hadiah' => 'required',
            'keterangan' => 'required',
            'poin' => 'required'
        ]);
    
        $hadiah = Hadiah::find($id);
        $hadiah->kode_hadiah = $request->kode_hadiah;
        $hadiah->keterangan = $request->keterangan;
        $hadiah->poin = $request->poin;
        $hadiah->save();
        return redirect('/hadiah');
    }

    public function delete($id)
    {
        $hadiah = Hadiah::find($id);
        $hadiah->delete();
        return redirect('/hadiah');
    }
}
