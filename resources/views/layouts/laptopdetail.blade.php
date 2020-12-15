@extends('layouts.app')
@section('title', 'LaptopDetail')
@section('content')

<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="{{asset($lap->laptopimage )}}" class="card-img-top" alt="...">
        <div class="card-body bg-info fontsize">
          <h5 class="card-title"><strong>Name: {{$lap->laptopname}}</strong></h5>
          <p class="card-text"><strong>Ram: {{$lap->laptopram}} GB</strong></p>
          <p class="card-text"><strong>SSD: {{$lap->laptopssd}} GB</strong></p>          
          <p class="card-text"><strong>Price: Rp. {{$lap->laptopprice}}</strong></p>
        </div>
      </div>
</div>


@endsection