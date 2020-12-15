@extends('layouts.app')
@section('title', 'HomePage')
@section('content')

    <div class="container">
        @if (Auth::user() != null && Auth::user()->role_id == 2)
            <div class="container">
                <div class="col">
                    <div class="row">

                       <div>
                        <a href="#"><button type="button" class="btn btn-dark ">View All user Transaction</button></a>
                       </div>
                      
                    </div>
                </div>
            </div>
        @endif
        
        @if (Auth::user() != null && Auth::user()->role_id == 1)
        <div class="container ">
            <div class="col">
                <div class="row">

                   <div class="padr">
                    <a href="#"><button type="button" class="btn btn-dark ">View History Transaction</button></a>
                    
                   </div>
                   <div>
                    <a href="#"><button type="button" class="btn btn-dark ">View cart</button></a>
                   </div>
                  
                </div>
            </div>
        </div>
        @endif
        
    </div>
    <br>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="container">
                <div class="col">
                    <div class="card h-100">
                        <img src="image/laptop/laptop.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Laptop</h5>
                            <p class="card-text">Disini anda dapat melihat jenis - jenis laptop</p>
                        </div>
                        <div class="card-footer">
                            <center>
                                <a href="/laptop "><button type="button"
                                        class="btn btn-primary btn-lg btn-block ">Lihat</button></a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="col">
                    <div class="card h-100">
                        <img src="image/komputer/komputer.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Komputer</h5>
                            <p class="card-text">Disini anda dapat melihat jenis - jenis komputer</p>
                        </div>
                        <div class="card-footer">
                            <center>
                                <a href="/komputer"><button type="button"
                                        class="btn btn-primary btn-lg btn-block">Lihat</button></a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="col">
                    <div class="card h-100">
                        <img src="image/handphone/handphone.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">HandPhone</h5>
                            <p class="card-text">Disini anda dapat melihat jenis - jenis handphone</p>
                        </div>
                        <div class="card-footer">
                            <center>
                                <a href="/handphone"><button type="button"
                                        class="btn btn-primary btn-lg btn-block">Lihat</button></a>

                            </center>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



@endsection
