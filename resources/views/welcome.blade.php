@extends('master')                              
@section('content')         
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">
<section id="page1">
<div class="panel panel-default">
<div class="panel-heading">
   <center><font size="4">INSCRIPCIONES COPA NACIONAL DE SLALOM, FIGURAS Y WAKEBOARD - FESTIVAL DE VERANO 2018</center>
</div>
<div class="panel-body">
<div class="freebirdFormviewerViewFormContent ">
<div class="freebirdFormviewerViewHeaderHeader">
<div class="freebirdFormviewerViewHeaderTitleRow">
<br>
<div class="stage">
   <br>
   <div id="SLDR-ONE" class="sldr">
      <ul class="wrp animate">
         <li class="elmnt-one">
            <div class="wrap"><img src="public/Img/squi.jpg"  height="400">
            </div>
         </li>
         <li class="elmnt-two">
            <div class="wrap"><img src="public/Img/squi1.jpg"  height="400">
            </div>
         </li>
         <li class="elmnt-three">
            <div class="wrap"><img src="public/Img/sla.jpg"  height="400">
            </div>
         </li>
      </ul>
   </div>
   <div class="clear"></div>
   <ul class="selectors">
      <li class="focalPoint"><a href="">•</a></li>
      <li><a href="">•</a></li>
      <li><a href="">•</a></li>
   </ul>
</div>
<script src="public/Js/jquery.sldr.js"></script>

<div class="freebirdFormviewerViewHeaderDescription" dir="auto">
<br>
<p style="line-height: 27px; font-size: 11pt" align="justify">
   Queremos invitar a los participantes del Festival de Verano de Bogotá 2018, a vivir una experiencia única en la Copa Nacional de Slalom, Figuras y Wakeboard. Durante las dos jornadas del evento, los asistentes podrán disfrutar de diferentes shows como: Pirámide, dobles, malabares, pies, wakeboard, entre otros.  
</p>
<br>
<p style="line-height: 27px; font-size: 11pt" align="justify"><strong>IMPORTANTE: </strong> La actividad es 100% recreativa y contará con una instrucción técnica mínima para que la práctica se lleve a cabo con seguridad. No es, en ningún momento, un ejercicio de formación ni otorgará ningún tipo de certificación formal. </p>
<p style="line-height: 27px; font-size: 11pt" align="justify"><strong>TOTAL INSCRITOS POR JORNADA: </strong>  El cupo máximo habilitado por cada jornada de actividades es de 15 personas (niños).  La Copa tendrá un cupo máximo habilitado por las dos jornadas de 30 personas inscritas. </p>
<p style="line-height: 27px; font-size: 11pt" align="justify"><strong>LUGAR DE LA ACTIVIDAD: </strong>  PARQUE SIMÓN BOLIVAR  </p>
<br>
<p style="line-height: 27px; font-size: 11pt" align="justify"><strong>REQUISITOS: </strong><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;♣ Edades entre los 11 y 14 años.<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;♣ Saber nadar.<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;♣ Realizar el proceso de inscripción a través de la página oficial del IDRD.<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;♣ Asistir a la actividad con su acudiente (papá o mamá preferiblemente).<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;♣ Presentar certificado de cobertura médica vigente.<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;♣ Aceptar términos y condiciones.<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;♣ Para finalizar el proceso, la persona debe contestar cuatro (4) preguntas obligatorias del Festival de Verano. <br>
</p>
<br>
<br>
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<form method="POST" action="insertar" id="form_genform_gen" enctype="multipart/form-data">
   <input type="hidden" name="horas-json" id="horas-json" value="{{ $horas }}"></input>
   <div class="panel-body">
   <!-- nuevo formulario-->
   <div class="panel panel-default">
   <div class="panel-heading">
      <h3 class="panel-title"><font size="3" color="#1995dc">INFORMACIÓN PERSONAL</font></h3>
   </div>
   <div class="panel-body">
   <div class="row">
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombres Completos <span style="color: red;font-size: 18px">*</span></label>
         <input required type="text" class="form-control" id="nombre" name="nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="off">
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Apellidos Completos<span style="color: red;font-size: 18px">*</span></label>
         <input required type="text" class="form-control" id="apellido" name="apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" " autocomplete="off"><br>
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Tipo de Documento<span style="color: red;font-size: 18px">*</span></label>
         <select required name="tipo_documento" id="tipo_documento" class="form-control" " autocomplete="off">
            <option value=" ">Seleccione</option>
            <option value="1">Cédula de Ciudadanía</option>
            <option value="2">Cédula de Extranjería</option>
            <option value="3">Tarjeta de Identidad</option>
         </select>
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de Identificación <span style="color: red;font-size: 18px">*</span></label>
         <input required type="text" class="form-control" id="cedula" name="cedula" " autocomplete="off"><br>
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput"> Fecha de Nacimiento<span style="color: red;font-size: 18px">*</span></label>
         <input required type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" autocomplete="off">
         <br>
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">EPS<span style="color: red;font-size: 18px">*</span></label>
         <input required type="text" class="form-control" id="eps" name="eps" onkeyup="javascript:this.value=this.value.toUpperCase();" " autocomplete="off">
         <br>
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Email<span style="color: red;font-size: 18px">*</span></label>
         <input required type="mail" class="form-control" id="mail" name="mail" " autocomplete="off">
         <br>
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Teléfono personal de contacto<span style="color: red;font-size: 18px">*</span></label>
         <input required type="number" class="form-control" id="telefono" name="telefono" " autocomplete="off">
         <br>
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombre de contacto de emergencia<span style="color: red;font-size: 18px">*</span></label>
         <input required type="text" class="form-control" id="nombre_contacto" name="nombre_contacto" " autocomplete="off">
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Teléfono de contacto de emergencia<span style="color: red;font-size: 18px">*</span></label>
         <input required type="number" class="form-control" id="telefono_contacto" name="telefono_contacto" " autocomplete="off"><br>
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Fecha atención de actividad<span style="color: red;font-size: 18px">*</span></label>
         <select  required name="fecha" id="fecha" class="form-control" >
            <option value="">Seleccione</option>
            @foreach ($fechas as $fecha)
            <option value="{{ $fecha->id }}">{{ $fecha->fecha}}</option>
            @endforeach
         </select>
      </div>
      <div class="col-xs-6">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Horario atención de actividad<span style="color: red;font-size: 18px">*</span></label>
         <select  required name="hora" id="hora" class="form-control" >
            <option value="">Seleccione</option>
         </select>
         <br>
      </div>
   </div>
   <br>
   <!--encuesta-->

 <script>
