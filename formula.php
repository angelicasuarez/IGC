<html>
<head>
	<link  href="resultado.css" rel="stylesheet" type="text/css">
	<title> resultado de la formula</title>
</head>

<body>
	<fieldset>
	
	<legend> RESULTADO</legend>
<?php 
$cintura=$_REQUEST['cintura_txt'];
$cadera=$_REQUEST['caderas_txt'];
$cuello=$_REQUEST['cuello_txt'];
$altura=$_REQUEST['altura_txt'];
$edad=$_REQUEST['edad_txt'];
$nombre = $_REQUEST['nombre_txt'];

if($_REQUEST['sexo_rdo']=="F")
{
	$aux=1.29579-0.35004*(log10($cintura+$cadera-$cuello))+0.221*(log10($altura));
	$pgc=(495/$aux)-450;
	$pgc=round($pgc,PHP_ROUND_HALF_DOWN);
	echo $nombre;
	echo "<br> <br>";

	echo "Su porcentaje es  :  ".$pgc."   El cual esta situado en el rango de  ";
	echo "&nbsp";




	if ($edad>=19 && $edad <=24) {
	if ($pgc<=7) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>7) && ($pgc <=12 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>12) && ($pgc <=15)) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>15) && ($pgc <=20 )) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>20) && ($pgc<=25)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>25) && ($pgc <=30)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>30) {
		$condicion="Obesidad";
		echo $condicion;
	}
}



	if ($edad>=25 && $edad <=29) {
	if ($pgc<=7) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>7) && ($pgc <=12 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>12) && ($pgc <=16)) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>16) && ($pgc <=21 )) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>21) && ($pgc<=26)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>26) && ($pgc <=31)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>31) {
		$condicion="Obesidad";
		echo $condicion;
	}
}

	if ($edad>=30 && $edad <=34) {
	if ($pgc<=7) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>7) && ($pgc <=12 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>12) && ($pgc <=17)) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>17) && ($pgc <=22 )) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>22) && ($pgc<=27)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>27) && ($pgc <=32)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>32) {
		$condicion="Obesidad";
		echo $condicion;
	}
}

if ($edad>=35 && $edad <=39) {
	if ($pgc<=7) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>7) && ($pgc <=12 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>12) && ($pgc <=19)) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>19) && ($pgc <=23)) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>23) && ($pgc<=28)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>28) && ($pgc <=33)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>33) {
		$condicion="Obesidad";
		echo $condicion;
	}
}


if ($edad>=40 && $edad <=44) {
	if ($pgc<=7) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>7) && ($pgc <=12 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>12) && ($pgc <=21)) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>21) && ($pgc <=24)) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>24) && ($pgc<=29)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>29) && ($pgc <=34)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>34) {
		$condicion="Obesidad";
		echo $condicion;
	}
}

if ($edad>=45 && $edad <=49) {
	if ($pgc<=7) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>7) && ($pgc <=12 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>12) && ($pgc <=23)) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>23) && ($pgc <=26)) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>26) && ($pgc<=31)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>31) && ($pgc <=36)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>36) {
		$condicion="Obesidad";
		echo $condicion;
	}
}

if ($edad>=50 && $edad <=54) {
	if ($pgc<=7) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>7) && ($pgc <=12 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>12) && ($pgc <=25)) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>25) && ($pgc <=28)) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>28) && ($pgc<=33)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>33) && ($pgc <=37)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>37) {
		$condicion="Obesidad";
		echo $condicion;
	}
}

if ($edad>=55 && $edad <=59) {
	if ($pgc<=7) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>7) && ($pgc <=12 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>12) && ($pgc <=26)) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>26) && ($pgc <=29)) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>29) && ($pgc<=34)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>34) && ($pgc <=38)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>38) {
		$condicion="Obesidad";
		echo $condicion;
	}
}
if ($edad>=60) {
	if ($pgc<=7) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>7) && ($pgc <=12 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>12) && ($pgc <=27)) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>27) && ($pgc <=30)) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>30) && ($pgc<=35)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>35) && ($pgc <=39)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>39) {
		$condicion="Obesidad";
		echo $condicion;
	}
}
}



