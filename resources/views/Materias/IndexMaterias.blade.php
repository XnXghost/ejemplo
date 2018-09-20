@extends('layout.app') 
@section('content')
<div class="container">
  <h1>
    Aqui estara el listado de materias
  </h1>
  <a href="{{ action('MateriaController@create')}}">Nueva Materia</a> 
  < a href="{{route('materia.create')}}"class="btn btn-success"> Nueva Materia (route)</a>
  @if($materias->count()=0)
  <div class="alert alert alert-warning">
    No tienes materias registradas
  </div>
  @else
  <table>
    <thead>
      <tr>
        <th>Materia</th>
        <th>CRN</th>
        <th>Seccion</th>
        <th>Horario</th>
        <th>Ultima Actualizacion</th>
      </tr>
    </thead>
    <tbody>
      @foreach($materias as $materia)
      <tr>
        <td> {{ $materia->nombre_materia}}</td>
        <td> {{ $materia->crn}}</td>
        <td> {{ $materia->seccion}}</td>
        <td> {{ $materia->horario}}</td>
        <td> {{ $materia->updated_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
</div>
@endsection