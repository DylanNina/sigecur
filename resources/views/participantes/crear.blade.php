@extends('layouts.app')

@section('content')

<div class="card card-primary">

<div class="card-header">
<h3 class="card-title">Registro de Participantes</h3>
</div>

<div class="card-body">

<!-- NAV TABS -->
<ul class="nav nav-tabs" id="participantsTab" role="tablist">

<li class="nav-item">
<a class="nav-link active" id="manual-tab" data-toggle="tab" href="#manual" role="tab">
Registro Manual
</a>
</li>

<li class="nav-item">
<a class="nav-link" id="csv-tab" data-toggle="tab" href="#csv" role="tab">
Importar CSV
</a>
</li>

</ul>

<div class="tab-content mt-3">

<!-- REGISTRO MANUAL -->

<div class="tab-pane fade show active" id="manual" role="tabpanel">

<form method="POST" action="{{ url('participantes/store') }}">
@csrf

<div class="row">

<div class="col-md-6">

<div class="form-group">
<label>Nombre</label>
<input type="text" name="nombre" class="form-control" required>
</div>

</div>

<div class="col-md-6">

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

</div>

</div>

<div class="row">

<div class="col-md-6">

<div class="form-group">
<label>Teléfono</label>
<input type="text" name="telefono" class="form-control">
</div>

</div>

<div class="col-md-6">

<div class="form-group">
<label>Curso</label>

<select name="curso_id" class="form-control">

<option value="">Seleccionar Curso</option>
<option value="1">Laravel Básico</option>
<option value="2">Redes</option>

</select>

</div>

</div>

</div>

<button class="btn btn-primary">
<i class="fas fa-save"></i> Guardar Participante
</button>

</form>

</div>

<!-- IMPORTAR CSV -->

<div class="tab-pane fade" id="csv" role="tabpanel">

<form method="POST" action="{{ url('participantes/importar') }}" enctype="multipart/form-data">

@csrf

<div class="form-group">

<label>Seleccionar archivo CSV</label>

<input type="file" name="archivo_csv" class="form-control" accept=".csv" required>

</div>

<div class="alert alert-info">

Formato esperado del CSV:

<br>

nombre,email,telefono,curso_id

<br>

Ejemplo:

<br>

Juan Perez,juan@gmail.com,7777777,1

</div>

<button class="btn btn-success">

<i class="fas fa-file-import"></i> Importar Participantes

</button>

</form>

</div>

</div>

</div>

</div>

@endsection