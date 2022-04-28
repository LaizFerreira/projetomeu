<?php
$preco= $_GET["a"]; 
$desconto= $preco-($preco*30/100);
echo "o preco do produto e $preco" . "</br>";
echo "e o novo preco com 30% de desconto e ".$desconto;
?>