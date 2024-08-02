@extends('asset_admin.main')

@section('content')

<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
        <div class="row">


            <div class="col-xl-15">
                <!-- Account details card-->
                <div class="card mb-7">
                    <div class="card-header">Account Details</div>
                    <div class="card-body mt-3">
                        <form method="post" action="{{ route('jenispercetakan.update', $jenispercetakan->id) }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class=" col-lg-7 mb-3">
                            <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="namabarang">Nama Barang</label>
                                    {{-- <p class="form-control">{{ $datapribadi->namabarang }}</p > --}}
                                    <input type="text" class="form-control" name="namabarang" id="namabarang" autofocus value="{{ old('namabarang', $jenispercetakan->namabarang) }}">
                                </div>
                                <div class="mb-">
                                    <label class="small mb-1" for="satuan">Satuan</label>
                                    {{-- <p class="form-control">{{ $datapribadi->satuan }}</p> --}}
                                <input type="text" class="form-control" name="satuan" id="satuan" autofocus value="{{ old('satuan', $jenispercetakan->satuan) }}">
                                </div>
                                <div class="mb-">
                                    <label class="small mb-1" for="hagasatuan">Harga Satuan</label>
                                    {{-- <p class="form-control">{{ $datapribadi->hagasatuan }}</p> --}}
                                <input type="text" class="form-control" name="hagasatuan" id="hagasatuan" autofocus value="{{ old('hagasatuan', $jenispercetakan->hargasatuan) }}">
                                </div>
                            
                            </div>
                            <!-- Save changes button-->
                            {{-- <a href="/halamanpelanggan/edituser"  class="btn btn-primary"> --}}
                            <button type="submit"  class="btn btn-primary ">
                                {{-- <i class="bi bi-pencil-fill"></i>  --}}
                                Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Buat update data -->
            {{-- <div class="modal fade" id="updateuser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Silahkan Update Data Yang Ingin Dirubah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form method="post" action="{{  route('user.update', $datapribadi->id)  }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf   
                        
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username : {{ $datapribadi->username }}</label>
                                    <input class="form-control" type="text" id="username" name="username">
                                </div>
                        
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">First Name : {{ $datapribadi->firstname }}</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Last Name : {{ $datapribadi->lastname }}</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggallahir" class="form-label">Tanggal Lahir : {{ $datapribadi->tanggallahir }}</label>
                                    <input type="text" class="form-control" id="tanggallahir" name="tanggallahir">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat : {{ $datapribadi->alamat }}</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email : {{ $datapribadi->email }}</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="notelpon" class="form-label">Nomor Telpon : {{ $datapribadi->notelpon }}</label>
                                    <input type="text" class="form-control" id="notelpon" name="notelpon">
                                </div>

                                <button type="submit" class="btn btn-primary mb-3">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div> --}}

        </div>
</div>

@endsection