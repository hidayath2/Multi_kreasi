<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return User::latest()->get();

        return view('halamanpelanggan/user', [
            "title" => "user",
            'datapribadi' => User::findOrFail(auth()->user()->id) 
            // 'user' => User::where('User', auth()->user()->id)->get()
            
        ]);
    }

    public function pelanggan()
    {
        // return User::latest()->get();

        return view('halamanadmin.pelanggan', [
            "title" => "pelanggan",
            'datapelanggan' => User::latest()->get()    
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftaruser = User::findOrFail($id);

        return view('detailpelanggan.pelanggan', compact('daftarpelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datauser=User::findOrFail($id);

        return view('edituser.user', [
            "title" => "user",
            'user' => $datauser
        ]);
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
        $daftaruser=User::findOrFail($id);
        $validateData = $request->validate([
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'tanggallahir' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'notelpon' => 'required',
            'password' => 'required'
        ]);

        User::where('id', $id)
                    ->update($validateData);

        return redirect('/user')->with('succes', 'data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
