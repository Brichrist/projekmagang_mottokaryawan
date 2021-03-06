@extends('master.tmplt')

@section('foto')
<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('tmplt')}}/assets/img/profile.jpg" alt="" /></span>
@endsection

@section('konten')
<form action="/change/{{$karyawan->id}}" id="contactsForm" method="post" enctype="multipart/form-data">

{{-- <form action="/change/{{$karyawan->id}}/{{$karyawan->skill}}" id="contactsForm" method="post" enctype="multipart/form-data"> --}}
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
        <input type="text" name="nama_depan" value="{{$karyawan->nama_depan}}" class="form-control @error('nama_depan') is-invalid @enderror" >
        @error('nama_depan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>
    <div class="row g-3 align-items-center">
    <div class="col-auto ml-5 mt-4">
        <label for="inputPassword6" class="col-form-label">Nama Belakang</label>
    </div>
    <div class="px-1 mt-4">
        <input type="text" name="nama_belakang" value="{{$karyawan->nama_belakang}}" class="form-control @error('nama_belakang') is-invalid @enderror" >
        @error('nama_belakang')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>

    <div class="mt-3 ml-5 mr-5">
        <label for="exampleFormControlInput1" class="form-label">Tag Line</label>
        <input type="text" value="{{$karyawan->tag_line}}" name="tag_line" class="form-control @error('tag_line') is-invalid @enderror" >
        @error('tag_line')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mt-1 ml-5 mr-5">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <input type="text" value="{{$karyawan->description}}" name="description" class="form-control @error('description') is-invalid @enderror"  >
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mt-1 ml-4 px-4 col-4">
        {{-- <img class="one" src="ocean.jpg" width="300" height="300"> --}}
        <span class="d-none d-lg-block"><img id="previewImage"class="two img-profile rounded-circle mx-auto mb-2" src="{{url('foto/'.$karyawan->foto)}}" width="100px" height="100px" /></span>
        <label for="formFile" class="form-label">Ganti Foto </label>
        <input id="new_file"type="file" name="foto" value="{{$karyawan->foto}}" class="form-control @error('foto') is-invalid @enderror" >
        @error('foto')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mt-3 ml-5 mr-5">
    <br>  
         
    </div>


    <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <table class="skill_item col" > 
                <thead>
                    <tr>
                    <th>Skill</th>
                    {{-- <th>ID</th> --}}
                    <th></th>
                    </tr>
                </thead>      
                <tbody>
                    @foreach ($karyawan->abilities as $item)
                       <tr>
                            @if ($item!=null)
                                <td><div class="L_item" data-id="{{$item->id}}" >{{$item->skill}}</div></td>
                                {{-- <div class="" data-id="1"> --}}
                                    {{-- $(".namaclass").data('id'); --}}
                                {{-- <td><div class="L_item">{{$item->id}}</div></td> --}}
                                <td>
                                    <input type="button" value="Delete Row" onclick="SomeDeleteRowFunction(this);">
                                    {{-- <button  class="btn btn-outline-primary">delete</button> --}}
                                </td>
                            @endif
                       </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <div class="col-lg-1" style="visibility: hidden">
            <input type="text" name="skillakhr" id="skillakhr" value="" class="form-control "  >
          </div>
          <div class="col-sm-3">
            <select class="col" id="select">
                @foreach ($skill_list as $item)
                    <option value="{{$item->id}}">{{$item->skill}}</option>
                @endforeach
            </select>  
          </div>
          <div class="col-sm-3">
            <input type="button" value="add skill" onclick="SomeAddRowFunction();"> 
          </div>
        </div>
      </div>












    <div class="mt-4 mr-5 " style="float: right;">
        <button  class="btn btn-outline-primary">update</button>
    </div>

</form>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let myText= ($(".skill_item").find(".L_item").map(function() {
            return $(this).data("id");
        }).get()).join(",");

        // debugging
        console.log("texts:", myText);
        // let searchParams = window.location.href.replace('http://127.0.0.1:8000/update/',''); 
        // console.log("url:", searchParams);
        document.getElementById("skillakhr").value=myText;
        console.log(document.getElementById("skillakhr").value);
</script>
@endsection
