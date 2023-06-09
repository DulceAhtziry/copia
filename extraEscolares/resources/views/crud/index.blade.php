@extends('layouts/main')
@section('contenido')
    
    <p class="fs-2 text-center mt-4"><img src="{{ asset('img/tec.ico') }}" alt="Icono" style="width: 55px; height: auto;"></td> Alumnos</p>
    <a href="/crud/create" class=" btn btn-primary">Agregar alumno</a>
    <div class="card mt-4">
        <div class="card-body">
            <table id="tabla" class="display nowrap border border-dark mt-2" style="width:100%" >
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Numero de control</th>
                        <th>Telefono</th>
                        <th>Carrera</th>
                        <th>Fecha de nacimiento</th>
                        <th>Escuela de proveniencia</th>
                        <th>Fecha de ingreso al ITMA II</th>
                        <th>Añadir archivos</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->nombre_alumno }}</td>
                        <td>{{ $item->numero_control }}</td>
                        <td>{{ $item->telefono }}</td>
                        <td>
                            {{ $item->carrera->nombre_carreras }} <!-- Mostrar solo el nombre de la carrera -->
                        </td>
                        <td>{{ $item->fecha_nacimiento }}</td>
                        <td>{{ $item->escuela_anterior }}</td>
                        <td>{{ $item->fecha_ingreso }}</td>
                        <td> 
                            <a href="{{ route('datos_A', $item->id) }}" class="btn btn-danger">Subir archivos</a>
                        </td>
                        <td>
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                        <td> 
                            <a href="{{ route('show', $item->id) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var table = $('#tabla').DataTable({
                scrollY: 500,
                deferRender: false,
                scroller: true,
                responsive: true,
                columnDefs: [
                    {
                        className: 'control',
                        orderable: false,
                        targets: -1
                    }
                ]
            });
        });
    </script>

    
@endsection
