<?php 
$caja_nombre = $_POST['caja_nombre'];
$caja_apeP = $_POST['caja_apeP'];
$caja_apeM = $_POST['caja_apeM'];
$caja_date = $_POST['caja_date'];
$caja_entidad = $_POST['caja_entidad'];
$caja_sexo = $_POST['caja_sexo'];
$dia=substr($caja_date, 0, 2);
$mes=substr($caja_date, 3, 2);
$anio=substr($caja_date, 8, 2);

$numero = $_POST["caja_numero"];

$cadena = $_POST["caja_cadena"];

$letra = $_POST["caja_letra"];

echo "Tu CURP es: ".strtoupper(substr($caja_apeP, 0, 2).substr($caja_apeM, 0, 1).substr($caja_nombre, 0, 1).$anio.$mes.$dia.$caja_sexo.substr($caja_entidad, 0, 2))."RRL18";
echo "<br><br>Tu numero en: ";
echo "<br>Binario: ".decbin($numero);
echo "<br>Octal: ".decoct($numero);
echo "<br>Hexadecimal: ".dechex($numero);
echo "<br>";
$cadena=strtolower($cadena);
$cont=0;
$contLet=0;
$cons=0;
$cad_loca="";

for ($i=0; $i < strlen($cadena); $i++) { 
	if (substr($cadena, $i, 1)=="a" || substr($cadena, $i, 1)=="e" || substr($cadena, $i, 1)=="i" || substr($cadena, $i, 1)=="o" || substr($cadena, $i, 1)=="u") {
		$cont++;
	}else{
		$cons++;
	}
	if (($i%2)==0) {
		$cad_loca=$cad_loca.strtolower(substr($cadena, $i, 1));
	}else{
		$cad_loca=$cad_loca.strtoupper(substr($cadena, $i, 1));
	}
	if (substr($cadena, $i, 1)==strtolower($letra)) {
		$contLet++;
	}
}

echo "<br>Cantidad de vocales: ".$cont;
echo "<br>Cantidad de consonantes: ".$cons;
echo "<br>Tu letra aparece: ".$contLet." veces";
echo "<br>Cadena Loca: ".$cad_loca;
echo "<br>";

$numBin = decbin($numero);
$a2="";

for ($i=0; $i < strlen($numBin); $i++) { 
	if (substr($numBin, $i, 1)=="1") {
		$a2=$a2."0";
	}else{
		$a2=$a2."1";
	}
}

echo "<br>Tu numero binario en complemento A2";
echo "<br>Bin: ".$numBin;
echo "<br>A2:  ".$a2;



 ?>