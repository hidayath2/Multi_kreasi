@extends('asset_admin.main')

@section('content')
<div class="container-xxl flex-grow-2 container-p-y">
    {{-- <div class="row"> --}}
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telpon</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datapelanggan as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->alamat }}</td>
                <td>{{ $user->notelpon }}</td>
                <td>{{ $user->email }}</td>

                <td>
                    <a href="/detailpelanggan" class="btn btn-info">
                        {{-- <i class="bi bi-eye">Lihat</i> --}}
                        Lihat
                    </a>

                    {{-- <button data-id="{{ $user->id }}" type="button" class="btn_detail btn btn-warning" data-toggle="modal" data-target="#lihatdata">Lihat</button> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

        {{-- Modal Buat Update Data --}}
        <div class="modal fade" id="lihatdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Pelanggan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <div class="container"> --}}
                        
                        
                                <div class="mb-3">
                                    {{-- <label for="username" class="username form-label">Username   :   </label> --}}
                                    <label for="username" class="username">Username   :   </label>
                                </div>
                        
                                <div class="mb-3">
                                    <label for="firstname" class="firstname form-label">First Name : </label>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="lastname" class="lastname form-label">Last Name :</label>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggallahir" class="tanggallahir form-label">Tanggal Lahir :</label>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="alamat form-label">Alamat :</label>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="email form-label">Email :</label>
                                </div>
                                <div class="mb-3">
                                    <label for="notelpon" class="notelpon form-label">Nomor Telpon :</label>
                                </div>
                            
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>

</div>  

{{-- <script>
    let btn=document.querySelectorAll('.btn_detail');
btn.forEach(element => {
    element.addEventListener('click',function () {
        let data = $(this).data("id");
        console.log(data);
        $.ajax({
            url:'/api/detail-data/'+ data,
            type:'get',
            dataType:'json',
            success: (function (result) {
                console.log(result);
                $(".username").text("username :"+result.username);
                // $(".firstname").text("firstname :"+result.firstname);
                // $(".lastname").text("lastname :"+result.lastname);
                // $(".tanggallahir").text("tanggallahir :"+result.tanggallahir);
                // $(".alamat").text("alamat :"+result.alamat);
                // $(".email").text("email :"+result.email);
                // $(".notelpon").text("notelpon :"+result.notelpon);
            })
        })
    })
});
</script> --}}
@endsection