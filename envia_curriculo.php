<?php
	// Snippet - Integração de conversões LAHAR
	function integra_api_lahar($token_api_lahar, $endpoint, $nome_formulario, $campos) {

	  $endpoint_full_url = 'http://app.lahar.com.br/api/'.$endpoint;
	  if ($endpoint == 'conversions') {
	    $method = 'POST';
	  }
	  if ($endpoint == 'leads') {
	    $method = 'PUT';
	  }

	  try {
	    if (!array_key_exists('token_api_lahar',$campos)) {
	      $campos['token_api_lahar'] = $token_api_lahar;
	    }
	    else if ($campos['token_api_lahar'] == NULL) {
	      $campos['token_api_lahar'] = $token_api_lahar;
	    }
	    if (!array_key_exists('nome_formulario',$campos)) {
	      $campos['nome_formulario'] = $nome_formulario;
	    }
	    else if ($campos['nome_formulario'] == NULL) {
	      $campos['nome_formulario'] = $nome_formulario;
	    }
	    if (!array_key_exists('url_origem',$campos)) {
	      $campos['url_origem'] = 'integracao-javascript';
	    }
	    else if ($campos['url_origem'] == NULL) {
	      $campos['url_origem'] = 'integracao-javascript';
	    }
	    $post_fields = http_build_query($campos);
	    if ($method == 'POST') {
	      $ch = curl_init($endpoint_full_url);
	      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	      curl_setopt($ch, CURLOPT_POST, TRUE);
	      curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
	      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	      $curl_response = curl_exec($ch);
	      curl_close($ch);

	      $json = json_decode($curl_response);

	      $retorno = $json;
	    }
	    else if ($method == 'PUT') {

	      $ch = curl_init($endpoint_full_url);
	      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	      curl_setopt($ch, CURLOPT_HEADER, false);
	      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($campos));
	      $curl_response = curl_exec($ch);
	      curl_close($ch);

	      $json = json_decode($curl_response);

	      $retorno = $json;

	    }
	  }
	  catch (Exception $e) {
	    $retorno = array(
	        'status' => 'erro',
	        'data' => array(
	            'error' => array(
	                'code' => 404,
	                'message' => 'Erro imprevisto.'
	            )
	        )
	    );
	  }

	  return $retorno;

	}

	$status = 'erro';

	// Se as informações constarem em outro array que não o próprio $_POST, substitua na linha abaixo
    $valores = $_REQUEST;

 //    echo "<PRE>";
	// print_r($valores);
	// print_r($_FILES);
	// echo "</PRE>";

    if (count($valores) > 0) {

    	$cidade_uf = explode("/", $valores['cidade_uf']);

    	if($valores['vaga']){
    		$tags = 'curriculo-site, '.$valores['vaga'];
    		$anotacoes = "Como chegou: ".$valores['como_chegou']."<br>"."Por que LAHAR: ".$valores['textarea']."<br>"."Vaga: ".$valores['vaga']."<br>"."Pretensão: ".$valores['pretensao'];
    	}else{
    		$tags = 'curriculo-site';
    		$anotacoes = "Como chegou: ".$valores['como_chegou']."<br>"."Por que LAHAR: ".$valores['textarea']."<br>"."Pretensão: ".$valores['pretensao'];
    	}

		// Caso os campos de seu array não estejam nomeados de acordo com a documentação da API, você deve utilizar o array de tradução abaixo
		$traducao = array(
		'email_contato' => $valores['email'], // Texto, 100 caracteres, email, OBRIGATÓRIO
		'nome_contato' 	=> $valores['nome'], // Texto, 100 caracteres
		'tel_celular' 	=> $valores['telefone'], // Numérico (pode receber número formatado, ex. (14) 3222-1415)
		'cidade'	  	=> $cidade_uf[0],
		'estado'	  	=> $cidade_uf[1],
		'linkedin'		=> $valores['perfil_linkedin'],
		'anotacoes' 	=> $anotacoes, // Texto, sem limite
		'tags' 			=> $tags, // Texto, 100 caracteres, termos separados por vírgula
		'url_origem' 	=> $_SERVER['HTTP_REFERER'], // Texto, 100 caracteres
		);

		$valores = $traducao;

		// Caso precise utilizar o retorno da API, capture o retorno da função abaixo
		// Formato de retorno:
		/*
		$retorno = array(
		  'status' => 'sucesso' OU 'erro',
		  'data' => array(
		    'error' => array( // exibido apenas caso status == erro
		      'code' => 404, // Código numérico
		      'message' => 'Exemplo' // Descrição textual do erro
		    ),
		    'return' => 'Exemplo' // Mensagem de retorno caso status == sucesso
		  )
		);
		*/
		// TIPO_DE_INTEGRACAO pode ser 'conversions' ou 'leads'
		integra_api_lahar('lahardigNRErEuPHFdrXYKG6lV2SeLrRqcxxnsq7YuO2W7YZ0OH6N2CJWbaHJ2NK', 'conversions', 'curriculo-site', $valores);

		if($_FILES['curriculo']['name']){

			$uploaddir = 'curriculos/';

			// Extensão
			$extensao = substr($_FILES['curriculo']['name'], strrpos($_FILES['curriculo']['name'], '.') + 1);

			// Renomeia
			$nome_arquivo = date('Y_m_d') . '_' . $valores['email_contato'] . '.' . $extensao;

			$uploadfile = $uploaddir . basename($nome_arquivo);

			if (move_uploaded_file($_FILES['curriculo']['tmp_name'], $uploadfile)) {
			    //echo "Arquivo válido e enviado com sucesso.\n";
			}

		}

		$status = "ok";

    }

    if($status = "ok"){
    	header('Location: http://www.lahar.com.br/trabalhe-na-lahar?enviado=ok');
    }else{
    	header('Location: http://www.lahar.com.br/trabalhe-na-lahar?enviado=erro');
    }
?>


