<?php

# Indicamos la dirección (nombre) del servidor
$server_name = "mail.ahoratabasco.com";

# Indicamos el nombre de la persona que va a recibir el mensaje
$person_name = "NEW GLOBAR MARKETING";

# Indicamos la dirección de correo de esa persona
$person_email ="sistemas@ahoratabasco.com";

# Las tres líneas que vienen a continuación son necesarias
# para que la cabecera del mensaje esté en formato HTML
$header = "MIME-Version: 1.0\n";
$header .= "Content-Type: text/html; charset=iso-8859-1\n";
$header .="From: webmaster@$server_name\nReply-To:
webmaster@$server_name\nX-Mailer: PHP/";

# Esto que viene es el mensaje. (Fíjate en los tags HTML)
$mensaje = "<font face='verdana' size='2'>Hola $person_name,<br /><br />
Perdona nuestra intromisión. Simplemente te molestamos para que, si tienes un 
poco de tiempo, visites nuestro Sitio Web.<br /><br />
La dirección la tienes en la parte inferior de este mensaje.<br /><br />
Por favor no respondas a este mensaje. Si no te interesa, simplemente 
ignóralo.<br /><br />
Gracias por todo.<br /><br />
Sinceramente,<br /><br />
Aurelio Buendía<br />
Webmaster de <b>Incordios</b><br />
<a href='http://www.miservidor,net'>http://www.miservidor.net</a><br>
<a href='mailto:webmaster@miservidor.net'>webmaster@miservidor.net</a></font>
<br /><br />";
<div style="clear:both; margin-top:0em; margin-bottom:1em;"><a href="http://lecciones.batiburrillo.net/mostrar-los-ultimos-registros-de-una-base-de-datos/" target="_self" rel="dofollow" class="ud109d499d5b1d71736c74ecf4d496f56"><style>.ud109d499d5b1d71736c74ecf4d496f56{padding:0px;margin:0;padding-top:1em!important;padding-bottom:1em!important;width:100%;display:block;font-weight:bold;background-color:#eaeaea;border:0!important;border-left:4px solid #34495E!important;box-shadow:0 1px 2px rgba(0, 0, 0, 0.17);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.17);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.17);-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.17);text-decoration:none}.ud109d499d5b1d71736c74ecf4d496f56:active,.ud109d499d5b1d71736c74ecf4d496f56:hover{opacity:1;transition:opacity 250ms;webkit-transition:opacity 250ms;text-decoration:none}.ud109d499d5b1d71736c74ecf4d496f56{transition:background-color 250ms;webkit-transition:background-color 250ms;opacity:1;transition:opacity 250ms;webkit-transition:opacity 250ms}.ud109d499d5b1d71736c74ecf4d496f56
.ctaText{font-weight:bold;color:#000;text-decoration:none;font-size:16px}.ud109d499d5b1d71736c74ecf4d496f56
.postTitle{color:#2980B9;text-decoration:underline!important;font-size:16px}.ud109d499d5b1d71736c74ecf4d496f56:hover
.postTitle{text-decoration:underline!important}</style><div style="padding-left:1em; padding-right:1em;"><span class="ctaText">Ver también:</span>  <span class="postTitle">Mostrar los últimos registros de una base de datos MySQL</span></div></a></div>
# Función de envío del mensaje
mail("$person_email","Recomendación","$mensaje","$header");

# Ten en cuenta que:
# $person_email es la dirección de correo de la persona que recibe el mensaje
# "Recomendación" es el Asunto del mensaje
# $mensaje es todo el texto del mensaje
# $header es la cabecera. En ella va incluida la dirección de remite.

# Para comprobar que el script ha funcionado, podemos poner lo siguiente:
echo "Mensaje enviado.";

?>