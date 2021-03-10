@extends('master.tmplt')

@section('foto')
<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('tmplt')}}/assets/img/profile.jpg" alt="" /></span>
@endsection

@section('konten')
<form action="/insert" method="post" enctype="multipart/form-data">
@csrf
    <h1 class="mb-0">
        Tambah
        <span class="text-primary">karyawan</span>
    </h1>
    <div class="row g-3 align-items-center">
    <div class="col-auto ml-5 mt-5">
        <label for="inputPassword6" class="col-form-label">Nama Depan</label>
    </div>
    <div class="col-auto px-4 mt-5">
        <input type="text" name="nama_depan" value="{{old('nama_depan')}}" class="form-control @error('nama_depan') is-invalid @enderror" >
    </div>
    </div>
    <div class="row g-3 align-items-center">
    <div class="col-auto ml-5 mt-4">
        <label for="inputPassword6" class="col-form-label">Nama Belakang</label>
    </div>
    <div class="px-1 mt-4">
        <input type="text" name="nama_belakang" value="{{old('nama_belakang')}}" class="form-control @error('nama_belakang') is-invalid @enderror" >
    </div>
    </div>

    <div class="mt-3 ml-5 mr-5">
        <label for="exampleFormControlInput1" class="form-label">Tag Line</label>
        <input type="text" value="{{old('tag_line')}}" class="form-control @error('tag_line') is-invalid @enderror" name="tag_line" >
    </div>
    <div class="mt-1 ml-5 mr-5">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <input type="text" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror" name="description" >
    </div>
    <div class="mt-1 ml-4 px-4 col-4">
        <label for="formFile" class="form-label">Foto </label>
        <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto" value="{{old('foto')}}">
    </div>
    <div class="mt-4 mr-5 " style="float: right;">
        <button  class="btn btn-outline-primary">Add</button>
    </div>

</form>
@endsection
