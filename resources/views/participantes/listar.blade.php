@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header">
<h3 class="card-title">Lista de Participantes</h3>
</div>

<div class="card-body">

<table class="table table-bordered">

<thead>

<tr>

<th>ID</th>
<th>Nombre</th>
<th>Email</th>
<th>Teléfono</th>
<th>Curso</th>

</tr>

</thead>

<tbody>

@foreach($participants as $p)

<tr>

<td>{{ $p->id }}</td>
<td>{{ $p->nombre }}</td>
<td>{{ $p->email }}</td>
<td>{{ $p->telefono }}</td>
<td>{{ $p->curso->nombre }}</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

@endsection