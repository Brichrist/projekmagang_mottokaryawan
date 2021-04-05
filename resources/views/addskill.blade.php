@extends('master.tmplt')
@section('foto')
<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('tmplt')}}/assets/img/profile.jpg" alt="" /></span>
@endsection
@section('konten')
<section class="mt-5 ml-5">
    <div class="resume-section-content container">
        <div class="row">
            <h1 class="mb-0">
            <br>
                data
                <span class="text-primary">skill</span>
            </h1>
        </div> 
        
            <br>
            <br>
            @foreach ($skills as $item)
                <h3 class="mb-0">
                    {{$item->id}}
                    {!! "&nbsp;" !!}
                    {!! "&nbsp;" !!}
                    {{$item->skill}}  
                    <br>
                </h3>
            @endforeach
        
        <form action="/insertskill" method="post" >
            @csrf
            <div class="row">
                <div class="col-auto ml-5 mt-5">
                    <label for="inputPassword6" class="col-form-label">Nama skill</label>
                </div>
                <div class="col-auto px-4 mt-5">
                    <input type="text" name="skill" value="" class="form-control @error('skill') is-invalid @enderror" >
                    @error('skill')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-auto px-4 mt-5">
                    <button  class="btn btn-outline-primary">add</button>
                </div>
            </div> 
        </form>
    </div>
                

</section>
@endsection