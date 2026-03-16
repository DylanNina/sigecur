@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">

            <h3 class="card-title">Lista de Cursos</h3>

            <div class="card-tools">

                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCurso">
                    + Nuevo Curso
                </button>

            </div>

        </div>

        <div class="card-body">

            <table id="tablaCursos" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Categoría</th>
                        <th>Turno</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($cursos as $curso)
                        <tr>
                            <td>{{ $curso->id }}</td>
                            <td>{{ $curso->nombre }}</td>
                            <td>{{ $curso->tipo }}</td>
                            <td>{{ $curso->categoria }}</td>
                            <td>{{ $curso->turno }}</td>

                            <td>
                                <a href="#" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-warning btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm btnEliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

            <div class="modal fade" id="modalCurso">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <form action="{{ route('cursos.store') }}" method="POST">
                            @csrf

                            <div class="modal-header">
                                <h4 class="modal-title">Registrar Curso</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Nombre del Curso</label>
                                        <input type="text" name="nombre" class="form-control" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Tipo</label>
                                        <select name="tipo" class="form-control">
                                            <option value="Curso">Curso</option>
                                            <option value="Taller">Taller</option>
                                            <option value="Seminario">Seminario</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label>Categoría</label>
                                        <select name="categoria" class="form-control">
                                            <option value="Infantil">Infantil</option>
                                            <option value="Adulto">Adulto</option>
                                            <option value="General">General</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label>Versión</label>
                                        <input type="text" name="version" class="form-control">
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label>Turno</label>
                                        <select name="turno" class="form-control">
                                            <option>Mañana</option>
                                            <option>Tarde</option>
                                            <option>Noche</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label>Cupo</label>
                                        <input type="number" name="cupo" class="form-control">
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label>Requiere aprobación</label>

                                        <select name="requiere_aprobacion" class="form-control">
                                            <option value="0">No</option>
                                            <option value="1">Sí</option>
                                        </select>

                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Cancelar
                                </button>

                                <button type="submit" class="btn btn-success">
                                    Guardar Curso
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
