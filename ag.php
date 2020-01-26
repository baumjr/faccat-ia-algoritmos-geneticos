<?php
//Carrega $distancias e $map
require('distancias.php');
set_time_limit(0);//muda o limite de tempo para processar o script para infinito

//carrega visualizacoes textual ou mapa
require('visualizacao.php');

//Constantes de configuração (pre-definidas ou vindas por get)
$NUM_CROMOSSOMOS = 200;
$NUM_MUTADOS = 20;
$NUM_GENES_CROMOSSOMO = 25;
$CAPITAL_ORIGEM = isset($_GET['cap_origem']) ? $_GET['cap_origem'] : 20;
$NUM_ERAS = isset($_GET['num_eras']) ? $_GET['num_eras'] : 150;
$FATOR_CROSSOVER = isset($_GET['fator_crossover_min']) ? range($_GET['fator_crossover_min'],$_GET['fator_crossover_max']) : range(8,16);
$TIPO_MUTACAO = isset($_GET['tipo_mutacao']) ? $_GET['tipo_mutacao'] : 'mut2';
$EXIBIR_POR_ERA = isset($_GET['por_era']) ? $_GET['por_era'] : true;
$TEMPLATE_EXIBICAO = isset($_GET['modo_exibicao']) ? $_GET['modo_exibicao'] : 'textual';

//Inicializações da execução do programa
$populacao = gerarPopulacaoAleatoria();
$iEra = 1;

// LOOP principal das Eras. 
/* A cada Era ele avalia a população, calcula o fitness, seleciona os melhores para pais, 
*  realiza o cruzamento(crossover) dos pais, gera os filhos, aplica a mutação em alguns filhos 
*  e retorna a população resultante disso para próxima Era */
while ($iEra <= $NUM_ERAS) {
  $listaDeFitness = avaliarPopulacao($populacao);
  $listaDePais = selecionarPais($listaDeFitness, $populacao);
  $listaDeFilhos = crossover($listaDePais);
  $listaDeFilhosMutados = mutacao($listaDeFilhos);
  $populacao = array();
  $tmpPopulacao = array_merge($listaDePais, $listaDeFilhosMutados);
  foreach ($tmpPopulacao as $key => $val) {
    $populacao[$key+1] = $val;
  }
  $iEra++;
  $listaDeFitness = avaliarPopulacao($populacao); //recalcula os fitness já que mudou a população
  $menorDistancia = current($listaDeFitness); //obtem o menor fitness da listagem
  $keyMenorDistancia = array_search($menorDistancia, $listaDeFitness); //pega o índice do cromossomo com este menor fitness
  if ($EXIBIR_POR_ERA == "true") exibirResultadosParcial($menorDistancia, $populacao[$keyMenorDistancia], $iEra, $map, $CAPITAL_ORIGEM); //se habilitado exibe o resultado em cada Era
}

/*  VISUALIZAÇÕES */
switch ($TEMPLATE_EXIBICAO) {
	case 'map':
	exibirMapa($menorDistancia, $populacao[$keyMenorDistancia], $iEra, $map, $CAPITAL_ORIGEM);
	break;
	case 'textual':
	exibirTextual($menorDistancia, $populacao[$keyMenorDistancia], $iEra, $map, $CAPITAL_ORIGEM);
	break;
}

/*  DECLARAÇÃO DE FUNÇÕES DO ALGORITMO */

function avaliarPopulacao($populacao) {
	global $NUM_CROMOSSOMOS;
  	$idCrom = 1;
  	while ($idCrom <= $NUM_CROMOSSOMOS) {
    	$fitness = calcularFitness($populacao[$idCrom]);
    	$listaDeFitness[$idCrom] = $fitness;	  
    	$idCrom++;
  	}
  	asort($listaDeFitness); //ordena o array pelos fitness 
	return $listaDeFitness; 
}

function gerarPopulacaoAleatoria() {
	global $NUM_CROMOSSOMOS;
	$populacao = array();
	$idCrom=1;
	while ($idCrom <= $NUM_CROMOSSOMOS) { //cria uma população aleatoria começando com índice 1
		$cromossomo = gerarCromossomoAleatorio();
	  	$populacao[$idCrom] = $cromossomo;
		$idCrom++;
	}
	return $populacao;
}

