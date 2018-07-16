<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use Redirect;
use Validator;
use Session;
use App\Form;
use Idrd\Usuarios\Repo\Acceso;
use App\Fechas;
use App\Horas;
use App\Cupo;
use Mail;



class FormController extends BaseController

{
    var $url;

     public function index()
    {

      //$fechas = Fechas::with('horas')->get();
      $fechas = Fechas::all();
      $horas = Horas::all();

      //dd($horas); exit();
      return view('welcome',["fechas"=>$fechas, "horas"=>$horas,]);
    }

    private function cifrar($M)

    {   

      $C="";
      $k = 18; 
      for($i=0; $i<strlen($M); $i++)$C.=chr((ord($M[$i])+$k)%255);
      return $C;
    }

    private function decifrar($C)
    {   

      $M="";
      $k = 18;
      for($i=0; $i<strlen($C); $i++)$M.=chr((ord($C[$i])-$k+255)%255);
      return $M;
    }



   public function listar_datos(){

    $acceso = Form::with('horas', 'horas.fecha')->whereYear('created_at', '=', date('Y'))->get(); 
    
    $tabla='<table id="lista">
        <thead>
           <tr>
             <th style="text-transform: capitalize;">id</th>
             <th style="text-transform: capitalize;">Nombres</th>
             <th style="text-transform: capitalize;">Apellidos</th> 
             <th style="text-transform: capitalize;">Documento de identidad</th>
             <th style="text-transform: capitalize;">Fecha de Nacimiento</th>             
             <th style="text-transform: capitalize;">Email</th>
             <th style="text-transform: capitalize;">Eps</th>
             <th style="text-transform: capitalize;">Nombre de contacto de emergencia</th>
             <th style="text-transform: capitalize;">Teléfono</th>             
             <th style="text-transform: capitalize;">Fecha de actividad</th>
             <th style="text-transform: capitalize;">hora de actividad</th>
             <th style="text-transform: capitalize;">1- ¿En qué año se realizó la primera edición del Festival de Verano de Bogotá?</th>
             <th style="text-transform: capitalize;">2- ¿Cada cuánto tiempo se realiza el Festival de Verano?</th>             
             <th style="text-transform: capitalize;">3- ¿Qué organismo gubernamental es el encargado de organizar el Festival?</th>
             <th style="text-transform: capitalize;">4- ¿Cuál es la sede principal del Festival?</th>
            </tr>
        </thead>
        <tbody id="tabla">';

      foreach ($acceso as $key => $value) {

       $tabla.='<tr><td>'.$value->id.'</td>';
       $tabla.='<td>'.$value->nombre.'</td>';   
       $tabla.='<td>'.$value->apellido.'</td>';   
       $tabla.='<td>'.$value->cedula.'</td>';
       $tabla.='<td>'.$value->fecha_nacimiento.'</td>';     
       $tabla.='<td>'.$value->mail.'</td>';  
       $tabla.='<td>'.$value->eps.'</td>'; 
       $tabla.='<td>'.$value->contacto.'</td>'; 
       $tabla.='<td>'.$value->telefono.'</td>';   
       $tabla.='<td>'.(!empty($value->horas->fecha['fecha'])?$value->horas->fecha['fecha']:'').'</td>';
       $tabla.='<td>'.$value->horas['hora'].'</td>';
       $tabla.='<td>'.$value->pregunta1.'</td>';  
       $tabla.='<td>'.$value->pregunta2.'</td>'; 
       $tabla.='<td>'.$value->pregunta3.'</td>'; 
       $tabla.='<td>'.$value->pregunta4.'</td></tr>';
       

      }
      $tabla.='</tbody></table>';

      echo $tabla;

    }

  
    public function logear(Request $request)
    {

      $usuario = $request->input('usuario');
      $pass = $request->input('pass');
      $acceso = Acceso::where('Usuario',$usuario)->where('Contrasena', sha1($this->cifrar($pass)) )->first();

      if (empty($usuario)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
      if (empty($acceso)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
       
       session_start() ;
       $_SESSION['id_usuario'] = json_encode($acceso);

      return view('admin'); exit(); 
    }


//insertar

 public function insertar(Request $request){

      $post = $request->input();



      $usuario = Form::where('cedula', $request->input('cedula'))->first(); 

       if (!empty($usuario)) { return view('error',['error' => 'Este usuario ya fue registrado!'] ); exit(); }

       $formulario = new Form([]);
        
        //envio de correo
        $registros = $this->inscritos($request->input('hora'));
        var_dump($registros->count());
        //exit();
       if($registros->count() <10){

        $this->store($formulario, $request->input());

        Mail::send('email', ['user' => $request->input('mail'),'formulario' => $formulario], function ($m) use ($request) 
        {
            $m->from('no-reply@idrd.gov.co', 'Registro Exitoso a COPA NACIONAL DE SLALOM, FIGURAS Y WAKEBOARD - FESTIVAL DE VERANO 2018');
            $m->to($request->input('mail'), $request->input('primer_nombre'))->subject('Registro Exitoso a COPA NACIONAL DE SLALOM, FIGURAS Y WAKEBOARD - FESTIVAL DE VERANO 2018');
        });
        
      }else{

        return view('error', ['error' => 'Lo sentimos el limite de inscritos fue superado para esta fecha y horario']);

      }

        //envio de correo

        return view('error', ['error' => 'Su Inscripción fue aceptada']);

    }
    //fin insertar
   
// conteo de la tabla

    private function inscritos($hora){
      $registros = Form::where('hora', $hora)->get();
      return $registros;
    }

    private function store($formulario, $input)

    {
        $formulario['nombre'] = $input['nombre'];
        $formulario['apellido'] = $input['apellido'];
        $formulario['tipo_documento'] = $input['tipo_documento'];
        $formulario['cedula'] = $input['cedula'];
        $formulario['fecha_nacimiento'] = $input['fecha_nacimiento'];
        $formulario['eps'] = $input['eps'];
        $formulario['mail'] = $input['mail'];
        $formulario['telefono'] = $input['telefono'];
        $formulario['nombre_contacto'] = $input['nombre_contacto'];
        $formulario['telefono_contacto'] = $input['telefono_contacto'];
        $formulario['fecha'] = $input['fecha'];
        $formulario['hora'] = $input['hora'];
        $formulario['pregunta1'] = $input['pregunta1'];
        $formulario['pregunta2'] = $input['pregunta2'];
        $formulario['pregunta3'] = $input['pregunta3'];
        $formulario['pregunta4'] = $input['pregunta4'];
        $formulario->save();

        return $formulario;

        

    }

}
