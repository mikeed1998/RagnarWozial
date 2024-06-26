<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;
use App\Seccion;
use App\Elemento;
use App\Politica;
use App\Servicio;
use App\SliderPrincipal;
use App\Faq;
use App\Empresa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class FrontController extends Controller
{
    public function index() {
        $config = Configuracion::first();
        $elements = Elemento::all();
        $slider_principal = SliderPrincipal::all();
        $empresas = Empresa::all();
        $servicios = Servicio::where('inicio', 1)->get()->toBase();

        return view('front.index', compact('config', 'elements', 'slider_principal', 'empresas', 'servicios'));
    }

    public function admin() {
        return view('front.admin');
    }

    public function nosotros() {
        $config = Configuracion::first();
        $elements = Elemento::all();
        $servicios = Servicio::all();
        $empresas = Empresa::all();

        return view('front.nosotros', compact('config', 'servicios', 'elements', 'empresas'));
    }

    public function contacto() {
        $config = Configuracion::first();
        $elements = Elemento::all();
        $servicios = Servicio::all();

        return view('front.contacto', compact('config', 'servicios', 'elements'));
    }

    public function servicios() {
        return view('front.servicios');
    }

    public function servicio($id) {
        $config = Configuracion::first();
        $servicio = Servicio::find($id);
        $servicios = Servicio::all();
        $empresas = Empresa::all();
        
        return view('front.servicio', compact('config', 'servicio', 'servicios', 'empresas'));
    }

    public function aviso_privacidad() {
        $aviso_privacidad = Politica::find(1);
        return view('front.aviso_privacidad', compact('aviso_privacidad'));
    }

    public function metodos_pago() {
        $metodos_pago = Politica::find(2);
        return view('front.metodos_pago', compact('metodos_pago'));
    }

    public function devoluciones() {
        $devoluciones = Politica::find(3);
        return view('front.devoluciones', compact('devoluciones'));
    }

    public function terminos_condiciones() {
        $terminos_condiciones = Politica::find(4);
        return view('front.terminos_condiciones', compact('terminos_condiciones'));
    }

    public function garantias() {
        $garantias = Politica::find(5);
        return view('front.garantias', compact('garantias'));
    }

    public function politicas_envio() {
        $politicas_envio = Politica::find(6);
        return view('front.politicas_envio', compact('politicas_envio'));
    }

    public function faqs() {
        $faqs = Faq::all();
        return view('font.faqs', compact('faqs'));
    }

    public function formularioContact(Request $request) {
        $mail = new PHPMailer;
		$validate = Validator::make($request->all(),[
			'nombre' => 'required',
			"empresa" => "required",
			'email' => 'required',
            'whatsapp' => 'required',
			"mensaje" => "required",
		],[],[]);

		if ($validate->fails()) {
			\Toastr::error('Error, se requieren todos los datos');
			return redirect()->back();
		}

		$data = array(
			'tipoForm' => $request->tipoForm,
			'nombre' => $request->nombre,
			'empresa' => $request->empresa,
			'email' => $request->email,
            'whatsapp' => $request->whatsapp,
			'mensaje' => $request->mensaje,
			'hoy' => Carbon::now()->format('d-m-Y')
		);

		$html = view('front.mailcontact', compact('data'));

		$config = Configuracion::first();

		try {
			$mail->isSMTP();
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			// $mail->SMTPDebug = 2;
			$mail->Host = $config->remitentehost;
			$mail->SMTPAuth = true;
			$mail->Username = $config->remitente;
			$mail->Password = $config->remitentepass;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port = $config->remitenteport;

			$mail->SetFrom($config->remitente, 'Ragnar - Contacto');
			$mail->isHTML(true);

			$mail->addAddress($config->destinatario,'Ragnar - Contacto');
			if (!empty($config->destinatario2)) {
				$mail->AddBCC($config->destinatario2,'Ragnar - Contacto');
			}

			$mail->Subject = 'Mensaje';

			$mail->msgHTML($html);
			// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



			if($mail->send()){
				dd('paso culo');
                //Contacto@dineroorganico.com
                \Toastr::success('Correo enviado Exitosamente!');
				return redirect()->back();
			}else{
				dd('no paso culo');
				\Toastr::error('Error al enviar el correo');
				return redirect()->back();
			}


		} catch (phpmailerException $e) {
			\Toastr::error($e->errorMessage());//Pretty error messages from PHPMailer
			return redirect()->back();
		} catch (Exception $e) {
			\Toastr::error($e->getMessage());//Boring error messages from anything else!
			return redirect()->back();
		}
    }
}



