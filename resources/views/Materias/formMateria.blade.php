@extends('layouts.app')
@section('content')
  <form action = "{{ route('materia.store')}}"method="POST">
  {{csrf_field()}}
    <label for = "materia">Materia:</label>
  <input type = "text" name="nombre_materia">
  <br>
   <label for = "materia">CRN:</label>
  <input type = "text" name="crn">
    <br>
    <label for = "materia">Seccion:</label>
  <input type = "text" name="seccion">
    <br>
    <label for = "materia">Horario:</label>
  <input type = "text" name="horario">
    <br>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  <input type = "submit" name="Guardar">
  
</form>

@endsection