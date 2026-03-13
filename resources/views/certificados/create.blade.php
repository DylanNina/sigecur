@extends('layouts.app')

@section('content')

<div class="card card-primary">

<div class="card-header">
<h3 class="card-title">Generar Certificado</h3>
</div>

<form>

<div class="card-body">

<div class="form-group">

<label>Nombre del Estudiante</label>

<input type="text" class="form-control">

</div>

<div class="form-group">

<label>Curso</label>

<input type="text" class="form-control">

</div>

<div class="form-group">

<label>Fecha</label>

<input type="date" class="form-control">

</div>

</div>

<div class="card-footer">

<button class="btn btn-primary">
Generar Certificado
</button>

</div>

</form>

</div>

@endsection