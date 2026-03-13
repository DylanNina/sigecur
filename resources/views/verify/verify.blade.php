@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card">

<div class="card-header text-center">
<h4>Verificar Certificado</h4>
</div>

<div class="card-body">

<form>

<div class="form-group">

<label>Código de certificado</label>

<input type="text" class="form-control" placeholder="CERT-XXXX">

</div>

<button class="btn btn-success btn-block">
Verificar
</button>

</form>

</div>

</div>

</div>

</div>

@endsection