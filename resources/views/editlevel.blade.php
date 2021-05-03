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
            <span class="text-primary">auth</span>
        </h1>

        <br>
        <br>
    <form action="/editlevelall" method="post" enctype="multipart/form-data">
    @csrf
        <table> 
            <thead>
                <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>level</th>
                </tr>
            </thead>
            
            <tbody>
                   <tr>
                @foreach ($account as $item)
                 <td> {{$item->id}}</td>
                 <td> {{$item->name}} </td>
                 <td> {{$item->email}} </td>
                 <td> 
                    <select name="level{{$item->id}}" class="form-control" value="{{$item->level}}">
                        @if ($item->level==0)
                        <option value="0">manager</option>
                        @else
                            @if ($item->level==1)
                            <option selected value="1">admin</option>
                            <option value="2">guest</option>
                            @else
                            <option value="1">admin</option>
                            <option selected value="2">guest</option>   
                            @endif
                        @endif
                        
                      </select>
                </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4 mr-5 " style="float: right;">
            <button  class="btn btn-outline-primary">SAVE</button>
        </div>
    </form>
        {{-- <button type="button" form="my_form">ok</button> --}}
    </div>
</section>
@endsection