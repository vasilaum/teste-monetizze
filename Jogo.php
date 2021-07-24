<?php

class Jogo
{
	private $qtdDezenas;
	private $resultado;
	private $totalJogos = 0;
	private $jogos = [];

	function __construct($qtdDezenas, $totalJogos)
	{
		if($qtdDezenas < 6 || $qtdDezenas > 10) {
			exit("Só são aceitos números entre 6 e 10 inclusive");
		}

		$this->qtdDezenas = $qtdDezenas;
		$this->totalJogos = $totalJogos;
	}

	public function gerarJogos ()
	{
		for ($i = 0; $i < $this->totalJogos; $i++) {
			array_push($this->jogos, $this->gerarNumeros());
		}
	}

    public function sortearJogo()
    {
    	$this->resultado = $this->gerarNumeros(6);
    }

    private function gerarNumeros($qtd = null)
    {
    	$numeros = range(1, 60);
	    shuffle($numeros);

	    if(!empty($qtd)) {
	    	$numerosSorteados = array_slice($numeros, 0, $qtd);
	    } else {
	    	$numerosSorteados = array_slice($numeros, 0, $this->qtdDezenas);
	    }

	    arsort($numerosSorteados);

	    return array_reverse(array_values($numerosSorteados));
    }

    public function conferirJogos()
    {
    	$dados = [];

    	foreach ($this->jogos as $jogo) {
    		$numerosAcertados 				= array_intersect($jogo, $this->resultado);
    		$dadosJogo 						= new stdClass;
    		$dadosJogo->numerosAcertados 	= $numerosAcertados;
    		$dadosJogo->qtdAcertos 			= count($numerosAcertados);
    		$dadosJogo->jogoAtual 			= $jogo;
    		$dadosJogo->resultado 			= $this->resultado;

    		array_push($dados, $dadosJogo);
    	}

    	return $dados;
    }

    public function getQtdDezenas()
    {
        return $this->qtdDezenas;
    }

    public function setQtdDezenas($qtdDezenas)
    {
        $this->qtdDezenas = $qtdDezenas;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    public function getTotalJogos()
    {
        return $this->totalJogos;
    }

    public function setTotalJogos($totalJogos)
    {
        $this->totalJogos = $totalJogos;
    }

    public function getJogos()
    {
        return $this->jogos;
    }

    public function setJogos($jogos)
    {
        $this->jogos = $jogos;
    }

}