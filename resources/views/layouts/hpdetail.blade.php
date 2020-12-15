@extends('layouts.app')
@section('title', 'HandphoneDetail')
@section('content')

<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="{{asset($hp->hpimage )}}" class="card-img-top" alt="...">
        <div class="card-body bg-info fontsize">
          <h5 class="card-title"><strong>Nama: {{$hp->hpname}}</strong></h5>
          <p class="card-text"><strong>Kapasitas: {{$hp->hpcapacity}} GB</strong></p>
          <p class="card-text"><strong>Batery: {{$hp->hpbatery}} mAh</strong></p>
          <p class="card-text"><strong>Camera: {{$hp->hpcamera}} Mp</strong></p>
          <p class="card-text"><strong>Harga: Rp. {{$hp->hpprice}}</strong></p>

        </div>
      </div>
</div>


@endsection