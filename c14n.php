<?php
class C14N{
/* Author: Antonio Sejas
   URI: http://antonio.sejas.es
   date: FEB-2012
   License: Chttp://creativecommons.org/licenses/by-nc-sa/3.0/
*/

function __construct() {

}

public static function  canonicalizar ($texto){
  $original_config = libxml_use_internal_errors(true);
  libxml_clear_errors();
  //Cargamos el archivo xml
  $xml= new DOMDocument();
  $xml->loadXML($texto);
  $textoCanonicalizado=$xml->c14n();
  //Devolvemos a su estado original el reporte de errores de libxml
  libxml_clear_errors();
  libxml_use_internal_errors($original_config);

  return $textoCanonicalizado;
}

public static function getAlgorithmUri(){
	//http://www.w3.org/TR/2001/REC-xml-c14n-20010315
	return "http://www.w3.org/TR/2001/REC-xml-c14n";
}

}
?>