function calcularFitness($cromossomo) {
  global $NUM_GENES_CROMOSSOMO, $CAPITAL_ORIGEM, $map, $distancias;
  $fitness = 0;
  for($k=1; $k < $NUM_GENES_CROMOSSOMO; $k++) { //percorre cada gene do cromossomo
    $codigoCapital1 = $map[$cromossomo[$k-1]]; //pega a primeira capital [foi usado $k-1 pois no array $map, os índices começam em 0, e no cromossomo começa em 1]
    $codigoCapital2 = $map[$cromossomo[$k]]; //pega a segunda capital
    if (isset($distancias[$codigoCapital1][$codigoCapital2])) { //verifica se existe $distancia[CIDADE1][CIDADE2]
      $distancia = $distancias[$codigoCapital1][$codigoCapital2];
    }else{ 														//senão ele inverte e usa $distancia[CIDADE2][CIDADE1]
      $distancia = $distancias[$codigoCapital2][$codigoCapital1];
    }
    $fitness = $fitness + $distancia; //somador que vai somando as distâncias
  }
  $primeiraCapital = $map[$cromossomo[0]]; //pega a distancia da capital de origem pra primeira da lista
  $origem = $map[$CAPITAL_ORIGEM];
  if (isset($distancias[$origem][$primeiraCapital])) {
    $distanciaEntreOrigemPrimeira = $distancias[$origem][$primeiraCapital];
  }else{
    $distanciaEntreOrigemPrimeira = $distancias[$primeiraCapital][$origem];
  }
  $ultimaCapital = $map[$cromossomo[$NUM_GENES_CROMOSSOMO-1]]; //pega a distancia da capital destino(mesma de origem), e a ultima da lista
  if (isset($distancias[$origem][$ultimaCapital])) {
    $distanciaEntreOrigemUltima = $distancias[$origem][$ultimaCapital];
  }else{
    $distanciaEntreOrigemUltima = $distancias[$ultimaCapital][$origem];
  } 
  return ($fitness + $distanciaEntreOrigemPrimeira + $distanciaEntreOrigemUltima);
}

function gerarCromossomoAleatorio() {
  global $NUM_GENES_CROMOSSOMO, $CAPITAL_ORIGEM;
  for($k=0; $k<=$NUM_GENES_CROMOSSOMO; $k++) { //gera um array ordenado
    if ($k != $CAPITAL_ORIGEM) {
      $cromossomo[] = $k;
    }
  }
  shuffle($cromossomo); //embaralha esse array para virar o "aleatorio
  return $cromossomo;
}

function selecionarPais($listaDeFitness, $populacao) {
  global $NUM_CROMOSSOMOS;
  $delimitador = $NUM_CROMOSSOMOS/2;
  $keysFitness = array_keys($listaDeFitness); //pega os indices da lista de fitnes
  //
  $maisAptos = array_chunk($keysFitness, $delimitador); //corta o array, ficando só com os 100 melhores
  $pais = array();
  foreach($maisAptos[0] as $keyDoCromossomo) {
    $pais[] = $populacao[$keyDoCromossomo];
  }
  return $pais; //retorna os pais, ou 100 melhores fitness
}

function crossover($pais) {
  global $NUM_CROMOSSOMOS, $NUM_GENES_CROMOSSOMO, $FATOR_CROSSOVER;
  $filhos = array();
  for($i=0; $i < ($NUM_CROMOSSOMOS/2); $i = $i +2) {
    $fatorCross = $FATOR_CROSSOVER[array_rand($FATOR_CROSSOVER)];//obtem um fator de cross
    $pai1 = array_chunk($pais[$i], $fatorCross); //corta pai 1 no fator de corte
    $pai2 = array_chunk($pais[$i+1], $fatorCross); //corta pai 2 no fator de corte
    //filhos gerados por cross over
    $filho1 = $pai1[0];
    $filho2 = $pai2[0];
    //conpleta com genes restantes do segundo pai
    foreach($pais[$i+1] as $gene2){
      if (!in_array($gene2, $filho1)) {
        $filho1[] = $gene2;
      }
    }
    foreach($pais[$i] as $gene1){
      if (!in_array($gene1, $filho2)) {
        $filho2[] = $gene1;
      }
    }
    //
    $filhos[] = $filho1;
    $filhos[] = $filho2;
  }
  return $filhos; //retorna a lista dos 100 filhos gerados por cross over
}

