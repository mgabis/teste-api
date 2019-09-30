<?php

namespace App\Http\Controllers;

Class Marvel{
	


	// URL da api

	const = url -> "https://gateway.marvel.com:443/v1/public/";

	/*Para armazenar as chaves da api
	  chave pública
	*/
	private $publickey;


	/*Para armazenar as chaves da api
	  chave privada
	*/
	private $privatekey;


	//Declara as chaves da API

	public function __construct (){
		this -> $publickey = env(MARVEL_PUBLIC_KEY, '');
		this -> $privatekey = env(MARVEL_PRIVATE_KEY,'');

	}


	public function request ($tipo, $busca){

		$busca = $busca =>get($superfav);

		//parametro para montar a busca pela URL
		if(!empty($busca)){
	  	$busca = $busca."&";
		}

		//URL final de busca
		$urlbusca = self::url.$tipo.'?'.$busca.'apikey='.$publickey;

		}

 	$curlOptions = [
            CURLOPT_URL => $urlbusca,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_VERBOSE => false,
            CURLOPT_HEADER => false,
            CURLOPT_FORBID_REUSE => true,
    ];


        // inicia curl
        $curl = curl_init();

        //Coloca em um array
		curl_setopt_array($curl, $curlOptions);

        // coloca resultado do curl em uma variável
        $resultado = curl_exec($curl);

		return json_decode($resultado, true);
    }

}