<?php
/***************************************************************************
 *                         lang_bbcode.php [spanish]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   
 *   traducci�n al espa�ol : Christian Gastrell (traducci�n y versi�n argentina)
 *                           Juan Manuel Mu�oz (corrector y versi�n espa�ola)
 
*    			    
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/18 15:40:20 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Introducci�n");
$faq[] = array("�Qu� es BBCode?", "BBCode es una implementaci�n especial de HTML. Que pueda hacer uso o no de BBCode en sus mensajes depende del administrador. Adem�s, Ud. puede deshabilitar el BBCode individualmente en cada mensaje desde el formulario situado justo debajo del marco con el texto del mensaje propiamente dicho. BBCode es similar al HTML en su estilo: las etiquetas (tags) se encierran entre corchetes [ y ] en lugar de &lt; y &gt; y ofrece un mejor control sobre lo que se escribe y c�mo se escribe. Dependiendo del estilo que use el foro puede encontrar que agregar BBCode es tan simple como pulsar en algunos botones en la interfaz de mensajes justo arriba de donde se escribe el texto del mismo. Aun existiendo esto, puede que esta gu�a le sea �til.");

$faq[] = array("--","Formato del texto");
$faq[] = array("C�mo crear texto en negrita, it�lica y subrayado", "BBCode incluye etiquetas para permitir que usted cambie r�pidamente el estilo b�sico de su texto. Esto se logra de las maneras siguientes: <ul><li>Para hacer que una parte del texto est� en negrita lo encierra entre <span class='thick'>[b][/b]</span>, por ej. <br /><br /><span class='thick'>[b]</span>Hola<span class='thick'>[/b]</span><br /><br />se ver� <span class='thick'>Hola</span></li><li>Para subrayar use <span class='thick'>[u][/u]</span>, por ejemplo:<br /><br /><span class='thick'>[u]</span>Buenos d�as<span class='thick'>[/u]</span><br /><br />se convierte en <span class='underline'>Buenos d�as</span></li><li>Para it�licas <span class='thick'>[i][/i]</span>, ej.<br /><br />Esto es <span class='thick'>[i]</span>�Muy Bueno!<span class='thick'>[/i]</span><br /><br />devolver� Esto es <span class='italic'>�Muy Bueno!</span></li></ul>");
$faq[] = array("C�mo cambiar el color o el tama�o del texto", "Para alterar el color o el tama�o de su texto se pueden utilizar las siguientes etiquetas. Tenga presente que el aspecto depender� del navegador y sistema operativo que usen los visitantes de su foro: <ul><li>Para cambiar el color del texto se encierra entre <span class='thick'>[color=][/color]</span>. Puede especificar un color predefinido (ej. red, blue, yellow, etc.) o el valor hexadecimal alternativo, ej. #FFFFFF, #000000. Por ejemplo, para crear un texto rojo puede utilizar:<br /><br /><span class='thick'>[color=red]</span>�Hola!<span class='thick'>[/color]</span><br /><br />o<br /><br /><span class='thick'>[color=#FF0000]</span>�Hola!<span class='thick'>[/color]</span><br /><br />ambas se mostrar�n <span style=\"color:red\">�Hola!</span></li><li>Cambiar el tama�o del texto se hace de una manera muy similar usando <span class='thick'>[size=][/size]</span>. Esta etiqueta es dependiente del estilo que est� usando pero el formato recomendado es el valor num�rico que representa el tama�o del texto en p�xeles, empezando en 1 (tan peque�o que no podr� leerlo) hasta 29 (muy grande). Por ejemplo:<br /><br /><span class='thick'>[size=9]</span>PEQUE�O<span class='thick'>[/size]</span><br /><br />normalmente ser� <span style=\"font-size:9px\">PEQUE�O</span><br /><br />y:<br /><br /><span class='thick'>[size=24]</span>�GRANDE!<span class='thick'>[/size]</span><br /><br />ser� <span style=\"font-size:24px\">�GRANDE!</span></li></ul>");
$faq[] = array("�Puedo combinar etiquetas de formato?", "S�, por supuesto; por ejemplo para llamar la atenci�n de alguien, escriba:<br /><br /><span class='thick'>[size=18][color=red][b]</span>�M�RAME!<span class='thick'>[/b][/color][/size]</span><br /><br />esto se mostrar� <span style=\"color:red;font-size:18px\"><span class='thick'>�M�RAME!</span></span><br /><br />Aun as�, recomendamos no configurar mucho texto para que se muestre de esta manera. Recuerde que depende de Ud., quien ingresa, verificar que todas las etiquetas est�n cerradas correctamente. Por ejemplo, el siguiente es incorrecto:<br /><br /><span class='thick'>[b][u]</span>Esto est� mal<span class='thick'>[/b][/u]</span>");

$faq[] = array("--","Citas y texto de ancho fijo");
$faq[] = array("Citando texto en respuestas/mensajes nuevos", "Hay dos maneras de que usted pueda citar texto: con una referencia o sin ella.<ul><li>Cuando utiliza la funci�n de Citar para contestar a un mensaje notar� que el texto del ingreso est� agregado al cuerpo del mensaje encerrado entre <span class='thick'>[quote=\"\"][/quote]</b >. Este m�todo permite citar con una referencia a una persona o cualquier otra cosa que usted elija poner. Por ejemplo, para citar una parte del texto del Sr. Blobby:<br /><br /><span class='thick'>[quote=\"Sr. Blobby\"]</span>El texto del Sr. Blobby aqu�<span class='thick'>[/quote]</span><br /><br />BBCode agregar� autom�ticamente: Sr. Blobby escribi�: antes del texto. Recuerde que usted < b>debe</b > incluir las comillas \"\" encerrando el nombre de la persona que est� citando -- no son opcionales.</li><li>El segundo m�todo permite que usted cite algo sin incluir el autor. Para utilizar esto incluya el texto entre etiquetas <span class='thick'>[quote][/quote]</b >. Cuando se vea la cita solo se ver�: Cita: El texto de la cita.</li></ul >");
$faq[] = array("Para mostrar C�digo o texto de ancho fijo", "Si quiere mostrar parte de texto de un c�digo, o cualquier cosa que necesite estar dispuesto con un tipo de letra que sea de ancho fijo como la fuente Courier o similares, solo encierre esa parte del texto entre etiquetas <span class='thick'>[code][/code]</span>, ej.<br /><br /><span class='thick'>[code]</span>echo \"Esto es c�digo\";<span class='thick'>[/code]</span><br /><br />Todos los formatos utilizados dentro de las etiquetas <span class='thick'>[code][/code]</span> se conservar�n.");

$faq[] = array("--","Generar Listas");
$faq[] = array("Crear una lista sin orden", "BBCode soporta dos tipos de listas, ordenadas y sin orden. Estas son esencialmente las mismas que sus an�logas en HTML. Una lista sin orden muestra cada item como de su lista secuencialmente uno despu�s del otro clasific�ndolos con un car�cter inicial. Para crear una lista sin orden use <span class='thick'>[list][/list]</span> y defina cada item con <span class='thick'>[*]</span>. Por ejemplo, para clasificar sus colores favoritos use:<br /><br /><span class='thick'>[list]</span><br /><span class='thick'>[*]</span>Rojo<br /><span class='thick'>[*]</span>Azul<br /><span class='thick'>[*]</span>Amarillo<br /><span class='thick'>[/list]</span><br /><br />Esto generar� la siguiente lista:<ul><li>Rojo</li><li>Azul</li><li>Amarillo</li></ul>");
$faq[] = array("Crear una lista ordenada", "El segundo tipo de lista, una ordenada, le permite controlar qu� aparece antes de cada item. Para crear una lista ordenada num�ricamente use <span class='thick'>[list=1][/list]</span> o use <span class='thick'>[list=a][/list]</span> para ordenerla con letras. Igual que con las listas sin orden los items se especifican con <span class='thick'>[*]</span>. Por ejemplo:<br /><br /><span class='thick'>[list=1]</span><br /><span class='thick'>[*]</span>Ir de compras<br /><span class='thick'>[*]</span>Comprar un ordenador nuevo<br /><span class='thick'>[*]</span>Insultar al ordenador cuando se cuelgue<br /><span class='thick'>[/list]</span><br /><br />se mostrar� as�:<ol type=\"1\"><li>Ir de compras</li><li>Comprar un ordenador nuevo</li><li>Insultar al ordenador cuando se cuelgue</li></ol>Para una lista con orden de letras:<br /><br /><span class='thick'>[list=a]</span><br /><span class='thick'>[*]</span>La primera respuesta<br /><span class='thick'>[*]</span>La segunda respuesta<br /><span class='thick'>[*]</span>La tercera respuesta<br /><span class='thick'>[/list]</span><br /><br />as�<ol type=\"a\"><li>La primera respuesta</li><li>La segunda respuesta</li><li>La tercera respuesta</li></ol>");

$faq[] = array("--", "Creando enlaces");
$faq[] = array("Enlazando a otros sitios", "phpBB BBCode soporta varias maneras de crear enlaces URI, Uniform Resource Indicators m�s conocidos como URI's.<ul><li>La primera es con etiquetas <span class='thick'>[url=][/url]</span>; lo que se ingrese despu�s del = ser� considerado como URL. Por ejemplo, para hacer un enlace a phpBB.com puede usar:<br /><br /><span class='thick'>[url=http://www.phpbb.com/]</span>�Visite phpBB!<span class='thick'>[/url]</span><br /><br />Esto generar� este enlace, 
    <a href=\%22http:/www.phpbb.com/\%22 target=\"_blank\">�Visite phpBB!</a> Notar� que el enlace se abre en una nueva ventana permitiendo as� que el usuario siga viendo el foro en que estaba.</li><li>Si quiere que se muestre la URL como su propio texto solo ingrese:<br /><br /><span class='thick'>[url]</span>http://www.phpbb.com/<span class='thick'>[/url]</span><br /><br />Esto generar� el siguiente enlace: 
    <a href=\%22http:/www.phpbb.com/\%22 target=\"_blank\">http://www.phpbb.com/</a></li><li>Adem�s, phpBB tiene una funci�n especial llamada <span class='italic'>Enlaces M�gicos</span> que convertir� cualquier URL sint�cticamente correcta en un enlace sin necesidad de que Ud. agregue ninguna etiqueta e incluso sin anteponer http://. Por ejemplo escribiendo www.phpbb.com en su mensaje se convertir� en 
    <a href=\%22http:/www.phpbb.com/\%22 target=\"_blank\">www.phpbb.com</a> cuando vea el mensaje.</li><li>Lo mismo se aplica a direcciones de correo electr�nico; puede especificar una direcci�n, como:<br /><br /><span class='thick'>[email]</span>nadie@dominio.com<span class='thick'>[/email]</span><br /><br />que se ver� <a href=\"emailto:nadie@dominio.com\">nadie@dominio.com</a> o puede simplemente ingresar nadie@dominio.com en su mensaje y ser� convertido.</li></ul>Como en todas las etiquetas BBCode Ud. puede incluir unas en otras como por ejemplo <span class='thick'>[img][/img]</span> (vea el siguiente tema), <span class='thick'>[b][/b]</span>, etc. Como con las etiquetas de formato, depende de Ud. cerrar correctamente todas las etiquetas. Por ejemplo: <br /><br /><span class='thick'>[url=http://www.phpbb.com/][img]</span>http://www.phpbb.com/images/phplogo.gif<span class='thick'>[/url][/img]</span><br /><br /><span class='underline'>no</span> es correcto y puede devenir en que su ingreso sea borrado. Tenga cuidado.");

$faq[] = array("--", "Mostrando im�genes en los mensajes");
$faq[] = array("Agregar una imagen en un mensaje", "phpBB BBCode incluye etiquetas para incluir im�genes en sus mensajes. Dos cosas muy importantes a recordar cuando se agregan im�genes son: muchos usuarios creen molesto que se incluyan muchas im�genes en un mensaje y segundo, la imagen que Ud. quiera mostrar debe estar de antemano en internet (no sirve que est� solo en su m�quina, a menos que Ud. dirija un sitio Web). Actualmente no hay manera de almacenar las im�genes en phpBB (se espera poder corregir esto en futuras versiones). Para mostrar una imagen debe encerrar su URL con las etiquetas <span class='thick'>[img][/img]</span>. Por ejemplo:<br /><br /><span class='thick'>[img]</span>http://www.phpbb.com/images/phplogo.gif<span class='thick'>[/img]</span><br /><br />Como se explica en la secci�n anterior se pueden incluir im�genes en las etiquetas <span class='thick'>[url][/url]</span> si as� lo desea, ej.<br /><br /><span class='thick'>[url=http://www.phpbb.com/][img]</span>http://www.phpbb.com/images/phplogo.gif<span class='thick'>[/img][/url]</span><br /><br />generar�:<br /><br />
    <a href=\%22http:/www.phpbb.com/\%22 target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Otros");
$faq[] = array("�Puedo agregar mis propias etiquetas?", "No, me temo que no directamente en phpBB 2.0. Se prev� ofrecer m�s personalizaci�n de BBCode en pr�ximas versiones.");

//
// This ends the BBCode guide entries
//

?>