$("#Enviar").click(function(event) {
  if(!$("#divRadios input[name='radio']").is(':checked')){
   alert('Favor de seleccionar una opción');
  }
});
</script>
   <div class="panel panel-default">
      <div class="panel-heading"><font size="3" color="#1995dc">ENCUESTA</font></div>
      <div class="panel-body">
         <!--preguntas 1 y 2-->
      <div id="divRadios">
         <div class="row">
            <div class="col-xs-6">
               <label style="font-family: arial; font-size: 15px">1- ¿En qué año se realizó la primera edición del Festival de Verano de Bogotá?</label><br>
               <div class="radio">
                  <label><input type="radio" name="pregunta1" value="A.1980"> A.1980</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta1" value="B.1997">B.1997</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta1" value="C.2002">C.2002</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta1" value="D.2010">D.2010</label>
               </div>
            </div>
            <div class="col-xs-6">
               <label style="font-family: arial; font-size: 15px">2- ¿Cada cuánto tiempo se realiza el Festival de Verano?</label><br>
               <div class="radio">
                  <label><input type="radio" name="pregunta2" value="A.Cada mes" >A.Cada mes</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta2" value="B.Cada año">B.Cada año</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta2" value="C.Cada dos años">C.Cada dos años</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta2" value="D.Cada Cuatro años">D.Cada Cuatro años</label>
               </div>
            </div>
         </div>
         <!--preguntas 3 y 4-->
         <div class="row">
            <div class="col-xs-6">
               <label style="font-family: arial; font-size: 15px">3- ¿Qué organismo gubernamental es el encargado de organizar el Festival?</label><br>
               <div class="radio">
                  <label><input type="radio" name="pregunta3" value="A.Secretaria de Turismo">A.Secretaria de Turismo</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta3" value="B.Cámara de Comercio de Bogotá">B.Cámara de Comercio de Bogotá</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta3" value="C.DIAN">C.DIAN</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta3" value="D.Instituto Distrital de Recreación y Deporte – IDRD">D.Instituto Distrital de Recreación y Deporte – IDRD</label>
               </div>
            </div>
            <div class="col-xs-6">
               <label style="font-family: arial; font-size: 15px">4- ¿Cuál es la sede principal del Festival?</label><br>
               <div class="radio">
                  <label><input type="radio" name="pregunta4" value="A.Parque Metropolitano Simón Bolívar">A.Parque Metropolitano Simón Bolívar</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta4" value="B.Parque el Tunal">B.Parque el Tunal</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta4" value="C.Parque Nacional">C.Parque Nacional</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="pregunta4" value="D.Salitre Mágico">D.Salitre Mágico</label>
               </div>
            </div>
         </div>
   </div>
   </div>
   </fieldset>
   <div class="freebirdFormviewerViewFormContent ">
   <div class="freebirdFormviewerViewHeaderHeader">
      <div class="freebirdFormviewerViewHeaderTitleRow">
         <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div>
      </div>
      <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div>
   </div>
   <div class="freebirdFormviewerViewItemList" role="list">
      <div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading">
         <div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner">
            <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div>
         </div>
      </div>
      <div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div>
      <div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881">
         <div class="freebirdFormviewerViewItemsItemItemheader">
            <div class="freebirdFormviewerViewItemsItemItemTitleContainer">
               <div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*</span><br><br><br><br><br></div>
               <div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto"><br>

      
     Mediante el diligenciamiento de este formulario, autorizo al  <strong>Instituto Distrital de Recreación y Deporte – IDRD.</strong>, así como a cualquier dependencia aliada o filial del Instituto, a realizar el tratamiento sobre mis datos personales, conforme a la ley 1581 de 2012, con la finalidad de ser utilizados para realizar registros de participación en las caminatas ecológicas, convocatorias y  estadísticas.<br><br>

     Manifiesto que he decidido participar voluntariamente en la actividad que ofrece el <strong>Instituto Distrital de Recreación y Deporte – IDRD.</strong> <br><br>

     Acepto y asumo todos los riesgos asociados con la participación en la actividad incluyendo, mis propias acciones u omisiones y asumo los riegos relacionados con caídas, lastimaduras, cortadas y riesgos asociados a la ocurrencia de circunstancias de fuerza mayor tales como desastres naturales y  ataques de animales. <br><br>

     Declaro obedecer todas las instrucciones durante la actividad ya sea escrita o por cualquier otro medio inteligible provista por el personal del Instituto Distrital de Recreación y Deporte – IDRD o contratistas para prestar asistencia durante la actividad. Así mismo, declaro que acepto el cuidado médico ofrecido por los paramédicos.<br> <br>

     Exonero de toda responsabilidad al <strong>Instituto Distrital de Recreación y Deporte – IDRD</strong>, así como a sus funcionarios y contratistas, aliados, patrocinadores y/o representantes, de todo reclamo o responsabilidad contractual y/o extracontractual que surja de mi participación en esta actividad.<br><br>

     De igual forma declaro que me encuentro en condiciones médicas, psicológicas y físicas aptas para asistir y participar en la actividad y me comprometo a notificar al personal del <strong>Instituto Distrital de Recreación y Deporte – IDRD</strong> sobre cualquier preexistencia o novedad en relación con mi salud. Así mismo certifico que me encuentro afiliado y activo a la entidad promotora de salud - EPS relacionada en el formato que se encuentra en el reverso de este documento.<br><br>
</div>
            </div>
         </div>
         <div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class="">
            <div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto">
               <div class="freebirdFormviewerViewItemsCheckboxChoice">
                  <label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer">
                     <div class="exportLabelWrapper">
                        <input type="checkbox" required style="float: left;
                           margin: 0px;" name="acepto" id="acepto">
                        <div class="docssharedWizToggleLabeledContent">
                           <div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">&nbsp;&nbsp;Acepto</span></div>
                        </div>
                     </div>
                  </label>
               </div>
               <input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden">
            </div>
         </div>
         <div id="i.req.131124881" class="screenreaderOnly"></div>
         <div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div>
      </div>
   </div>
   <div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681">
      <div class="freebirdFormviewerViewNavigationButtonsAndProgress">
         <div class="freebirdFormviewerViewNavigationButtons">
            <input class="enviar" type="submit" value="Enviar"> 
         </div>
      </div>
      <div class="freebirdFormviewerViewNavigationPasswordWarning">.</div>
   </div>
   
</form>
<script type="text/javascript" src="public/Js/form.js" ></script>
@stop