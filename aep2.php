<?php

class Pessoa
{		
		public $nome;
		public $data_nascimento;
		public $peso;
		public $altura;
		public $cpf;
		//
		public function Pessoa ($nome,$data,$cpf,$altura,$peso) {
			$this->nome=$nome;
			$this->data_nascimento=$data;
			$this->cpf=$cpf;
			$this->altura=$altura;
			$this->peso=$peso;		
		}
		//calculo de IMC
		public function calculoIMC () 
		{
        	$imc=$this->peso/($this->altura*$this->altura);
        	if ($imc <=16){
        		echo "O seu Indice de Massa Corporal é ".number_format($imc,2),"\n";
        		echo "Seu IMC indica: Magreza grave\n";
        	}
        	elseif (($imc>16) && ($imc<=17))
        	{
            	echo "O seu Indice de Massa Corporal é ".number_format($imc,2),"\n";
           	 	echo "Seu IMC indica: Magreza moderada\n";
           	}
        	elseif (($imc>17) && ($imc<=18.49))
       		{
            	echo "O seu Indice de Massa Corporal é ".number_format($imc,2),"\n";
            	echo "Seu IMC indica: Magreza leve\n";
        	}
       	 	elseif (($imc>=18.5) && ($imc<=24.99))
        	{
            	echo "O seu Indice de Massa Corporal é ".number_format($imc,2),"\n";
           	 	echo "Seu IMC indica: Peso normal(considerado saudável)\n";
        	}
        	elseif (($imc>=25) && ($imc<=29.99))
        	{
            	echo "O seu Indice de Massa Corporal é ".number_format($imc,2),"\n";
            	echo "Seu IMC indica: Sobrepeso\n";
        	}
        	elseif (($imc>=30) && ($imc<=34.99))
        	{
            	echo "O seu Indice de Massa Corporal é ".number_format($imc,2),"\n";
            	echo "Seu IMC indica: Obesidade grau \n";
        	}
        	elseif (($imc>=35) && ($imc<=39.99))
        	{
            	echo "O seu Indice de Massa Corporal é ".number_format($imc,2),"\n";
            	echo "Seu IMC indica: Obesidade grau 2 (Severa)\n";
       	 	}
        	elseif ($imc>=40)
        	{
            	echo "O seu Indice de Massa Corporal é".number_format($imc,2),"\n";
            	echo "Seu IMC indica: Obesidade grau 3 (Mórbida)\n";
        	}
    	}
    	public function CalculoIdade(){
    		//Data atual
	    		$dia = date('d');
	    		$mes = date('m');
		    	$ano = date('Y');
	    	//Data do aniversário
		    	$nasc = explode('/',$this->data_nascimento);
		    	$dianasc = ($nasc[0]);
		    	$mesnasc = ($nasc[1]);
		    	$anonasc = ($nasc[2]);
	        //Calculando idade
	    		$idade = $ano - $anonasc; 
	    		echo "Você possui $idade anos de idade.";
	    	}
    	public function validarCPF($cpf = null) {

				if(empty($cpf)) {
					return false;
				}
				$cpf = preg_replace("/[^0-9]/", "", $cpf);
				$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
				
				if (strlen($cpf) != 11) {
					return false;
				}
				else if (	$cpf == '00000000000' ||	$cpf == '11111111111' ||
							$cpf == '22222222222' ||	$cpf == '33333333333' ||
							$cpf == '44444444444' ||	$cpf == '55555555555' ||
							$cpf == '66666666666' ||	$cpf == '77777777777' ||
							$cpf == '88888888888' ||	$cpf == '99999999999') {
					return false;
				
				 } else {
					for ($t = 9; $t < 11; $t++) {
						for ($d = 0, $c = 0; $c < $t; $c++) {
							$d += $cpf{$c} * (($t + 1) - $c);
						}
						$d = ((10 * $d) % 11) % 10;
						if ($cpf{$c} != $d) {
							return false;
						}
					}
					return true;
					echo "CPF validado com sucesso";
				}
				return $this->cpf;
	}
}