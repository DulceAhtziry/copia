@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center fw-bold fs-3"><td class="icocod">&#10060;</td>Los datos a eliminar son: </h2>
                <ul class="fs-3 mt-4 font-monospace">
                    <li>El nombre del estudiante:<span style="color: rgb(201, 2, 2);"> {{ $items->nombre_alumno }}</span> </li>
                    <li>El número de control es:<span style="color: rgb(201, 2, 2);"> {{ $items->numero_control }}</span> </li>
                    <li>El telefono es:<span style="color: rgb(201, 2, 2);"> {{ $items->telefono }}</span> </li>
                    <li>Nombre de la carrera:<span style="color: rgb(201, 2, 2);"> {{ $items->carrera->nombre_carreras }}</span> </li>
                    <li>La fecha de nacimiento:<span style="color: rgb(201, 2, 2);"> {{ $items->fecha_nacimiento }}</span> </li>
                    <li>Escuela anterior:<span style="color: rgb(201, 2, 2);"> {{ $items->escuela_anterior }}</span> </li>
                    <li>Fecha de ingreso:<span style="color: rgb(201, 2, 2);"> {{ $items->fecha_ingreso }}</span> </li>
                </ul>
                <form action="{{ route('destroy', $items->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mt-3">
                        <td class="icocod">&#10062;</td> Eliminar definitivamente
                    </button>
                </form>
                
            </div>
        </div>
    </div>
    
@endsection