@extends('layouts.app')
@section('title', 'Komputer')
@section('content')
    

<div class="container">
    @if (Auth::user() != null && Auth::user()->role_id == 2)
        <div class="col">
            <div class="row">
                <a href="/addpizza"><button type="submit" class="btn btn-dark ">Add Computer</button></a>
            </div>
        </div>        
    @endif
</div>

<br>
    
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($datacomp as $com)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $com->comimage }}" class="card-img-top" alt="...">

                        <div class="card-body textcenter bgcolor1">
                            <h5 class="card-title text_black">{{ $com->comname }}</h5>
                            <p class="card-text text_black">Rp. {{ $com->comprice }}</p>
                        </div>

                        {{-- <div class="card-footer bgcolor1">
                            <center>
                                <a href="#"><button type="button" class="btn btn-primary btn-lg btn-block">Lihat
                                        detail</button></a>
                            </center>
                        </div> --}}

                        <div class="card-footer bgcolor1">

                            <div class="row">

                                @if (Auth::user() != null && Auth::user()->role_id == 2)
                                    <div class="container">
                                        <div class="btn-group">
                                            <a class="btn btn-danger btn-lg textmid padi " href='/updatekomputer/{{ $com->id }}'>Update Komputer</a>
                                            <a class="btn btn-warning btn-lg textmid padi " href='/deletekomputer/{{ $com->id }}'>Delete Komputer</a>
                                        </div>
                                    </div>
                                @endif

                                <div class="container">
                                    <a href="/komputerdetail/{{ $com->id }}"><button type="button" class="btn btn-primary btn-lg btn-block">Lihat detail</button></a>
                                </div>

                            </div>
                                                        
                        </div>


                    </div>
                </div>

            @endforeach

        </div>
    </div>


@endsection
