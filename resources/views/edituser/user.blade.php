@extends('asset_pelanggan.main')

@section('content')


@if(session()->has('succes'))

    <script>
        swal("{{ session('succes') }}", "", "success");
    </script>

@endif 


<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
        <div class="row">


            <div class="col-xl-15">
                <!-- Account details card-->
                <div class="card mb-7">
                    <div class="card-header">Account Details</div>
                    <div class="card-body mt-3">
                        <form method="post" action="{{  route('user.update', $datapribadi->id)  }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf 
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="username">Username</label>
                                {{-- <p class="form-control">{{ $datapribadi->username }}</p > --}}
                                <input type="text" class="form-control" name="username" id="username" autofocus value="{{ old('username', $datapribadi->username) }}">

                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="firstName">First name</label>
                                    {{-- <p class="form-control">{{ $datapribadi->firstname }}</p> --}}
                                <input type="text" class="form-control" name="firstname" id="firstname" autofocus value="{{ old('firstname', $datapribadi->firstname) }}">

                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="lastName">Last name</label>
                                    {{-- <p class="form-control">{{ $datapribadi->lastname }}</p> --}}
                                <input type="text" class="form-control" name="lastname" id="lastname" autofocus value="{{ old('lastname', $datapribadi->lastname) }}">

                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">                         
                                <div class="col-md-6">
                                    <label class="small mb-1" for="tanggallahir">Tanggal Lahir</label>
                                    {{-- <p class="form-control">{{ $datapribadi->tanggallahir }}</p> --}}
                                <input type="text" class="form-control" name="tanggallahir" id="tanggallahir" autofocus value="{{ old('tanggallahir', $datapribadi->tanggallahir) }}">

                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="alamat">Alamat</label>
                                    {{-- <p class="form-control">{{ $datapribadi->alamat }}</p> --}}
                                <input type="text" class="form-control" name="alamat" id="alamat" autofocus value="{{ old('alamat', $datapribadi->alamat) }}">

                                </div>
                            </div>

                            <div class="row gx-3 mb-3">                         
                                <div class="col-md-6">
                                    <label class="small mb-1" for="email">Email</label>
                                    {{-- <p class="form-control">{{ $datapribadi->email }}</p> --}}
                                <input type="text" class="form-control" name="email" id="email" autofocus value="{{ old('email', $datapribadi->email) }}">

                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="notelpon">Nomor Telepon</label>
                                    {{-- <p class="form-control">{{ $datapribadi->notelpon }}</p> --}}
                                <input type="text" class="form-control" name="notelpon" id="notelpon" autofocus value="{{ old('notelpon', $datapribadi->notelpon) }}">

                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="password">Password</label>
                                    {{-- <p class="form-control">{{ $datapribadi->notelpon }}</p> --}}
                                <input type="text" class="form-control" name="password" id="password">

                                </div>
                            </div>
                            <!-- Save changes button-->
                            {{-- <a href="/halamanpelanggan/edituser"  class="btn btn-primary"> --}}
                            {{-- <a href="{{ route('user.update', $datapribadi->id) }}"  class="btn btn-primary">
                                {{-- <i class="bi bi-pencil-fill">Update</i>  --}
                                Update
                            </a> --}}
                            {{-- <div class="mt-5 text-center"> --}}
                                <button class="btn btn-primary profile-button" type="sumbit">Update</button>
                            {{-- </div> --}}
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