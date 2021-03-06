<div id="page-contactos">
    <div class="grid_12" prefix_1>
        <div id="breadcrumb">
          <a class="link-linea" href="home">Inicio</a>
          <span class="separator">&raquo;</span> Cont&aacute;ctanos
      </div>      
    </div>
    <div class="clear"></div>
    <div class="grid_12" prefix_1>
        <div class="page-contactos-informacion">
            <h4 class="titulo-page-informacion">Cont&aacute;ctanos</h4>                    
            <p class="texto-parrafo">
                Utiliza el siguiente formulario para 
                hacernos llegar tus opiniones, consejos o mensajes.                  
            </p>             
        </div>
    </div>    
    <div class="clear"></div>
    <div class="grid_8" prefix_1>    
    <div class="page-contactos-informacion">    
        <div  align="center">            
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {  
            $email_to = "info@ladronesno.com";
            $email_subject = "Web Ladrones No - Formulario";
            $error = -1;
            $email = "";
            function MostrarMensaje($error,$tipo) {
                switch ($tipo) {
                    case 0:
                        echo "<div class=\"alert\">".$error."</div>";
                        break;
                    case 1:
                         echo "<div class=\"alert alert-error alert-block\">".$error."</div>";
                        break;
                    case 2:
                         echo "<div class=\"alert alert-success alert-block\">".$error."</div>";
                        break;
                }
            }           
            if (isset($_POST['nombre']) && $_POST['nombre']!=""){
                $nombre = $_POST['nombre'];                
            }else
            {
                 MostrarMensaje("<b>Nombre, </b> es un dato requerido.", 0);
                 $error=1;
            }
            if (isset($_POST['email']) && $_POST['email']!=""){
                $email = $_POST['email'];                
            }else
            {
                 MostrarMensaje("<b>E-Mail, </b> es un dato requerido.", 0);
                 $error=1;
            }
            if (isset($_POST['mensaje']) && $_POST['mensaje']!=""){
                $mensaje = $_POST['mensaje'];                
            }else
            {
                 MostrarMensaje("<b>Mensaje</b>, es un dato requerido.", 0);
                 $error=1;
            }
            if ($error < 0)
            {
                $mensaje_error = "";
                $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                if(!preg_match($email_exp,$email)) {
                    $mensaje_error = "<b>E-Mail </b> ingresado no es una dirección de correo electrónica válida.";
                    MostrarMensaje($mensaje_error, 1); // Error de Validacion de E-Mail
                    $error=1;
                }   
             }          
            $apellidos = $_POST['apellidos'];  
            if ($error < 0)
            {
                $email_message = "Se ha recibido el siguiente mensaje:\n";
                $email_message .= "Nombre: ".$nombre."\n";
                $email_message .= "Apellidos: ".$apellidos."\n";
                $email_message .= "E-Mail: ".$email."\n";            
                $email_message .= "Mensaje: \n".$mensaje."\n\n";
                $email_message .= "Enviado el " . date('d/m/Y H:i:s', time());
                
                // create email headers
                $headers = 'From: '.$email."\r\n".
                'Reply-To: '.$email."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                
                if (@mail($email_to, utf8_decode($email_subject),  utf8_decode($email_message), $headers))
                  $seEnvio = true;
                else
                  $seEnvio = false;
                if($seEnvio == true)            
                   MostrarMensaje("Se ha enviado su mensaje satisfactoriamente. Gracias por visitarnos.", 2); // Error de Validacion de E-Mail
                else            
                  MostrarMensaje("Se ha producido un error al enviar su mensaje. Favor contactese con el <b>Administrador</b>.", 1);
            }
        }       
        ?>  
        <form class="form2" id="form-contacto"  method="post" action="index.php?page=contacto">
            <div class="input">
                <div class="inputtext">Nombre (*): </div>
                <div class="inputcontent">
                  <input name="nombre" type="text" placeholder="Ingrese su Nombre" />
                </div>
            </div>
            <div class="input">
                <div class="inputtext">Apellidos: </div>
                <div class="inputcontent">
                    <input name="apellidos" type="text"  placeholder="Ingrese su Apellido" />
                </div>
            </div>
            <div class="input">
                <div class="inputtext">E-Mail (*): </div>
                <div class="inputcontent">
                   <input name="email" type="text"  placeholder="Ingrese su E-mail"  />
                </div>
            </div>
            <div class="inputtextbox nobottomborder">
                <div class="inputtext">Mensaje (*): </div>
                <div class="inputcontent">
                    <textarea name="mensaje" maxlength="1000" class="textarea"></textarea>
                </div>
            </div>
            <div class="buttons">
             <input class="orangebutton" type="submit" value="Enviar" />
            </div>
        </form>          
      </div>                    
   </div>
</div>
    <div class="grid_4" prefix_9>
    <div class="page-contactos-informacion">
        <h5 style="color: #666666; font-weight: bold; line-height: 1.25;">Direcci&oacute;n y Tel&eacute;fono</h5>
        <div class="imgdireccion-izda"></div>        
        <p class="texto-parrafo">
            
            <b>Oficina Central</b><br />           
            Direcci&oacute;n: Doble V&iacute;a La Guardia 5to Anillo <br /> 
            Urb. California, Calle Los Angeles #5 <br /> 
            Oficina: (591) 3358-1545 | (591) 3370-4115<br />
            Celular.:(591) 760-55943 | (591) 756-65365
            <i><strong>Santa Cruz de la Sierra, Bolivia, Bo.</strong></i>
        </p>
        <div class="imgcorreo-izda"></div>
        <h5 style="color: #666666; font-weight: bold; line-height: 1.25;">Correos El&eacute;ctronicos</h5>
        <p class="texto-parrafo">
            <i>Información General</i> <br />
            <b>info@ladronesno.com</b> <br />
            <i>Carlos Chavez</i> <br />           
        </p>
    </div>
    <div class="clear"></div>
</div> 
    <div class="clear"></div>
    <div class="grid_12" prefix_1>
        <div class="page-contactos-informacion">
            <div class="maps-google">        
                <p class="texto-parrafo"><strong>SSP - ¡Ladrones NO!</strong><br> 
                Dirección: Doble Vía la Guardia 5to Anillo 
                Urb. California, Calle Los Angeles #5 / Aptdo.   <br>                              
                Postal: 591 / <strong>Santa Cruz de la Sierra, Bolivia, Bo.</strong>
            </p>            
            <div id="contenido-mapa">
                <center>
                <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.bo/maps/ms?msa=0&amp;msid=208218809730180147292.0004fc887162b7d0a3327&amp;hl=es&amp;ie=UTF8&amp;t=m&amp;ll=-17.817728,-63.214645&amp;spn=0.005107,0.009656&amp;z=17&amp;iwloc=0004fc8883ea0c8594c9e&amp;output=embed">
                </iframe>
                <br />
                <small>Ver <a href="https://www.google.com.bo/maps/ms?msa=0&amp;msid=208218809730180147292.0004fc887162b7d0a3327&amp;hl=es&amp;ie=UTF8&amp;t=m&amp;ll=-17.817728,-63.214645&amp;spn=0.005107,0.009656&amp;z=17&amp;iwloc=0004fc8883ea0c8594c9e&amp;source=embed" style="color:#0000FF;text-align:left"  target="_blank">SSP - ¡Ladrones NO!</a> en un mapa más grande</small>
                </center>
            </div>
            </div>            
        </div>
    </div>
</div>
<div class="clear"></div>

