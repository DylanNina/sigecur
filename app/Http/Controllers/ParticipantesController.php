<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{

public function store(Request $request)
{

DB::table('participants')->insert([

'nombre' => $request->nombre,
'email' => $request->email,
'telefono' => $request->telefono,
'curso_id' => $request->curso_id

]);

return back()->with('success','Participante registrado');

}



public function import(Request $request)
{

$file = $request->file('archivo_csv');

$csvData = array_map('str_getcsv', file($file));

foreach ($csvData as $row){

DB::table('participantes')->insert([

'nombre' => $row[0],
'email' => $row[1],
'telefono' => $row[2],
'curso_id' => $row[3]

]);

}

return redirect()->back()->with('success','Participantes importados correctamente');

}

}