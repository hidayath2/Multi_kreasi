@extends('asset_pelanggan.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    {{-- <div class="row"> --}}
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Harga Satuan</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($jenispercetakan as $percetakan)
        <tbody>
            <tr>
                <td>{{ $percetakan->namabarang }}</td>
                <td>{{ $percetakan->satuan }}</td>
                <td>{{ $percetakan->hargasatuan }}</td>
                <td>
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pesan">
                        {{-- <i class="bi bi-send-plus-fill"></i> --}}
                        Pesan
                    </button>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

        {{-- Modal Buat Update Data --}}
        <div class="modal fade" id="pesan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Silahkan Pilih Barang Yang Akan Anda Pesan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <div class="container"> --}}
                            <form method="post" action="{{ route('pemesanan.store') }}" enctype="multipart/form-data">
                                @csrf
                        
                                <div class="mb-3">
                                    <label for="namabarang" class="form-label">Nama Barang   : {{ $percetakan->namabarang }}</label>
                                </div>
                                
                                
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Satuan : {{ $percetakan->satuan }}</label>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="hargasatuan" class="form-label">Harga Satuan : {{ $percetakan->hargasatuan }}</label>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="jumlahdipesan" class="form-label">Jumlah Yang Ingin Dipesan :</label>
                                    <input class="form-control" type="text" id="jumlahdipesan" name="jumlahdipesan">
                                </div>

                                <button type="submit" class="btn btn-primary mb-3">Pesan</button>
                            </form>
                    </div>

                </div>
            </div>
        </div>
</div>  
@endsection