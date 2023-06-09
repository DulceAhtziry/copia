@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center mt-4"><td class="icocod">&#128101;</td> Agregar alumno</p>
    
    <form class="row g-3 fs-4" action="store" method="post">
        @csrf
        @method('POST')
        <div class="col-md-6 mt-4">
            <label for="nombre_alumno" class="form-label">Nombre del alumno <td class="icocod">&#128221;</td></label>
            <input type="text" name="nombre_alumno" id="nombre_alumno" class="form-control" required>
        </div>
        <div class="col-md-6 mt-4">
            <label for="numero_control" class="form-label">Numero control <td class="icocod">&#9997;</td></label>
            <input type="number" name="numero_control" id="numero_control" class="form-control" required>
        </div>
        <div class="col-6 mt-4">
            <label for="telefono">Telefono <td class="icocod">&#128222;</td></label>
            <input type="number" name="telefono" id="telefono" class="form-control" required>
        </div>
        <div class="col-6 mt-4">
            <label for="carrera">Carrera <td class="icocod">&#128119;</td></label>
            <select class="form-select" aria-label=".form-select-sm example" name="carrera" id="carrera" required>
                @foreach($carrera as $opcion)
                    <option value="{{ $opcion->id_carrera }}">{{ $opcion->nombre_carreras }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6 mt-4">
            <label for="fecha_nacimiento"> Fecha de nacimiento <td class="icocod">&#128198;</td></label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
        </div>
        <div class="col-6 mt-4">
            <label for="escuela_anterior">Escuela anterior <td class="icocod">&#127745;</td></label>
            <input type="text" name="escuela_anterior" id="escuela_anterior" class="form-control" required>
        </div>
        <div class="col-6 mt-4">
            <label for="fecha_ingreso">Fecha ingreso <td class="icocod">&#128198;</td></label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary mt-3">
                Guardar
            </button>
        </div>    
    </form>
    
    
@endsection
