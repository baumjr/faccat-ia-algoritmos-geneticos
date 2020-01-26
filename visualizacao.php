<?php
function exibirResultadosParcial($menorDistancia, $cromossomo, $iEra, $map, $CAPITAL_ORIGEM) {
	echo 'Estamos na era: '.($iEra-1).'<br />';
	construir_rota($cromossomo, $map);
	echo 'Com um total de <b>'.$menorDistancia.'</b> Kilometros.';
	echo '<br /> --------------------------- <br /><br />';	
}

function construir_rota($cromossomo, $map) {
  global $CAPITAL_ORIGEM;
  $i = 1;
  echo 'A melhor rota é: <br />';
  echo $i.' ->'.$map[$CAPITAL_ORIGEM].'<br />';
  $i++;
  foreach ($cromossomo as $capitalKey) {
    echo $i.' ->'.$map[$capitalKey].'<br />';
    $i++;
  }
  echo $i.' ->'.$map[$CAPITAL_ORIGEM].'<br />';
}

function exibirMapa($menorDistancia, $cromossomo, $iEra, $map, $CAPITAL_ORIGEM) {
	echo 'Melhor rota com um total de <b>'.$menorDistancia.'</b> Kilometros:';
	//render map
	require('visualizacao_mapa.php');
	
	
	
}

function exibirTextual($menorDistancia, $cromossomo, $iEra, $map, $CAPITAL_ORIGEM) {
	construir_rota($cromossomo, $map);
	echo '<br />';
	echo 'Com um total de <b>'.$menorDistancia.'</b> Kilometros.';
}


  
  
?>