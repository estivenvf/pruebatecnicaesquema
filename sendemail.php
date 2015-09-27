<?php
	if(@$_REQUEST['submit']){
	$firstname = @$_POST['fname'];
	$lastname = @$_POST['lname'];
	$correo =  @$_POST['email'];
	$tel =  @$_POST['tel'];
	$men =  @$_POST['men'];
 
			   $asunto = 'Formulario de Contacto Prueba Técnica';
 
 $mensaje = '
    
    <p>Mensaje de Contacto</p>
<table>
<tr>
  <td style="background:#eee;"><strong style="padding: 0 10px;">First Name</strong></td>
  <td style="background:#eee;"><strong style="padding: 0 10px;">Last Name</strong></td>
  <td style="background:#eee;"><strong style="padding: 0 10px;">Email</strong></td>
  <td style="background:#eee;"><strong style="padding: 0 10px;">Phone Number</strong></td>
</tr>
 
<tr>
  <td>'.$firstname.'</td>
  <td>'.$lastname.'</td>
  <td>'.$correo.'</td>
  <td>'.$tel.'</td>
</tr>
</table>
<br /><br />
<table>
<tr style="border: 1px solid #333;">
  <td style="width: 400px;background:#eee;"><strong style="padding: 0 10px;">Message</strong></td>
</tr>
 
<tr>
  <td>'.$men.'</td>
</tr>
</table>';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: Medievel <jquiceno@esquema.com >' . "\r\n";
    'Reply-To: jquiceno@esquema.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
 // Enviarlo
 $para = $correo.",jquiceno@esquema.com";
 mail($para, $asunto, $mensaje, $cabeceras);
			  
}
	
?>