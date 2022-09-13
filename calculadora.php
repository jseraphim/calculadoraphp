<?php

class Calculadora {
	

	public function adicao($num1, $num2):float {
		return $num1 + $num2;
	}
	
	public function subtracao($num1, $num2):float {
		return $num1 - $num2;
	}
	
	public function multiplicacao($num1, $num2):float {
		return $num1 * $num2;
	}
	
	public function divisao($num1, $num2):float {
		return $num1 / $num2;
	}
	
	
}
	
$num1 = 1.0;
$num2 = 2.0;

$operacao = 3;

$calculadora = new Calculadora();

switch ($operacao) {
    case 0:
        echo $calculadora->adicao($num1,$num2)."\n";
        break;
    case 1:
        echo $calculadora->subtracao($num1,$num2)."\n";
        break;
    case 2:
        echo $calculadora->multiplicacao($num1,$num2)."\n";
        break;
    case 3:
        echo $calculadora->divisao($num1,$num2)."\n";
        break;
}


?>
