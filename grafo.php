<?php

// não pode ter casas que nao existem, tipo  [1][0];

$qtde_v = isset($_POST["qtde_v"]) ? $_POST["qtde_v"] : null;
$qtde_a = isset($_POST["qtde_a"]) ? $_POST["qtde_a"] : null;
$graph_type = isset($_POST["graph_type"]) ? $_POST["graph_type"] : null;

digrafo($qtde_v, $qtde_a, $graph_type);

function geraMatrizGrafo() {

}

function imprime($array, $qtde_v) {

	echo "<table><tbody>";

	$cont = 0;
	foreach ($array as $row) {
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

function digrafo($qtde_v, $qtde_a, $graph_type) {
	if ($graph_type == 1) {

	} elseif ($graph_type == 2) {
		$grafo = recebe($qtde_v, $qtde_a, $graph_type);
		$grafo_gerado = geraMatrizDigrafo($grafo, $qtde_a, $qtde_v);
		imprime($grafo_gerado, $qtde_v);
	}

}
function recebe($qtde_v, $qtde_a, $graph_type) {

	$qtde_v = trim($qtde_v);
	$qtde_a = trim($qtde_a);
	$graph_type = trim($graph_type);

	if ($graph_type == 2) {
		$digrafo = array();
		$max_a = $qtde_v * $qtde_v;

		if ($qtde_a <= $max_a) {
			for ($cont2 = 0; $cont2 <= $qtde_v; $cont2++) {

				for ($i = 0; $i <= $qtde_v; $i++) {
					$digrafo[$cont2][$i] = 0;
				}

			}
			return $digrafo;
		} elseif ($qtde_a > $max_a) {
			echo "<b>Quantidade de arestas maior que o permitido para digrafo Linha 77</b></br></br>";
		} elseif ($qtde_a == 0) {
			echo "<b>Quantidade de arestas não definida Linha 79</b></br>";
		}
	} elseif ($graph_type = 1) {
		$grafo = array();
		$max_a = $qtde_v * $qtde_v / 2;
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

}

function geraMatrizDigrafo($array, $qtde_a, $qtde_v) {

	for ($i = 0; $i < $qtde_a; $i++) {
		$origin = isset($_POST["origin" . "$i"]) ? $_POST["origin" . "$i"] : null;
		$destiny = isset($_POST["destiny" . "$i"]) ? $_POST["origin" . "$i"] : null;

		if ($origin > 0 & $origin <= $qtde_v) {
			$array[$origin][$destiny] = 1;
		} else {
			echo "<b>dados inconsistentes(origem)Linha 114 Loop num $i</b></br></br>";

		}
		if ($destiny > 0 & $destiny <= $qtde_v) {
			$array[$origin][$destiny] = 1;
		} else {
			echo "<b>dados inconsistentes(Destino) Linha 120 Loop num $i</b></br></br>";
		}

	}
	return $array;

}

// variaveis origem e destino devem ser diferentes de zero e menor
// ou igual $qtde_v
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
 */ ?> -->
</table>




