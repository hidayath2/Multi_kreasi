@extends('layouts.admin')

@section('content')

{{-- @if(session()->has('succes'))

    <script>
        swal("{{ session('succes') }}", "", "success");
    </script>

@endif  --}}

@if(session()->has('succes'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('succes') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>            
    </div>
@endif

<div class="table-responsive col-lg-auto">
    <div class="container-xxl flex-grow-1 container-p-y">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahdata">
                Tambah Data
            </button>
            
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga Satuan</th>
                        <th>Satuan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jenispercetakan as $percetakan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $percetakan->namabarang }}</td>
                        <td>{{ $percetakan->satuan }}</td>
                        <td>{{ $percetakan->hargasatuan }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updatedata">
                                <i class="bi bi-pencil-fill"></i> 
                            </button>

                            <form action="{{ route('jenispercetakan.destroy',  $percetakan->id ) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('are you sure?')"><i class="bi bi-x-circle-fill"></i></button></td>
                                {{-- <button type="submit" class="btn btn-danger"><i class="bi bi-x-square"></i></button> --}}
                            </form> 
                    </tr>
                    @endforeach 
                </tbody>
            </table>

    
            <!-- Modal Buat Tambah Data -->
            <div class="modal fade" id="tambahdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Silahkan Masukan Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form method="post" action="/jenispercetakan" enctype="multipart/form-data">
                                @csrf   
                        
                                <div class="mb-3">
                                    <label for="namabarang" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="namabarang" name="namabarang">
                                </div>
                        
                                <div class="mb-3">
                                    <label for="hargasatuan" class="form-label">Harga Satuan</label>
                                    <input type="text" class="form-control" id="hargasatuan" name="hargasatuan">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Satuan</label>
                                    <input type="text" class="form-control" id="satuan" name="satuan">
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            {{-- Modal Buat Edit Data --}}
            {{-- <div class="modal fade" id="editdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    {{-- <h1 class="modal-title fs-5" id="staticBackdropLabel">Silahkan Klik Tombol Edit Jika Ada Data Yang Ingin Di Ubah</h1> --}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            {{-- <form enctype="multipart/form-data">
                                @csrf    --}
                        
                                <div class="mb-3">
                                    <label for="namabarang" class="form-label">Nama Barang    :   {{ $percetakan->namabarang }}</label>
                                    {{-- <input class="form-control" type="text" id="namabarang" name="namabarang"> --}
                                </div>
                        
                                <div class="mb-3">
                                    <label for="hargasatuan" class="form-label">Harga Satuan : {{ $percetakan->hargasatuan }}</label>
                                    {{-- <input type="text" class="form-control" id="hargasatuan" name="hargasatuan"> --}
                                </div>
                                
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Satuan : {{ $percetakan->satuan }}</label>
                                    {{-- <input type="text" class="form-control" id="satuan" name="satuan"> --}}
                                </div>
                                {{-- <button type="submit" class="btn btn-primary mb-3">Update Data</button> --}
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#updatedata">Edit</button>
                            {{-- </form> --}
                        </div>
                    </div>
                </div>
                </div>
            </div> --}}

            {{-- Modal Buat Update Data --}}
            <div class="modal fade" id="updatedata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Silahkan Pilih Data Mana Yang Ingin Di Ubah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form method="post" action="/jenispercetakan" enctype="multipart/form-data">
                                @csrf   
                        
                                <div class="mb-3">
                                    <label for="namabarang" class="form-label">Nama Barang    :   {{ $percetakan->namabarang }} </label>
                                    <input class="form-control" type="text" id="namabarang" name="namabarang">
                                </div>
                        
                                <div class="mb-3">
                                    <label for="hargasatuan" class="form-label">Harga Satuan : {{ $percetakan->hargasatuan }}</label>
                                    <input type="text" class="form-control" id="hargasatuan" name="hargasatuan">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Satuan : {{ $percetakan->satuan }}</label>
                                    <input type="text" class="form-control" id="satuan" name="satuan">
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">update</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
    </div> 
</div> 

<script>

    function confirmDelete(e) {
        swal({
            title: 'Apakah Kamu Yakin?',
            text: 'Data Akan Dihapus Secara Permanen!!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        })
        .then((willDelete) => {
            if (willDelete) {
                    // swal("", {
                    // icon: "success",
                    // });
                e.submit()
            } else {
                swal("Data Masih Tersimpan");
            }
        });
        return false
    }

    

</script>

@endsection