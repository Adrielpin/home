<?php

namespace App\Payments;


/**
 * 	CONSTRUTOR
 *	COBRAR
 * 	CONECTAR
 *	COBRAR
 *	RESPOSTA
 *
 */


class vindi {

	public function __construct () {

	}

	//chama executa curl
	public function conectar($url) {

		$url = 'https://app.vindi.com.br/api/v1/'.$url;
		
		echo $url;

		$ch = curl_init($url);
		// curl_setopt($ch, CURLOPT_URL, $url);
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_USERPWD, 'My1-JWe-L2fjq7h_Dxkdd8hKbdu1BNBf');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

		$return = curl_exec($ch);

		curl_close($ch);

		return $return;

	}

	public function clientes() {

		$url = 'customers';

		$get = self::conectar($url);
		echo $get;
		return;

	}

	public function cobrar () {

		$url = 'customer';
		$name = 'Adriel Pinheiro';
		$code = 123456;
		self::conectar($url);
		
	}

	public function cancelar() {

	}
};