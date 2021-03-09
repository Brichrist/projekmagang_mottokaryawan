@extends('master.tmplt')
@section('foto')
<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('tmplt')}}/assets/img/profile.jpg" alt="" /></span>
@endsection
@section('konten')
<section class="mt-5 ml-5">
    <div class="resume-section-content">
        <h1 class="mb-0">
        <br>
            data
            <span class="text-primary">Karyawan</span>
        </h1>
        <br>
        <br>
        @foreach ($karyawan as $item)
            <h3 class="mb-0">
                <a href="/update/{{$item->id}}">{{$item->id}}
                {!! "&nbsp;" !!}
                {!! "&nbsp;" !!}
                {{$item->nama_depan}}  
                {{-- {{$item->nama_belakang}}             --}}
                <span style="color: black; class="text-primary">{{$item->nama_belakang}}</span>
                </a>  
                <br>
            </h3>
        @endforeach
        
    </div>
</section>
@endsection