@extends('layouts.pelanggan')

@section('content')

<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
        <div class="row">


            <div class="col-xl-15">
                <!-- Account details card-->
                <div class="card mb-7">
                    <div class="card-header">Account Details</div>
                    <div class="card-body mt-3">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="pUsername">Username</label>
                                {{-- <p class="form-control">{{ $datapribadi->username }}</p > --}}
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="pFirstName">First name</label>
                                    {{-- <p class="form-control">{{ $datapribadi->firstname }}</p> --}}
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="pLastName">Last name</label>
                                    {{-- <p class="form-control">{{ $datapribadi->lastname }}</p> --}}
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">                         
                                <div class="col-md-6">
                                    <label class="small mb-1" for="birthday">Tanggal Lahir</label>
                                    {{-- <p class="form-control">{{ $datapribadi->tanggallahir }}</p> --}}
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="alamat">Alamat</label>
                                    {{-- <p class="form-control">{{ $datapribadi->alamat }}</p> --}}
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">                         
                                <div class="col-md-6">
                                    <label class="small mb-1">Email</label>
                                    {{-- <p class="form-control">{{ $datapribadi->email }}</p> --}}
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1">Nomor Telepon</label>
                                    {{-- <p class="form-control">{{ $datapribadi->notelpon }}</p> --}}
                                </div>
                            </div>
                            <!-- Save changes button-->
                            {{-- <a href="/halamanpelanggan/edituser"  class="btn btn-primary"> --}}
                            {{-- <a href="{{ route('user.edit', $datapribadi->id) }}"  class="btn btn-primary"> --}}
                                <i class="bi bi-pencil-fill"></i> 
                            {{-- </a> --}}
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