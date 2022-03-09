
@extends('szalamik.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('szalami/' .$szalamik->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$szalamik->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="Termek neve" id="Termek neve" value="{{$szalamik->Termek neve}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="Termek ara/kg" id="Termek ara/kg" value="{{$szalamik->Termek ara/kg}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="termek alapanyaga" id="termek alapanyaga" value="{{$szalamik->termek alapanyaga}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="termek gyartasi ideje" id="termek gyartasi ideje" value="{{$szalamik->termek gyartasi ideje}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop