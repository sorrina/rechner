<?php
function rechnen($zahl1, $operator, $zahl2){
	if($operator == "+"){
		$erg = $zahl1 + $zahl2;
		return ($erg);
	}
	if($operator == "-"){
		$erg = ($zahl1-$zahl2);
		return ($erg);
	}
	if($operator == "*"){
		$erg = $zahl1 * $zahl2;
		return ($erg);
	}
	if($operator == "/"){
		$erg = $zahl1 / $zahl2;
		return ($erg);
	}
	if($operator == "√"){
		$erg = sqrt($zahl1);
		//return ($erg);
		echo '√ '.$zahl1.' = '.$erg;
		exit;
	}
}

if(isset($_POST["button"])){
		$zahl1 = $_POST["zahl1"];
		$zahl2 = $_POST["zahl2"];
		$operator = $_POST["operator"];

	$ergebnis = rechnen($zahl1, $operator, $zahl2);
	echo $zahl1." ".$operator." ".$zahl2." = ".$ergebnis;

}//isset button?>
