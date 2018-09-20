@extends('layouts.app')
@section('content')
<form action = "/materia/update"method="POST">
  <label for = "materia">Materia:</label>
  <input type = "text" name="materia">
  <input type = "submit" name="Guardar">
  
</form>

@endsection