
@extends('szalamik.layout')
@section('content')
<div class="card">
  <div class="card-header">Szalamik Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Termek neve : {{ $szalamik->Termek neve }}</h5>
        <p class="card-text">Termek ara/kg : {{ $szalamik->Termek ara/kg }}</p>
        <p class="card-text">termek alapanyaga : {{ $szalamik->termek alapanyaga }}</p>
        <p class="card-text">termek gyartasi ideje : {{ $szalamik->termek gyartasi ideje }}</p>
  </div>
      
    </hr>
  
  </div>
</div>