@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center">Actualizar alumno</p>
    
    <form class="row g-3 fs-4" action="{{ route ('update', $items->id)}}" method="post">
        <a href="/" class="btn btn-info mt-3"><td class="icocod">&#9194;</td>Regresar </a>
        @csrf
        @method('PUT')
        <div class="col-md-6 mt-4">
            <label for="nombre_alumno" class="form-label">Nombre del alumno <td class="icocod">&#128221;</td></label>
            <input type="text" name="nombre_alumno" id="nombre_alumno" class="form-control" value="{{ $items->nombre_alumno }}" >
        </div>
        <div class="col-md-6 mt-4">
            <label for="numero_control" class="form-label">Numero control <td class="icocod">&#9997;</td></label>
            <input type="number" name="numero_control" id="numero_control" class="form-control" value="{{ $items->numero_control }}">
        </div>
        <div class="col-6 mt-4">
            <label for="telefono">Telefono <td class="icocod">&#128222;</td></label>
            <input type="number" name="telefono" id="telefono" class="form-control" value="{{ $items->telefono }}">
        </div>
        <div class="col-6 mt-4">
            <label for="carrera">Carrera <td class="icocod">&#128119;</td></label>
            <select class="form-select" aria-label=".form-select-sm example" name="carrera" id="carrera">
                @foreach($carreras as $carrera)
        <option value="{{ $carrera->id_carrera }}" @if($carrera->id_carrera == $items->id_carrera) selected @endif>{{ $carrera->nombre_carreras }}</option>
    @endforeach
            </select>
        </div>
        <div class="col-6 mt-4">
            <label for="fecha_nacimiento"> Fecha de nacimiento <td class="icocod">&#128198;</td></label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $items->fecha_nacimiento }}">
        </div>
        <div class="col-6 mt-4">
            <label for="escuela_anterior">Escuela anterior <td class="icocod">&#127745;</td></label>
            <input type="text" name="escuela_anterior" id="escuela_anterior" class="form-control" value="{{ $items->escuela_anterior }}">
        </div>
        <div class="col-6 mt-4">
            <label for="fecha_ingreso">Fecha ingreso <td class="icocod">&#128198;</td></label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" value="{{ $items->fecha_ingreso }}">
        </div>
        <div class="col-12">
            <button class="btn btn-primary mt-3"><td class="icocod">&#128221;</td>
                Actualizar 
            </button>
        </div>
        
    </form>
    
@endsection
