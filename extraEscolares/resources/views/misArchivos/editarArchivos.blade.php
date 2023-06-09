@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center mt-4"><img src="{{ asset('img/LOGOTEC.png') }}" alt="Icono" style="width: 54px; height: auto;"></td> Agregar archivo</p>
    <div class="mt-4 fs-4">
        <li>El nombre del estudiante:<span style="color: rgb(201, 2, 2);"> {{ $items->nombre_alumno }}</span> </li>
        <li>El número de control es:<span style="color: rgb(201, 2, 2);"> {{ $items->numero_control }}</span> </li>
        <li>Nombre de la carrera:<span style="color: rgb(201, 2, 2);"> {{ $items->carrera->nombre_carreras }}</span> </li>
    </div>
    
    <form class="row g-3 mt-4 fs-4">
        
        <div class="col-md-6 mt-4">
            <label for="formFile" class="form-label">Evidencias</label>
            <input class="form-control" type="file" id="formFile" required>
        </div>
        <div class="col-md-6 mt-4">
            <label for="inputCity"  class="form-label">Ubicación fisica</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" required></textarea>
        </div>

        <div class="col-md-6">
            <label for="formFile" class="form-label">Constancias</label>
            <input class="form-control" type="file" id="formFile" required>
        </div>
        <div class="col-md-6">
            <label for="inputCity"  class="form-label">Ubicación fisica</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" required></textarea>
        </div>
        
        <div class="col-md-6">
            <label for="formFile" class="form-label">Oficio de liberacion</label>
            <input class="form-control" type="file" id="formFile" required>
        </div>
        <div class="col-md-6">
            <label for="inputCity"  class="form-label">Ubicación fisica</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" required></textarea>
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>