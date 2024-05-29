<?php
$codigo=$_GET['codigo'];
$datos = array( array("codigo"=>100, "nombre"=>"Luis Ros Sala",
"edad"=>30,"ciudad"=>"New York"), 
array("codigo"=>200, "nombre"=>"Ana Molero Mas",
"edad"=>56,"ciudad"=>"Valencia"), 
array("codigo"=>300, "nombre"=>"Roberto Bas Moreno",
"edad"=>45,"ciudad"=>"Barcelona"), 
array("codigo"=>400, "nombre"=>"Sara Solis Bosch",
"edad"=>20,"ciudad"=>"Madrid"));
function array_to_xml($array, &$xml_info, $codigo) {
$encontrado=false;
foreach($array as $key => $value) { 
if($value['codigo']==$codigo){
$array = $value;
$encontrado=true; 
break;
}
}
if ($encontrado){
foreach($array as $key => $value) { 
if(is_array($value)) {
if(!is_numeric($key)){
$subnode = $xml_info->addChild("$key"); 
array_to_xml($value, $subnode, $codigo);
}else{
$subnode = $xml_info->addChild("item$key"); 
array_to_xml($value, $subnode, $codigo);
}
}else {
$xml_info->addChild("$key",htmlspecialchars("$value"));
}
}
}
}
//Creamos un objeto del tipo SimpleXMLElement
$xml_info = new SimpleXMLElement("<?xml version=\"1.0\"?>
<empleado></empleado>");