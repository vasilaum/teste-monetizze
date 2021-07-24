<?php

require_once('./Jogo.php');

$jogo = new jogo(10, 2);
$jogo->gerarJogos();
$jogo->sortearJogo();

$resultados = $jogo->conferirJogos();

include('./tabela.php');