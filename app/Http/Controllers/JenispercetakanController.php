<?php

namespace App\Http\Controllers;

use App\Models\Jenispercetakan;
use Illuminate\Http\Request;

class JenispercetakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('halamanadmin.jenispercetakan', [
                'title' => 'jenispercetakan',
                'jenispercetakan' => Jenispercetakan::latest()->get() 
            ]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('halamanadmin.jenispercetakan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validateData = $request->validate([
            'namabarang' => 'required',
            // 'excerpt' => 'required',
            'hargasatuan' => 'required',
            'satuan' => 'required'
        ]);
        // if($request->file('image')){
        //     // $validateData['image'] = $request->file('image')->store('gambar-proyek');
        //     $request->file('image')->store('public/gambar-perangkat');
        //     $validateData['image'] = $request->file('image')->hashName();
        // }
        // $validateData['password'] = Hash::make($validateData['password']);

        Jenispercetakan::create($validateData);

        return redirect('/jenispercetakan')->with('succes', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftarjenispercetakan = Jenispercetakan::findOrFail($id);
        $daftarjenispercetakan->delete();

        return redirect('/jenispercetakan')->with('succes', 'data perangkat berhasil di hapus');
    }
}
