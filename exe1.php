<?php 

	$nota1 = array(2, 2, 7, 8, 9, 10);
	$nota2 = array(8, 3, 6, 5, 8, 7);
	$media = 0;
	$contreprovado = 0;
	$contexame = 0;
	$contaprovado = 0;

		for($i = 0; $i < 6; $i++){

			$media = ($nota1[$i] + $nota2[$i]) / 2;

			if($media<3){
				echo "Reprovado<br>";
				$contreprovado++;
			}elseif($media >= 3 && $media <= 7){

				echo "Exame<br>";
				$contexame++;
			}else{

				echo "Aprovado<br>";
				$contaprovado++;
			}
		}

			echo "Aprovados: " . $contaprovado . "<br>" . "Em exame: " . $contexame . "<br>" . "Reprovados: " . $contreprovado


 ?>