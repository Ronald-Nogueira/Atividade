<?php  
$pessoa = array(
	"nome: Maria Clara" => array("CPF" => "087883456-18", "RG" => 2006089107117, "IDADE" => 55, "ALTURA" => 1,75),
);

foreach ($pessoa as $info => $dados) {
	echo $info."<br>";
		foreach ($dados as $key => $value) {
			echo $key." : ".$value."<br>";
			
		}
}