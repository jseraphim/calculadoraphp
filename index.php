<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.sem-borda {  
  box-shadow: 0 0 0 0;
    border: 0 none;
    outline: 0;
}
</style>
</head>

<body>
require_once 'calculadora.php';

<h2>Calculadora</h2>


<form action="" method="post">
 <input class='sem-borda' type='text' id='resultado' name='resultado'>
  
	<?php
// Verifica se algo foi postado
if ( ! empty( $_POST ) ) {
	calculadora();
}
	?>

  
  <br>
  <input type="text" id="num1" name="num1">
    
  
  <button type="button" value="+" id="0" onclick="setOperacao(this.value)">+</button>
  <button type="button" value="-" id="1" onclick="setOperacao(this.value)">-</button>
  <button type="button" value="*" id="2" onclick="setOperacao(this.value)">*</button>
  <button type="button" value="/" id="3" onclick="setOperacao(this.value)">/</button><br>
  
  <input class="sem-borda" type="text" id="operador" name="operador"><br>
  <input class="sem-borda" type="text" id="operacao" name="operacao"><br>
  <input type="text" id="num2" name="num2"><br><br>
  
  <input type="submit" value="=">
</form>

<script>
        
          function setOperacao(op) {
			document.getElementById('operador').value = op;
			switch(op) {
				case "+": 
			document.getElementById('operacao').value = 0;
			break;
				case "-": 
			document.getElementById('operacao').value = 1;
			break;
				case "*": 
			document.getElementById('operacao').value = 2;
			break;
				case "/": 
			document.getElementById('operacao').value = 3;
			break;
				}
			//alert(op);
            }
            
    </script>

</body>
</html>
