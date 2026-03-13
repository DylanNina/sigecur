@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header">

<h3 class="card-title">
Lista de Certificados
</h3>

<div class="card-tools">

<a href="/certificados/create" class="btn btn-primary btn-sm">
<i class="fas fa-plus"></i> Nuevo
</a>

</div>

</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Curso</th>
<th>Código</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

<tr>

<td>1</td>
<td>Juan Perez</td>
<td>Laravel</td>
<td>CERT-84732</td>

<td>

<a href="#" class="btn btn-info btn-sm">
<i class="fas fa-eye"></i>
</a>

<a href="#" class="btn btn-success btn-sm">
<i class="fas fa-download"></i>
</a>

</td>

</tr>

</tbody>

</table>

</div>

</div>

@endsection