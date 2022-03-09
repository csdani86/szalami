
@extends('szalamik.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Termék neve</label></br>
        <input type="text" name="Termek neve" id="Termek neve" class="form-control"></br>
        <label>Termék ára/kg</label></br>
        <input type="text" name="Termek ara/kg" id="Termek ara/kg" class="form-control"></br>
        <label>termék alapanyaga</label></br>
        <input type="text" name="termek alapanyaga" id="termek alapanyaga" class="form-control"></br>
        <label>termék gyártási ideje</label></br>
        <input type="text" name="termek gyartasi ideje" id="termek gyartasi ideje" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop