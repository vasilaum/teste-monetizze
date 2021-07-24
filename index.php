<?php

require_once('./Jogo.php');

$jogo = new Jogo(8, 3);
$jogo->gerarJogos();
$jogo->sortearJogo();

$resultados = $jogo->conferirJogos();

include('./tabela.php');