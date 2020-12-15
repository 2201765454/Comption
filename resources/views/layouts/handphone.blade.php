@extends('layouts.app')
@section('title', 'Handphone')
@section('content')

    <div class="container">
        @if (Auth::user() != null && Auth::user()->role_id == 2)
            <div class="col">
                <div class="row">
                    <a href="/addpizza"><button type="submit" class="btn btn-dark ">Add Handphone</button></a>
                </div>

            </div>
        @endif
    </div>
    <br>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($datahp as $hp)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $hp->hpimage }}" class="card-img-top" alt="...">

                        <div class="card-body textcenter bgcolor1">
                            <h5 class="card-title text_black">{{ $hp->hpname }}</h5>
                            <p class="card-text text_black">Rp. {{ $hp->hpprice }}</p>
                        </div>

                        <div class="card-footer bgcolor1">
                            
                            <div class="row">

                                @if (Auth::user() != null && Auth::user()->role_id == 2)
                                    <div class="container">
                                        <div class="btn-group">
                                            <a class="btn btn-danger btn-lg textmid padi " href='/updatehp/{{ $hp->id }}'>Update Handphone</a>
                                            <a class="btn btn-warning btn-lg textmid padi " href='/deletehp/{{ $hp->id }}'>Delete Handphone</a>
                                        </div>
                                    </div>
                                @endif

                                <div class="container">
                                    <a href='/hpdetail/{{ $hp->id }}'><button type="button" class="btn btn-primary btn-lg btn-block">Lihat detail</button></a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection
