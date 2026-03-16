@extends('layouts.app')

@section('content')
    <div class="card">

        <div class="card-header">
            <h3 class="card-title">Editar Curso</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('cursos.update', $curso->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6">
                        <label>Nombre</label>
                        <input type="text" name="nombre" value="{{ $curso->nombre }}" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label>Tipo</label>
                        <input type="text" name="tipo" value="{{ $curso->tipo }}" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Categoría</label>
                        <input type="text" name="categoria" value="{{ $curso->categoria }}" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Versión</label>
                        <input type="text" name="version" value="{{ $curso->version }}" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Turno</label>
                        <input type="text" name="turno" value="{{ $curso->turno }}" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Cupo</label>
                        <input type="number" name="cupo" value="{{ $curso->cupo }}" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Requiere aprobación</label>

                        <select name="requiere_aprobacion" class="form-control">

                            <option value="0" {{ $curso->requiere_aprobacion == 0 ? 'selected' : '' }}>
                                No
                            </option>

                            <option value="1" {{ $curso->requiere_aprobacion == 1 ? 'selected' : '' }}>
                                Si
                            </option>

                        </select>

                    </div>

                </div>

                <br>

                <button class="btn btn-success">
                    Actualizar
                </button>

                <a href="{{ route('cursos.index') }}" class="btn btn-secondary">
                    Cancelar
                </a>

            </form>

        </div>
    </div>
@endsection
