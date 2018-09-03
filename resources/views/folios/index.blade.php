@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>ADMINISTRADOR DE FOLIOS</h1><hr/>
</div>
  <div class="row jumbotron big-padding text-center blue-grey">
   {!! Form::open(['route' => 'folios/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Buscar</label>
            <input type="text" class="form-control" name = "num_folio" placeholder='Ingresa dato para buscar'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('folios.index') }}" class="btn btn-info">Mostrar Todos</a>
         <a href="{{ route('folios.create') }}" class="btn btn-success">Crear</a>
        {!! Form::close() !!}
  <br>
    <table class="table table-condensed table-striped table-bordered ">
            <thead class="nav nav-tabs white-text">
                <tr>
                  <th>ID</th>
                  <th>Número de fólio</th>
                  <th>Nombre de creador</th>
                  <th>Nombre del departamento emisor</th>
                  <th>Nombre de la dependencia a quien va dirigido</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="jumbotron">
                @foreach($folios as $folio)
                <tr>
                    <td>{{ $folio->id }}</td>
                    <td>{{ $folio->num_folio }}</td>
                    <td>{{ $folio->nombre_creador }}</td>
                    <td>{{ $folio->nom_departamento_emitido }}</td>
                    <td>{{ $folio->nom_dependecia_dirigido }}</td>
                    <td>
                         
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
<div class="floating">
    <a href="{{route('folios.create')}}" class="btn btn-primary btn-fab">
      <i class="material-icons">Agregar</i>
    </a>
  </div>
@endsection