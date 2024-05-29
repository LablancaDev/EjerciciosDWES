<?php
class CurlRequest
{
public function sendPost($data)
{
$datosEnvio=json_encode($data);
//url contra la que atacamos
$ch = curl_init("http://localhost/apirest/api/usuario/");
//a true, obtendremos una respuesta de la url, en otro caso,
//true si es correcto, false si no lo es 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//establecemos el verbo http que queremos utilizar para la petición 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//enviamos el array data
curl_setopt($ch, CURLOPT_POSTFIELDS,$datosEnvio);
//obtenemos la respuesta
$response = curl_exec($ch);
// Se cierra el recurso CURL y se liberan los recursos del sistema 
curl_close($ch);
if(!$response) { 
return false;
} else {
return $response;
}
}
public function sendPut($id, $data)
{
$datosEnvio=json_encode($data);
//url contra la que atacamos
$ch = curl_init("http://localhost/apirest/api/usuario/".$id); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:
application/json'));
//a true, obtendremos una respuesta de la url, en otro caso,
//true si es correcto, false si no lo es 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//establecemos el verbo http que queremos utilizar para la petición
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
//enviamos el array data
curl_setopt($ch, CURLOPT_POSTFIELDS,$datosEnvio);
//obtenemos la respuesta
$response = curl_exec($ch);
// Se cierra el recurso CURL y se liberan los recursos del sistema 
curl_close($ch);
if(!$response) { 
return false;
} else {
return $response;
}
}
public function sendList()
{
//url contra la que atacamos
$ch = curl_init("http://localhost/apirest/api/usuario");
//a true, obtendremos una respuesta de la url, en otro caso,
//true si es correcto, false si no lo es 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//establecemos el verbo http que queremos utilizar para la petición 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//obtenemos la respuesta
$response = curl_exec($ch);
// Se cierra el recurso CURL y se liberan los recursos del sistema 
curl_close($ch);
if(!$response) { 
return false;
} else {
return $response;
}
}
public function sendGet($id)
{
//url contra la que atacamos
$ch = curl_init("http://localhost/apirest/api/usuario/".$id);
//a true, obtendremos una respuesta de la url, en otro caso,
//true si es correcto, false si no lo es 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//establecemos el verbo http que queremos utilizar para la petición 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//obtenemos la respuesta
$response = curl_exec($ch);
// Se cierra el recurso CURL y se liberan los recursos del sistema 
curl_close($ch);
if(!$response) { 
return false;
} else {
return $response;
}
}
public function sendDelete($id)
{
//url contra la que atacamos
$ch = curl_init("http://localhost/apirest/api/usuario/".$id);
//a true, obtendremos una respuesta de la url, en otro caso,
//true si es correcto, false si no lo es 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//establecemos el verbo http que queremos utilizar para la petición 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
//obtenemos la respuesta
$response = curl_exec($ch);
// Se cierra el recurso CURL y se liberan los recursos del sistema
curl_close($ch); 
if(!$response) {
return false;
} else {
return $response;
}
}
}
function mostrarDatos($resultado){
$json = json_decode($resultado, true);
$datos = $json['data']; 
if($datos!==null){
$str=null;
foreach($datos as $valor){ 
foreach($valor as $dato){
$str.=$dato." ";
}
$str.="<br>";
}
}
return $str;
}
$new = new CurlRequest();
$nuevoUsuario = ["Usuario"=>"Inma","Clave"=>"123456","Status"=>"0"];
$resultado = $new ->sendPost($nuevoUsuario);
$nuevoUsuario = ["Usuario"=>"David","Clave"=>"abcdef","Status"=>"1"];
$resultado = $new ->sendPost($nuevoUsuario);
$nuevoUsuario = ["Usuario"=>"Alba","Clave"=>"a1b2c3","Status"=>"0"];
$resultado = $new ->sendPost($nuevoUsuario);
$nuevoUsuario = ["Usuario"=>"Mario","Clave"=>"1a2b3c","Status"=>"1"];
$resultado = $new ->sendPost($nuevoUsuario);
$resultado = $new ->sendGet(2); 
echo mostrarDatos($resultado);
$id = 2;
$nuevoUsuario = ["Usuario"=>"Sandra","Clave"=>"qwerty","Status"=>"0"];
$resultado = $new ->sendPut($id, $nuevoUsuario);
$resultado = $new ->sendList(); 
echo mostrarDatos($resultado);
$resultado = $new ->sendDelete(4);
$resultado = $new ->sendList(); 
echo mostrarDatos($resultado);
?>