@extends('layouts.app')

@section('content')

<div class="card card-primary">

<div class="card-header">
<h3 class="card-title">Registrar Participante</h3>
</div>

<form>

<div class="card-body">

<div class="form-group">
<label>Nombre</label>
<input type="text" class="form-control">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" class="form-control">
</div>

<div class="form-group">
<label>Teléfono</label>
<input type="text" class="form-control">
</div>

</div>

<div class="card-footer">
<button class="btn btn-primary">Guardar</button>
</div>

</form>

</div>

@endsection