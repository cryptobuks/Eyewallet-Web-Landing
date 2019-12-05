<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use Illuminate\Support\Facades\Log;
use Auth;

class SolicitudController extends Controller
{
    public function index()
    {
        $solicitudes=Solicitud::all();
        Log::info('Usuario: '. Auth::user()->name . ' Ingresa al listado de solicitudes');
    	return view('adminlte::solicitudes',compact('solicitudes'));
    }


}