if ($_REQUEST['sexo_rdo']=='M') 
{
$aux=1.0324-0.19077*(log10($cintura-$cuello))+0.15456*(log10($altura));
	$pgc=(495/$aux)-450;
	$pgc=round($pgc,PHP_ROUND_HALF_DOWN);
	echo $nombre;
	echo "<br> <br>";
echo "su indice de grasa corporal es de  :  ".$pgc."   El cual esta situado en el rango de  ";
echo "&nbsp";

if ($edad>=19 && $edad <=24) {
	if ($pgc<=2) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>2) && ($pgc <=6 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>6) && ($pgc <=9 )) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>9) && ($pgc <=15 )) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>15) && ($pgc<=19)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>19) && ($pgc <=23)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>23) {
		$condicion="Obesidad";
		echo $condicion;
	}
}
if ($edad>=25 && $edad <=29) {
	if ($pgc<=2) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>2) && ($pgc <=6 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>6) && ($pgc <=10)) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>10) && ($pgc <=16 )) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>16) && ($pgc<=19)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>19) && ($pgc <=24)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>24) {
		$condicion="Obesidad";
		echo $condicion;
	}
}
if ($edad>=30 && $edad <=34) {
	if ($pgc<=2) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>2) && ($pgc <=6 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>6) && ($pgc <=11 )) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>11) && ($pgc <=17 )) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>17) && ($pgc<=19)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>19) && ($pgc <=25)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>25) {
		$condicion="Obesidad";
		echo $condicion;
	}
}

if ($edad>=35 && $edad <=39) {
	if ($pgc<=2) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>2) && ($pgc <=6 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>6) && ($pgc <=12 )) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>12) && ($pgc <=18 )) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>18) && ($pgc<=19)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>19) && ($pgc <=26)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>26) {
		$condicion="Obesidad";
		echo $condicion;
	}
}
if ($edad>=40 && $edad <=44) {
	if ($pgc<=2) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>2) && ($pgc <=6 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>6) && ($pgc <=13 )) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>13) && ($pgc <19 )) {
		$condicion="Bueno";
		echo $condicion;
	}

	if ($pgc==19) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>19) && ($pgc <=27)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>27) {
		$condicion="Obesidad";
		echo $condicion;
	}
}
if ($edad>=45 && $edad <=49) {
	if ($pgc<=2) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>2) && ($pgc <=6 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>6) && ($pgc <=15 )) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>15) && ($pgc <21)) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>=21) && ($pgc<=25)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>25) && ($pgc <=28)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>28) {
		$condicion="Obesidad";
		echo $condicion;
	}
}
if ($edad>=50 && $edad <=54) {
	if ($pgc<=2) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>2) && ($pgc <=6 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>6) && ($pgc <=17 )) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>17) && ($pgc <23)) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>=23) && ($pgc<=26)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>26) && ($pgc <=29)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>29) {
		$condicion="Obesidad";
		echo $condicion;
	}
}

if ($edad>=55 && $edad <=59) {
	if ($pgc<=2) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>2) && ($pgc <=6 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>6) && ($pgc <=19 )) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>19) && ($pgc <24)) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>=24) && ($pgc<=28)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>28) && ($pgc <=30)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>30) {
		$condicion="Obesidad";
		echo $condicion;
	}
}

if ($edad>60) {
	if ($pgc<=2) {
		$condicion = "esencial";
		echo $condicion;
	}
	if(($pgc>2) && ($pgc <=6 )) {
		$condicion="atleta";
		echo $condicion;
	}
	if (($pgc>6) && ($pgc <=20 )) {
		$condicion="Excelente";
		echo $condicion;
	}
	if (($pgc>20) && ($pgc <25)) {
		$condicion="Bueno";
		echo $condicion;
	}

	if (($pgc>=25) && ($pgc<=29)) {
		$condicion= "estandar";
		echo $condicion;
	}
	if (($pgc>29) && ($pgc <=31)) {
		$condicion="Sobrepeso";
		echo $condicion;
	}
	if ($pgc>31) {
		$condicion="Obesidad";
		echo $condicion;
	}
}


}
?>
</fieldset>
</body>
</html>