function mutacao($listaDeFilhos) { //função principal que faz a mutação
  global $NUM_MUTADOS, $TIPO_MUTACAO;
  //cria um controle para sortear $NUM_MUTADOS cromossomos que irão sofrer mutação sem repetir algum que ja tenha sido mutado
  $historicoKeysMutadas = array();
  for ($i=1; $i <= $NUM_MUTADOS; $i++) {
    $keyMutante = array_rand($listaDeFilhos);
    while (in_array($keyMutante, $historicoKeysMutadas)) {
      $keyMutante = array_rand($listaDeFilhos);
    }
    $historicoKeysMutadas[] = $keyMutante;
    $cromossomoMutado = $listaDeFilhos[$keyMutante];
	
    //aqui faz a mutação com o cromossomo eleito, usando o tipo de mutação definido na configuração
    switch ($TIPO_MUTACAO) {
	case 'mut1':
	  $cromossomoMutado = mutacao1($cromossomoMutado);
        break;
        case 'mut2':
	  $cromossomoMutado = mutacao2($cromossomoMutado);
        break;
	case 'mut3':
	  $cromossomoMutado = mutacao3($cromossomoMutado);
        break;
    }
	$listaDeFilhos[$keyMutante] = $cromossomoMutado;
  }
  return $listaDeFilhos; 
}

function mutacao1($cromossomo) { //mutação 1, troca dois genes um do lado do otro de lugar
  global $NUM_GENES_CROMOSSOMO;
  $chaveGeneAleatorio = array_rand($cromossomo); //pega um gene aleatorio
  $valorTemp = $cromossomo[$chaveGeneAleatorio];
  if ($chaveGeneAleatorio == ($NUM_GENES_CROMOSSOMO-1)) { //se for final da fila pega o primeiro
    $cromossomo[$chaveGeneAleatorio] = $cromossomo[0]; //atribui o valor do proximo no primeiro
    $cromossomo[0] = $valorTemp; //atribui o valor do primeiro no proximo
  } else {												//senao pega o próximo
    $cromossomo[$chaveGeneAleatorio] = $cromossomo[$chaveGeneAleatorio + 1]; //atribui o valor do proximo no primeiro
    $cromossomo[$chaveGeneAleatorio + 1] = $valorTemp; //atribui o valor do primeiro no proximo
  }
  return $cromossomo; //retorna o cromossomo mutado
}

function mutacao2($cromossomo) {  //mutação 2, troca dois genes aleatorios de lugar entre si
  $geneAleatorio1['key'] = array_rand($cromossomo);
  $geneAleatorio2['key'] = array_rand($cromossomo);
  $geneAleatorio1['value'] = $cromossomo[$geneAleatorio2['key']];
  $geneAleatorio2['value'] = $cromossomo[$geneAleatorio1['key']];
  $cromossomo[$geneAleatorio1['key']] = $geneAleatorio1['value'];
  $cromossomo[$geneAleatorio2['key']] = $geneAleatorio2['value'];
  return $cromossomo; 
}

function mutacao3($cromossomo){ //mutacao 3, pega uma fatia do cromossomo, embaralha ela, e poem devolta
  global $NUM_GENES_CROMOSSOMO;
  $geneAleatorioInicial = array_rand($cromossomo);
  $tamanhoDoCorte = rand(3,$NUM_GENES_CROMOSSOMO);
  $fatiaDoGene = array_slice($cromossomo, $geneAleatorioInicial, $tamanhoDoCorte);
  shuffle($fatiaDoGene);
  foreach ($fatiaDoGene as $gene) {
    $cromossomo[$geneAleatorioInicial] = $gene;
    $geneAleatorioInicial++;
  }
  return $cromossomo;
}
?>