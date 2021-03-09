@extends('master.tmplt')
@section('foto')
<span class="d-none d-lg-block"><img class="one img-profile rounded-circle mx-auto mb-2" src="{{asset('tmplt')}}/assets/img/profile.jpg" width="200px" height="200px" /></span>
@endsection
@section('konten')

<section class="resume-section" id="about">
    <div class="resume-section-content">
        <h1 class="mb-0">
            CLARENCE 
            <span class="text-primary">TAYLOR</span>
        </h1>
        <div class="subheading mb-3">
          <br>
            > Tag Line karyawan di sini.....
        </div>
        <p class="lead mb-5">> Deskripsikan karyawan di sini.....</p>
        <div class="" style="float: right;">
            {{-- <a href="/content/previous/{{$karyawan->id}}" class="btn btn-outline-danger btn-sm">previous</a> --}}
            <a href="contentpage" class="btn btn-outline-danger btn-lg">next</a>
        </div>
    </div>
</section>

@endsection