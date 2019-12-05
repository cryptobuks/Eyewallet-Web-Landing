<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Pago;
use App\Solicitud;

class PagoController extends Controller
{
    public function notificacion(Request $request, $solicitud)
    {
        log::info($request->json()->all());
         if(!isset($request->json()->all()['confirmations'])) {
            log::info('Notificacion Creada');
            return response('OK', 200)
              ->header('Content-Type', 'text/plain')
              ->header('Access-Control-Allow-Credentials','true');
        } else {
            $notificacion = $request->json()->all();
            $pago = Pago::where('id_solicitud','=',$solicitud)->first();
            if(!is_null($pago)) {
                if($notificacion['confirmations'] < 3) {
                    $pago->confirmaciones = $notificacion['confirmations'];
                    $pago->monto = number_format($notificacion['amount_received'],8);
                    $pago->update();
                } else {
                    $pago->confirmaciones = $notificacion['confirmations'];
                    $pago->txid = $notificacion['tx_id'];
                    $pago->update();
                    $solicitud = Solicitud::where('id','=',$solicitud)->first();
                    if($solicitud->estado == 0) {
                        $solicitud->estado = 1;
                        $solicitud->update();
                    }
                    
                }
            }
            
        }
    }

    public function notificacion_test(Request $request)
    {
        log::info($request->json()->all());
         if(!isset($request->json()->all()['confirmations'])) {
            log::info('Notificacion Creada');
            return response('OK', 200)
              ->header('Content-Type', 'text/plain')
              ->header('Access-Control-Allow-Credentials','true');
        } else {
            $notificacion = $request->json()->all();
            $pago = Pago::where('id_solicitud','=',$solicitud)->first();
            if(!is_null($pago)) {
                if($notificacion['confirmations'] < 3) {
                    $pago->confirmaciones = $notificacion['confirmations'];
                    $pago->monto = number_format($notificacion['amount_received'],8);
                    $pago->txid = $notificacion['tx_id'];
                    $pago->update();
                } else {
                    $pago->confirmaciones = $notificacion['confirmations'];
                    $pago->update();
                    $solicitud = Solicitud::where('id','=',$pago->id_solicitud)->first();
                    if($solicitud->estado == 0) {
                        $solicitud->estado = 1;
                        $solicitud->update();
                    }
                    
                }
            }
            
        }
        
    }

    public function factura($identificacion)
    {
        
        $observaciones='';
        $factura = (object) DB::table('solicituds')
                        ->select('*')
                        ->join('pagos','pagos.id_solicitud','=','solicituds.id')
                        ->where('solicituds.identificacion','=',$identificacion)
                        ->first();
        //dd($factura);
        if($factura->estado == 0 && $factura->confirmaciones == 0){
            $observaciones= 'Usted aun no ha realizado el pago de esta factura, recuerde que solo dispone de 30 minutos a partir de la fecha de facturacion para completar la transaccion a la direccion: '. $factura->fw_address;
            $estado = 'NO PAGADA';
        }
        if($factura->estado == 0 && $factura->confirmaciones > 0){
            $observaciones= 'Su pago ha sido recibido y esta en proceso de verificacion.';
            $estado = 'PROCESANDO PAGO';
        }
        if($factura->estado == 1){
            $observaciones= 'Gracias por realizar su pago, su solicitu se encuentra en estado de verificación de los documentos suministrados. Se le notificará por correo electrónico cuando el proceso de verificación haya finalizado.';
            $estado = 'PAGADA - SIN VERIFICAR';
        }
        if($factura->estado == 2){
            $observaciones= 'Sus documentos han sido verificados de manera exitosa, se le notificará por correo electronico el proceso a seguir.';
            $estado = 'PAGADA - VERIFICADO';
        }
        
        if(!is_null($factura)) {
            return view('factura', compact('factura','observaciones','estado'));
        } else {
            return view('adminlte::errors.404');
        }
        
    }

    function getPrice(){
        $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://block.io/api/v2/get_current_price/?api_key=52f7-573a-6369-a405');
            $response = json_decode($response->getBody()->getContents());
            return $response->data->prices[0]->price;
    }
}
