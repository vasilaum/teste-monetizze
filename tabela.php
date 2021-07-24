<!DOCTYPE html>
<html>
<head>
	<style>
		table {
	  		font-family: arial, sans-serif;
	  		border-collapse: collapse;
	  		width: 100%;
		}

		td, th {
		  	border: 1px solid #dddddd;
		  	text-align: left;
		  	padding: 8px;
		}

		tr:nth-child(even) {
		  	background-color: #dddddd;
		}
	</style>
</head>
<body>

<table>
  	<tr>
    	<th>Jogo Feito</th>
    	<th>Jogo Sorteado</th>
    	<th>Acertos</th>
    	<th>Números acertados</th>
  	</tr>

  	<?php foreach($resultados as $resultado) { ?>
	  	<tr>
	    	<td><?php echo implode(',', $resultado->jogoAtual); ?></td>
	    	<td><?php echo implode(',', $resultado->resultado); ?></td>
	    	<td><?php echo $resultado->qtdAcertos; ?></td>
	    	<td><?php echo implode(',', $resultado->numerosAcertados); ?></td>
	  	</tr>
  	<?php } ?>
</table>

</body>
</html>