@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    {{-- <div class="row"> --}}
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    {{-- <th>Tgl Pesan</th>
                    <th>Tgl Selesai</th> --}}
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Jenis Cetakan</th>
                    <th>Total Harga</th>
                    <th>Status Pembayaran</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    {{-- <td>Tiger Nixon</td>
                    <td>System Architect</td> --}}
                    <td>Edinburgh</td>
                    <td>Ulee Kareng</td>
                    <td>kertas A45</td>
                    <td>Rp.20.000</td>
                    <td><button type="submit" class="btn btn-danger">konfirmasi</button></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    {{-- <th>Tgl Pesan</th>
                    <th>Tgl Selesai</th> --}}
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Jenis Cetakan date</th>
                    <th>Total Harga</th>
                    <th>Status Pembayaran</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </tfoot>
        </table>
    {{-- </div>  --}}
    </div>  
@endsection