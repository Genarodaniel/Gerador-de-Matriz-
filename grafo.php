<?php

// não pode ter casas que nao existem, tipo  [1][0];
$grafo = array();

$qtde_v = 3;
$arestas = 9;
$max_a = $qtde_v * $arestas;

$grafo[0][1] = 0;
$grafo[0][2] = 0;
$grafo[0][3] = 0;
$grafo[1][1] = 1;
$grafo[1][2] = 1;
$grafo[1][3] = 1;
$grafo[2][1] = 1;
$grafo[2][3] = 1;
$grafo[2][2] = 1;
$grafo[3][1] = 1;

foreach ($grafo as $row) {
	// entra no vetor grafo trazendo as posições para row

	foreach ($row as $key => $value) {
//entra na row trazendo as posicoes para key e o valor para value

		for ($i = 0; $i <= $qtde_v; $i++) {
// vai rodar esse vetor até no maximo a qtde de vertices

			if (!isset($grafo[$key][$i])) {
//verifica se foi setado um valor para todas posicoes possiveis

				$grafo[$key][$i] = 0;
			}
		}
	}

}

// variaveis origem e destino devem ser diferentes de zero e menor
// ou igual $qtde_v

?><table><tbody><?php

$cont = 0;

foreach ($grafo as $row) {
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

?>

</table>
