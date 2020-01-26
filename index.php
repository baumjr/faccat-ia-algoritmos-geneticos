<!DOCTYPE html>
<html>
  <head>
    <title>Algoritmos Genéticos - IA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
  	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Algoritmos Genéticos - IA</a>
          <div class="nav-collapse collapse">
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <div style="height: 420px;" class="hero-unit">
        <h3>Configurações do algoritmo:</h3>
            <form  class="form-horizontal" name="configuracoes" action="ag.php" target="content" method="get">
            	
            	<div id="esquerda">
            		<label for="cap_origem">Capital origem:</label>
				    	<select name="cap_origem" id="cap_origem">
							<?php
							    require('distancias.php');
								foreach($map as $k => $v) {
									echo '<option value="'.$k.'">'.$v.'</option>';	
								}
							?>
						</select>
						<br /><br />
					
					<label for="num_cromossomos">Tamanho População:</label>
				    	<input name="num_cromossomos" id="num_cromossomos" type="number" value="200">
				    	<br /><br />
			    	
			    	<label for="num_eras">Número de Eras:</label>
				    	<input name="num_eras" id="num_eras" type="number" value="100">
				    	<br /><br />
			    	
			    	<label for="fator_crossover_min">Fator de Cruzamento:</label>
				    	<input style="width: 30px" name="fator_crossover_min" id="fator_crossover_min" type="number" value="6"> à
				    	<input style="width: 30px" name="fator_crossover_max" id="fator_crossover_max" type="number" value="16">
				    	<br /><br />
            	</div>
            	
            	<div id="direita" style="position:absolute; width: 150px;  height: 150px; top:120px; left:50% ">
            		<label for="tipo_mutacao">Tipo de Mutação:</label>
				    	<select name="tipo_mutacao" id="tipo_mutacao">
				    		<option value="mut1">Mutação 01</option>
				    		<option value="mut2" selected>Mutação 02</option>
				    		<option value="mut3">Mutação 03</option>
				    	</select>
				    	<br /><br />
			    	
            		<label for="por_era">Exibir resultados por Era:</label>
				    	<input type="radio" name="por_era" id="por_era" value="true"> Sim
				    	<input type="radio" name="por_era" id="por_era" checked value="false"> Não
				    	<br /><br />
			    
			    	<label for="modo_exibicao">Modo de exibição:</label>
				    	<input type="radio" name="modo_exibicao" id="modo_exibicao" checked value="textual"> Texto
				    	<input type="radio" name="modo_exibicao" id="modo_exibicao" value="map"> Mapa
            	</div>

			<div style="position:absolute; width: 100px;  height: 100px; top:470px; left:45%;"><!-- gambi para ficar na posição correta! -->
		    <button type="submit" class="btn btn-primary btn-large">Processar</button></div>
		    </form>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <iframe src="blank.php" name="content" id="content" width="100%" frameborder="0" height="700" scrolling="auto"></iframe>
      </div>

      <hr>
      <footer>
        <p style="text-align: center;">Bruno, Cassiano, Mauricio | Inteligência Artificial 2013/1 | FACCAT</p>
      </footer>

    </div> <!-- /container -->

    

  </body>
</html>