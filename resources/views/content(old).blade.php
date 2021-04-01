@extends('master.tmplt')
@section('foto')
<span class="d-none d-lg-block"><img class="one img-profile rounded-circle mx-auto mb-3" src="{{url('foto/'.$karyawan->foto)}}" width="200px" height="200px" /></span>
@endsection('foto')
@section('konten')

@if (auth()->user()->level == 1)
  <div class="mt-4 mr-5 " style="float: right;">
    <button class="btn btn-light rounded-circle" data-toggle="modal" data-target="#delete"><input type="image" src="https://img.icons8.com/bubbles/50/000000/trash.png" /></button>
  </div>
@endif
<section class="resume-section" id="about">
    <div class="resume-section-content">
        <h1 class="mb-0">
            {{$karyawan->nama_depan}}
            <span class="text-primary">{{$karyawan->nama_belakang}}</span>
        </h1>
        <div class="subheading mb-3">
            {{$karyawan->tag_line}}
        </div>
        <p class="lead mb-5">{{$karyawan->description}}</p>
        <div class="" style="float: right;">
            <a href="/content/previous/{{$karyawan->id}}" class="btn btn-outline-danger btn-sm">previous</a>
            <a href="/content/next/{{$karyawan->id}}" class="btn btn-outline-danger btn-sm">next</a>
            {{-- {{$karyawan->links()}} --}}
        </div>
    </div>
</section>





@foreach ($karyawan as $data)
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          apa anda yakin untuk menghapus file ini ({{$karyawan->nama_depan}} {{$karyawan->nama_belakang}}  ) ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <a href="/delete/{{$karyawan->id}}" class="btn btn-primary">delete</a> 
        </div>
      </div>
    </div>
  </div>
@endforeach
  





@endsection