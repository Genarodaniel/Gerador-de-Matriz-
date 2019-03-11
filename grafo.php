<?php

// não pode ter casas que nao existem, tipo  [1][0];

$qtde_v = isset($_POST["qtde_v"]) ? $_POST["qtde_v"] : null;
$qtde_a = isset($_POST["qtde_a"]) ? $_POST["qtde_a"] : null;
$graph_type = isset($_POST["graph_type"]) ? $_POST["graph_type"] : null;

function geraMatrizGrafo() {

}

function imprime() {

}

function recebe($qtde_v, $qtde_a, $graph_type) {

	$qtde_v = trim($qtde_v);
	$qtde_a = trim($qtde_a);
	$graph_type = trim($graph_type);

	if ($graph_type == 2) {
		$digrafo = array();
		$max_a = $qtde_v * $qtde_v / 2;

		if ($qtde_a <= $max_a) {
			for ($cont2 = 0; $cont2 <= $qtde_v; $cont2++) {

				for ($i = 0; $i <= $qtde_v; $i++) {
					$digrafo[$cont2][$i] = 0;
				}

			}
			return $digrafo;
		} elseif ($qtde_a > $max_a) {
			return "Quantidade de arestas maior que o permitido para digrafo";
		} elseif ($qtde_a == 0) {
			return "Quantidade de arestas não definida";
		}
	} elseif ($graph_type = 1) {
		$grafo = array();
		if ($qtde_a == 0) {
			return "Quantidade de arestas não definida";
		}
		$max_a = $qtde_v * $qtde_v;

		if ($qtde_a <= $max_a) {
			for ($cont2 = 0; $cont2 <= $qtde_v; $cont2++) {

				for ($i = 0; $i <= $qtde_v; $i++) {
					$grafo[$cont2][$i] = 0;
				}

			}
			return $grafo;

		} elseif ($qtde_a > $max_a) {
			return "Quantidade de arestas maior que o permitido para grafo";
		} 

	}

}

var_dump(recebe($qtde_v, $qtde_a, $graph_type));

function geraMatrizDigrafo() {

	/*foreach ($digrafo as $row) {
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

}

// variaveis origem e destino devem ser diferentes de zero e menor
// ou igual $qtde_v
?>



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




