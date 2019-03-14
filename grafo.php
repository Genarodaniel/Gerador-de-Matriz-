<?php

// não pode ter casas que nao existem, tipo  [1][0];

$qtde_v = isset($_POST["qtde_v"]) ? $_POST["qtde_v"] : null;
$qtde_a = isset($_POST["qtde_a"]) ? $_POST["qtde_a"] : null;
$graph_type = isset($_POST["graph_type"]) ? $_POST["graph_type"] : null;

chama($qtde_v, $qtde_a, $graph_type);

function geraMatrizGrafo($matriz, $qtde_a, $qtde_v) {

	for ($i = 0; $i < $qtde_a; $i++) {
		$origin = isset($_POST["origin" . "$i"]) ? $_POST["origin" . "$i"] : null;
		$destiny = isset($_POST["destiny" . "$i"]) ? $_POST["destiny" . "$i"] : null;

		if (($origin > 0 & $origin <= $qtde_v) & ($destiny > 0 & $destiny <= $qtde_v)) {
			$matriz[$origin][$destiny] = 1;
			$matriz[$destiny][$origin] = 1;

		} else {
			echo "<b>dados inconsistentes Linha 24 Loop num $i</b></br></br>";

		}

	}
	return $matriz;

}

function geraMatrizDigrafo($matriz, $qtde_a, $qtde_v) {

	for ($i = 0; $i < $qtde_a; $i++) {
		$origin = isset($_POST["origin" . "$i"]) ? $_POST["origin" . "$i"] : null;
		$destiny = isset($_POST["destiny" . "$i"]) ? $_POST["destiny" . "$i"] : null;

		if (($origin > 0 & $origin <= $qtde_v) & ($destiny > 0 & $destiny <= $qtde_v)) {
			$matriz[$origin][$destiny] = 1;
		} else {
			echo "<b>dados inconsistentes Linha 42 Loop num $i</b></br></br>";

		}

	}
	return $matriz;

}

function imprime($matriz, $qtde_v) {

	if ($matriz == 0) {
		return 0;
	}

	echo "<table><tbody>";

	$cont = 0;
	foreach ($matriz as $row) {
		echo "<th>$cont</th>";

		if ($cont == 0) {
			for ($i = 1; $i <= $qtde_v; $i++) {
				echo "<th>" . "$i" . "</th>";
			}
		}

		if ($cont > 0) {
			foreach ($row as $i => $valor) {
				if ($i > 0 && $i <= $qtde_v) {
					echo "<td>" . "$valor" . "</td>";

				}
			}
		}

		echo "</tr>";

		$cont++;
	}
	echo "</table>";

}

function chama($qtde_v, $qtde_a, $graph_type) {
	if ($graph_type == 1) {
		$matriz_zerada = recebe($qtde_v, $qtde_a, $graph_type);
		$matriz = geraMatrizGrafo($matriz_zerada, $qtde_a, $qtde_v);
		imprime($matriz, $qtde_v);

	} elseif ($graph_type == 2) {
		$matriz_zerada = recebe($qtde_v, $qtde_a, $graph_type);
		$matriz = geraMatrizDigrafo($matriz_zerada, $qtde_a, $qtde_v);
		imprime($matriz, $qtde_v);
	}

}
function recebe($qtde_v, $qtde_a, $graph_type) {

	$qtde_v = trim($qtde_v);
	$qtde_a = trim($qtde_a);
	$graph_type = trim($graph_type);
	$matriz = array();

	if (($qtde_v == '' || $qtde_v == '') || ($qtde_v == 0 || $qtde_v == 0)) {
		echo "valor qtde_v ou qtde_a nao definidos";
		return 0;
	}
	$max_a = $qtde_v * $qtde_v;
	if ($graph_type = 2) {
		$max_a = ((($qtde_v * $qtde_v) - $qtde_v) / 2) + $qtde_v;

		if ($qtde_a == 0) {
			echo "<b>Quantidade de arestas não definida Linha 107 </b></br></br>";
		}

		if ($qtde_a <= $max_a) {
			for ($cont2 = 0; $cont2 <= $qtde_v; $cont2++) {

				for ($i = 0; $i <= $qtde_v; $i++) {
					$matriz[$cont2][$i] = 0;
				}

			}
			return $matriz;
		} elseif ($qtde_a > $max_a) {
			echo "<b>Quantidade de arestas maior que o permitido Linha 120</b></br></br>";
		}
	} elseif ($graph_type = 1) {
		$grafo = array();
		$max_a = $qtde_v * $qtde_v;
		if ($qtde_a == 0) {
			echo "<b>Quantidade de arestas não definida Linha 128 </b></br></br>";
		}

		if ($qtde_a <= $max_a) {
			for ($cont2 = 0; $cont2 <= $qtde_v; $cont2++) {

				for ($i = 0; $i <= $qtde_v; $i++) {
					$grafo[$cont2][$i] = 0;
				}

			}
			return $grafo;

		} elseif ($qtde_a > $max_a) {
			echo "<b>Quantidade de arestas maior que o permitido para grafo Linha 143 </b></br></br>";
		}

	}

}

?>

 <!--/*foreach ($digrafo as $row) {
		// entra no vetor digrafo trazendo as posições para row

		foreach ($row as $key => $value) {
			//entra na row trazendo as posicoes para key e o valor para value

			for ($i = 0; $i <= $qtde_v; $i++) {
				// vai rodar esse vetor até no maximo a qtde de vertices

				if (!isset($digrafo[$key][$i])) {
					//verifica se foi setado um valor para todas posicoes possiveis
					$digrafo[$key][$i] = 0;

				}
			}
		}
	}*/
-->


	<!-- <table><tbody><?php/*


$cont = 0;
foreach ($digrafo as $row) {
	echo "<th>$cont</th>";

	if ($cont == 0) {
		for ($i = 1; $i <= $qtde_v; $i++) {
			echo "<th>" . "$i" . "</th>";
		}
	}

	if ($cont > 0) {
		foreach ($row as $i => $valor) {
			if ($i > 0 && $i <= $qtde_v) {
				echo "<td>" . "$valor" . "</td>";

			}
		}
	}

	echo "</tr>";

	$cont++;
}




		/*elseif ($graph_type = 1) {
		$grafo = array();
		$max_a = $qtde_v * $qtde_v;
		if ($qtde_a == 0) {
			echo "<b>Quantidade de arestas não definida Linha 84 </b></br></br>";
		}

		if ($qtde_a <= $max_a) {
			for ($cont2 = 0; $cont2 <= $qtde_v; $cont2++) {

				for ($i = 0; $i <= $qtde_v; $i++) {
					$grafo[$cont2][$i] = 0;
				}

			}
			return $grafo;

		} elseif ($qtde_a > $max_a) {
			echo "<b>Quantidade de arestas maior que o permitido para grafo Linha 98 </b></br></br>";
		}

	}

}*/













 */ ?> -->
</table>




