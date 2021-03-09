@extends('master.tmplt')

@section('foto')
<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('tmplt')}}/assets/img/profile.jpg" alt="" /></span>
@endsection

@section('konten')
<form action="/change/profile" method="post" enctype="multipart/form-data">
@csrf
    <h1 class="mb-0">
        your
        <span class="text-primary">PROFILE</span>
    </h1>
    <div class="row g-3 align-items-center">
    <div class="col-auto ml-5 mt-5">
        <label for="inputPassword6" class="col-form-label">Nama lengkap</label>
    </div>
    <div class="col-auto px-4 mt-5">
        <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control @error('name') is-invalid @enderror " >
    </div>
    </div>

    <div class="row g-3 align-items-center">
    <div class="col-auto ml-5 mt-5">
        <label for="inputPassword6" class="col-form-label">email</label>
    </div>
    <div class="col-auto px-em mt-5">
        <input type="text" name="email" value="{{auth()->user()->email}}" class="form-control @error('email') is-invalid @enderror" >
    </div>
    </div>


    <div class="row g-3 align-items-center">
    <div class="col-auto ml-5 mt-5">
        <label for="inputPassword6" class="col-form-label">tanggal lahir</label>
    </div>
    <div class="col-auto px-tgl mt-5">
        <input type="text" name="tanggal_lahir" value="{{auth()->user()->tanggal_lahir}}" class="form-control " >
    </div>
    </div>


    <div class="row g-3 align-items-center">
    <div class="col-auto ml-5 mt-5">
        <label for="inputPassword6" class="col-form-label">alamat</label>
    </div>
    <div class="col-auto px-al mt-5">
        <input type="text" name="alamat" value="{{auth()->user()->alamat}}" class="form-control " >
    </div>
    </div>

    <div class="row g-3 align-items-center">
    <div class="col-auto ml-5 mt-5">
        <label for="inputPassword6" class="col-form-label">level</label>
    </div>
    <div class="col-auto px-le mt-5">
        <input type="text" name="level" value="{{auth()->user()->level}}" class="form-control @error('level') is-invalid @enderror"  >
    </div>
    </div>
    

    <div class="mt-4 mr-5 " style="float: right;">
        <button  class="btn btn-outline-primary">update</button>
    </div>

</form>
@endsection
