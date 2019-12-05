<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\Mail\Register;
use App\Solicitud;
use App\Pago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class RegistroController extends Controller
{

    public function Registrar(Request $request)
    {
        $solicitud = Solicitud::where('identificacion','=',$request['identificacion'])->first();
        if(!is_null($solicitud)){
            return redirect()->route('factura', ['identificacion' => $request['identificacion']]);
        }

        //dd($request->all());
        $arrayValidate = [
            'url_foto' => 'required|image|mimes:jpeg,png,jpg,pdf|max:1024',
            'url_domicilio' => 'required|image|mimes:jpeg,png,jpg,pdf|max:1024',
            'nombres' => 'required',
            'email' => 'required',
            'identificacion' => 'required',
            'direccion' => 'required',
            'pais' => 'required',
            'ciudad' => 'required',
            'postal' => 'required',
            'celular' => 'required',
            'tipo' => 'required',
        ];

        if ($request['tipo'] == 1) {
            $arrayValidate += ['url_identidad3' => 'image|mimes:jpeg,png,jpg,pdf|max:1024'];
            $arrayValidate += ['url_identidad2' => 'image|mimes:jpeg,png,jpg,pdf|max:1024'];
            
        };
        if ($request['tipo'] == 2) {
            $arrayValidate += ['url_identidad1' => 'image|mimes:jpeg,png,jpg,pdf|max:1024'];
            
        }
        $request->validate($arrayValidate);
        $archivo = new Archivo;
        $usuario = Solicitud::create($request->all());
        if ($request->file('url_identidad1')) {
            $archivo->url_identidad1 = $request->file('url_identidad1')->store('documentos/' . $usuario->identificacion . '/identidad');
        }
        if ($request->file('url_identidad2')) {
            $archivo->url_identidad1 = $request->file('url_identidad2')->store('documentos/' . $usuario->identificacion . '/pasaporte');
        }
        if ($request->file('url_identidad3')) {
            $archivo->url_identidad2 = $request->file('url_identidad3')->store('documentos/' . $usuario->identificacion . '/pasaporte');
        } else {
            $archivo->url_identidad2 = "";
        }
        if ($request->file('url_foto')) {
            $archivo->url_foto = $request->file('url_foto')->store('documentos/' . $usuario->identificacion . '/foto');
        }
        if ($request->file('url_domicilio')) {
            $archivo->url_domicilio = $request->file('url_domicilio')->store('documentos/' . $usuario->identificacion . '/direccion');
        }
        $archivo->usuario_id = $usuario->id;
        $archivo->tipo_identificacion = $usuario->tipo;
        $archivo->save();
        Log::info('Archivos almacenados con exito:'. $archivo->id);
        if ($usuario->save()) {
            Log::info('Solicitud registrada:'. $usuario->id);
            $client = new \GuzzleHttp\Client();
            $endpoint = url('/')."/api/payment-notification/".$usuario->id;
            $response = $client->request('POST', 'https://cloud.eyewallet.com/api/payment', [
                'headers' => [
                    'X-Authorization' => 'serdybrtumdntyufgfjnirt77567958487',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                        'network' =>'BTC',
                        'endpoint' => $endpoint
                    ]
            ]);
            $response = json_decode($response->getBody()->getContents());
            if($response->data->success){
                Log::info('Direccion de pago asignada:'. $response->data->addr);
                $pago = new Pago();
                $pago->id_solicitud = $usuario->id;
                $pago->fw_address = $response->data->addr;
                $pago->save();
                $this->sendMail($usuario);
                Log::info('Pago registrado con exito:'. $pago->id);
                return view('qrCode',compact('pago'));
            } else {
                return $response;
            }

        } 
    }

    function sendMail($usuario)
    {
        Mail::to($usuario->email)->send(new Register($usuario));
        Log::info('Email enviado a: '. $usuario->email);
    }

}
