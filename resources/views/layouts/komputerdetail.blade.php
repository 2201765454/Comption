@extends('layouts.app')
@section('title', 'KomputerDetail')
@section('content')

<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="{{asset($comp->comimage )}}" class="card-img-top" alt="...">
        <div class="card-body bg-info fontsize">
          <h5 class="card-title"><strong>Nama: {{$comp->comname}}</strong></h5>
          <p class="card-text"><strong>Ram: {{$comp->comram}} GB</strong></p>
          <p class="card-text"><strong>Harddisk: {{$comp->comharddisk}}GB</strong></p>
          <p class="card-text"><strong>Harga: Rp. {{$comp->comprice}}</strong></p>
        </div>
      </div>
</div>


@endsection