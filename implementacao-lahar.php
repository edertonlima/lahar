<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Wed Jul 22 2015 23:35:14 GMT+0000 (UTC) -->
<html data-wf-site="556474ad0112f01b4ff314c5" data-wf-page="5592ae52654c69dc323aa0b6">
<head>
  <meta charset="utf-8">
  <title>Implementação | LAHAR</title>
  <meta name="description" content="Aprenda como seu negócio pode ter resultados com nosso software.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">

  <meta property='og:title' content='Implementação | LAHAR' />
  <meta property='og:description' content='Aprenda como seu negócio pode ter resultados com nosso software.' />
  <meta property='og:url' content='http://www.lahar.com.br/implementacao-lahar' />
  <meta property='og:image' content='http://www.lahar.com.br/images/consult.jpg'/>
  <meta property="og:image:type" content="image/jpeg">

  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/lahar.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","PT Sans:400,400italic,700,700italic"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
  <?php include('includes/header.php'); ?>

  <style>
  	.muda-plano {
  		padding-bottom: 6px;
  	}
  	.muda-plano:not(.active):hover {
  		color: #0294ca;
  		border-color: #0294ca;
  	}
  	.etapa-assinatura {
  		margin: 40px 0 40px;
  		overflow: hidden;
  	}
  	.sessao_azul .container_about {
		background-color: transparent;
  	}
  	.vantagens-implementacao {
  		padding-bottom: 40px;
  	}
  	.div_funcionalidades h2 {
		padding-left: 50px;
		margin: 5px 0 0 !important;
  	}

	.etapa {
		width: 20%;
	}
  	.ico-etapa {
  		width: 90px;
  		height: 90px;
  		font-size: 30px;
  		line-height: 88px;
  		color: #e1dada;
  	}
  	.tit-etapa {
  		color: #e1dada;
  	}
  	.tit-etapa::before, .tit-etapa::after {
  		top: -45px;
  	}
  	.etapa em {
		position: absolute;
		color: #e1dada;
		background-color: #fff;
		top: 38px;
		right: -15px;
		font-style: normal;
		font-weight: bold;
		width: 30px;
		z-index: 999;
		line-height: 15px;
		font-size: 15px;
		display: block;
		text-align: center;
  	}
  	.etapa.active em, .etapa.etapa-ok em {
  		color: #093c4f;
  	}

  	.etapa-assinatura.padrao em {
  		display: none;
  	}

  	.etapa .ico-etapa img {
  		opacity: .2;
  	}
  	.etapa.etapa-ok .ico-etapa img, .etapa.active .ico-etapa img  {
  		opacity: 1;
  	}
  	.etapa-ok .ico-etapa {
  		border-color: #093c4f;
  		color: #093c4f;
  	}

  	.etapa-ok {
  		cursor: pointer;
  	}
  	.etapa-ok:hover .ico-etapa {
		border-color: #0294ca;
		color: #0294ca;
  	}
  	.etapa-ok:hover .tit-etapa::before, .etapa-ok:hover .tit-etapa::after {
		background-color: #0294ca;
  	}
  	.etapa-ok:hover .tit-etapa {
		color: #0294ca;
  	}

	.etapa-ok .tit-etapa::before, .etapa-ok .tit-etapa::after {
		background-color: #093c4f;
	}
	.active .tit-etapa::before, .active .tit-etapa::after {
		background-color: #0294ca;
	}
	.etapa-ok .tit-etapa {
		color: #093c4f;
	}
	.active .tit-etapa {
		color: #0294ca;
	}
	.active .ico-etapa {
		background-color: #ffffff;
		border-color: #0294ca;
	}

	.item-detalhe {
		background-color: #ececec;
		padding-bottom: 10px;
	}
	.item-detalhe .container_about {
		background-color: transparent;
  	}
	.item-detalhe h2 {
		color: #4f4f4f;
		font-weight: bold!important;
		text-align: left;
		font-size: 18px!important;
	}
	.item-detalhe .descricao {
		color: #4f4f4f;
		margin-top: 10px;
	}
	.item-detalhe .linha.transp {
		float: left;
		clear: both;
		background-color: rgb(79, 79, 79);
		width: 100%;
		opacity: 0.2;
		margin-bottom: 5px;
	}

	.cont-implementacao {
		display: none;
	}
	.item-detalhe {
		padding-bottom: 20px;
	}

	.item-implementacao {
		position: relative;
		margin-top: 40px;
		margin-bottom: 20px;
	}
	.item-implementacao.item1, .item-implementacao.item5 {

	}

	.padrao .item-implementacao.item3, .padrao .item-implementacao.item5 {
		clear: both;
	}

	.item-detalhe h2.tit-implatacao {
		font-size: 40px!important;
		font-weight: normal!important;
		margin-bottom: 20px!important;
	}

	.item-implementacao img {
		position: absolute;
		top: 0;
		left: 0;
		width: 70px;
	}
	.item-implementacao h2 {
		padding-left: 80px;
		margin: 0 0 30px!important;
		font-size: 30px!important;
		box-sizing: border-box;
		width: 100%!important;
		text-align: left!important;
	}
	.item-implementacao p {
		clear: both;
		float: left;
		width: 100%;
		margin: 0px 0 0 9px;
		text-align: left;
		line-height: 18px !important;
		margin-top: 7px;
		text-indent: -9px;
	}

	.padding-top-0 {
		padding-top: 0px!important;
	}

	.padding-bottom-0 {
		padding-bottom: 0px!important;
	}

	.vantagens-implementacao .w-col:nth-child(2n+2){
		clear: both;
	}

	.etapa-ok.off:not(.active) .ico-etapa {
		border-color: #ececec;
	}
	.etapa-ok.off:not(.active) .tit-etapa, .etapa-ok.off em {
		color: #e1dada;
	}
	.etapa-ok.off:not(.active) .tit-etapa::before, .etapa-ok.off:not(.active) .tit-etapa::after {
		background-color: #ececec;
	}
	.etapa-ok.off:not(.active) .ico-etapa img {
		opacity: .2;
	}

	.etapa-ok.off:hover .ico-etapa {
		border-color: #0294ca;
	}
	.etapa-ok.off:hover .tit-etapa {
		color: #0294ca;
	}
	.etapa-ok.off:hover .tit-etapa::before, .etapa-ok.off:hover .tit-etapa::after {
		background-color: #0294ca;
	}
	.etapa-ok.off:hover .ico-etapa img {
		opacity: 1;
	}

	.etapa-assinatura.secundaria {
		display: none;
	}
	.etapa-assinatura.secundaria.rapida {
		display: block;
	}

	.descricao span {
		display: block;
	}
  </style>
</head>
<body class="padrao">
  <div class="w-section hero secundaria consultoria" data-ix="jasou-e-experimente-aparece">
    <?php include('includes/menu.php'); ?>
    <div class="w-container frases secundaria">
      <h2 class="escuro line inst branco" data-ix="fade-scroll">IMPLEMENTAÇÃO LAHAR</h2>
      <h1 class="institucional" data-ix="fade-scroll">Aprenda como seu negócio pode ter resultados com nosso software</h1>
    </div>
  </div>



	<div class="w-section sessao_about white">
		<div class="w-container container_about conteudo">
			<div class="w-row">

				<h2 class="escuro big cinza">Implementação LAHAR</h2>
				<p class="descricao grey" style="margin-bottom: 30px; text-align: center; display: none;">Temos uma equipe de especialistas com mais de 15 anos de experiência em tecnologia e marketing para internet.<br>Quer saber como a LAHAR pode ajudar a gerar resultados e contribuir com seu negócio?</p>

				<h2 class="escuro line" style="margin-bottom: 50px; font-size: 18px; color: #525252;">Escolha um dos nossos planos abaixo:</h2>

				<a href="javascript:" id="gratuita" class="muda-plano">Gratuita<span>em 7 dias</span></a>
				<a href="javascript:" id="rapida" class="muda-plano">Rápida<span>em 30 dias</span></a>
				<a href="javascript:" id="padrao" class="muda-plano active">Padrão<span>em 90 dias</span></a>

				<h2 class="escuro line" id="tit-etapa" style="margin: 40px 0; font-size: 18px; color: #053c50;">A implementação padrão de nosso software consiste nas seguintes etapas:</h2>

				<div class="etapa-assinatura padrao">
					<div class="w-col etapa etapa1 active" rel="">
						<span class="ico-etapa"><img src="images/startup.png" alt="" style="width: 60%;"></span>
						<div class="tit-etapa">Startup</div>
					</div>
					<div class="w-col etapa etapa2 active" rel="2">
						<span class="ico-etapa"><img src="images/atrair-trafego.png" style="width: 70%; margin-top: -11px;"></span>
						<span class="tit-etapa">Atrair Tráfego</span>
						<em>ou</em>
					</div>
					<div class="w-col etapa etapa3 active" rel="3">
						<span class="ico-etapa"><img src="images/257059---coins-conversion-conversion-marketing-conversion-r.png"></span>
						<span class="tit-etapa">Geração de Leads</span>
						<em>ou</em>
					</div>
					<div class="w-col etapa etapa4 active" rel="4">
						<span class="ico-etapa"><img src="images/relacionar-vender.png" style="width: 70%; margin-top: -11px;"></span>
						<span class="tit-etapa">Relacionar & Vender</span>
					</div>
					<div class="w-col etapa etapa5 active" rel="">
						<span class="ico-etapa"><img src="images/analise-resultados.png" style="width: 90%;"></span>
						<span class="tit-etapa">Análise & Resultados</span>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="w-section item-detalhe cont-implementacao cont-gratuita padding-bottom-0">
		<div class="w-container container_about conteudo padding-bottom-0">
			<div class="w-row">

				<h2 class="escuro big cinza tit-implatacao">Implementação Gratuita</h2>

				<div class="w-col w-col-12">
					<h2 class="escuro line">Objetivo:</h2>
					<p class="descricao grey">Esse plano de implementação tem como objetivo ajudar na configuração inicial do software e eliminar dúvidas básicas em relação ao funcionamento das principais funcionalidades em curto prazo.</p>
				</div>

				<div class="linha transp"></div>

				<div class="w-col w-col-12">
					<h2 class="escuro line">Escopo do Serviço Proposto:</h2>
					<p class="descricao grey">Todos nossos planos tem como objetivo principal ensinar nossos clientes a como realizar as ações sem depender de nós. O plano gratuito pode ter início imediato após a contratação do software. Logo após fazê-lo você terá uma reunião (por conferência) com um de nossos especialistas para atingir os objetivos descritos acima e deve ser finalizado em um prazo máximo de 7 dias.</p>
				</div>

			</div>
		</div>
	</div>

	<div class="w-section item-detalhe cont-implementacao cont-rapida">
		<div class="w-container container_about conteudo">
			<div class="w-row">

				<h2 class="escuro big cinza tit-implatacao">Implementação Rápida</h2>

				<div class="w-col w-col-12">
					<h2 class="escuro line">Objetivo:</h2>
					<p class="descricao grey">Esse plano de implementação tem como objetivo ajudar na criação de uma campanha de Marketing Digital com foco em Atrair Tráfego ou Geração de Leads ou Relacionamento e Vendas em curto prazo, transmitindo a empresa os conceitos básicos de como criar uma campanha eficiente utilizando a LAHAR como ferramenta. Como deve ter percebido, será necessário escolher um objetivo principal de acordo com suas necessidades, já que tempo é curto demais. Caso esse plano não atenda suas necessidades, recomendamos escolher o plano padrão.</p>
				</div>

				<div class="linha transp"></div>

				<div class="w-col w-col-12">
					<h2 class="escuro line" data-ix="fade-scroll">Escopo do Serviço Proposto:</h2>
					<p class="descricao grey" data-ix="fade-scroll">O plano tem duração total prevista de um ciclo de 30 dias com início em até 7 dias da contratação do software. Durante esse tempo serão disponibilizadas algumas reuniões (por conferência) com um de nossos especialistas para as ações previstas e deve ser finalizado em um prazo máximo de 60 dias.</p>
				</div>

			</div>
		</div>
	</div>

	<div class="w-section item-detalhe cont-implementacao cont-padrao" style="display: block;">
		<div class="w-container container_about conteudo">
			<div class="w-row">

				<h2 class="escuro big cinza tit-implatacao">Implementação Padrão</h2>

				<div class="w-col w-col-12">
					<h2 class="escuro line" data-ix="fade-scroll">Objetivo:</h2>
					<p class="descricao grey" data-ix="fade-scroll">Esse plano de implementação tem como objetivo realizar a imersão no Marketing Digital com foco em ajudar o negócio a gerar oportunidades. Iremos elaborar e implementar um plano de marketing digital completo para sua empresa que contempla desde atrair tráfego qualificado, gerar leads até se relacionar para gerar oportunidades de vender o seu produto e/ou serviço.</p>
				</div>

				<div class="linha transp"></div>

				<div class="w-col w-col-12">
					<h2 class="escuro line" data-ix="fade-scroll">Escopo do Serviço Proposto:</h2>
					<p class="descricao grey" data-ix="fade-scroll">O plano tem duração total prevista de um ciclo de 90 dias com início em até 7 dias da contratação do software. Durante esse tempo serão disponibilizadas algumas reuniões (por conferência) com um de nossos especialistas para as ações previstas e deve ser finalizado em um prazo máximo de 120 dias.</p>
				</div>

			</div>
		</div>
	</div>

	<div class="w-section white cont-item-implementacao">
		<div class="w-container container_about conteudo">
			<div class="w-row">

				<h2 class="escuro big cinza" data-ix="fade-scroll" style="margin: 20px 0px; display: block;">Principais ações do plano implementação</h2>

				<h2 class="escuro line etapa-assinatura secundaria padrao" style="margin: 40px 0; font-size: 18px; color: #053c50;">Qual o objetivo da sua empresa?</h2>
				<div class="etapa-assinatura secundaria padrao">
					<div class="w-col etapa etapa2 etapa-ok" rel="2" style="margin-left: 20%;">
						<span class="ico-etapa"><img src="images/atrair-trafego.png" style="width: 70%; margin-top: -11px;"></span>
						<span class="tit-etapa">Atrair Tráfego</span>
						<em>ou</em>
					</div>
					<div class="w-col etapa etapa3 etapa-ok" rel="3">
						<span class="ico-etapa"><img src="images/257059---coins-conversion-conversion-marketing-conversion-r.png"></span>
						<span class="tit-etapa">Geração de Leads</span>
						<em>ou</em>
					</div>
					<div class="w-col etapa etapa4 etapa-ok" rel="4">
						<span class="ico-etapa"><img src="images/relacionar-vender.png" style="width: 70%; margin-top: -11px;"></span>
						<span class="tit-etapa">Relacionar & Vender</span>
					</div>
				</div>

				<div class="w-col w-col-6 item-implementacao item1">
					<img src="images/startup.png" alt="">
					<h2 class="escuro big cinza">Startup</h2>
					<p class="descricao grey">- Definição do objetivo e foco do trabalho</p>
					<p class="descricao grey">- Definição dos KPIs</p>
					<p class="descricao grey">- Configuração inicial para uso do software</p>
				</div>

				<div class="w-col w-col-6 item-implementacao item2">
					<img src="images/atrair-trafego.png" alt="">
					<h2 class="escuro big cinza">Atrair Tráfego</h2>
					<p class="descricao grey">- Análise de SEO do site da empresa</p>
					<p class="descricao grey">- Apoio e orientação para produção de conteúdo próprio (criar persona, sugestão de pauta e calendário editorial)</p>
					<p class="descricao grey">- Apoio e orientação para divulgação de conteúdos nas mídias sociais
					<p class="descricao grey">- Campanha de mídia paga em conjunto (geralmente Facebook Ads e/ou Google Adwords)</p>
				</div>

				<div class="w-col w-col-6 item-implementacao item3">
					<img src="images/257059---coins-conversion-conversion-marketing-conversion-r.png" alt="" style="width: 100px; top: -17px; left: -8px;">
					<h2 class="escuro big cinza">Geração de Leads</h2>
					<p class="descricao grey">- Criação de uma oferta relevante (isca digital)</p>
					<p class="descricao grey">- Criação da página de captura (Landing Page)</p>
					<p class="descricao grey">- Promover a oferta (banner site, mídias sociais, campanha multicanal)</p>
					<p class="descricao grey">- Promover a oferta (campanha de mídia paga)</p>
				</div>

				<div class="w-col w-col-6 item-implementacao item4">
					<img src="images/relacionar-vender.png" alt="">
					<h2 class="escuro big cinza">Relacionar & Vender</h2>
					<p class="descricao grey">- Campanhas multicanal para os contatos existentes</p>
					<p class="descricao grey">- Apoio e orientação para divulgação de conteúdos nas mídias sociais</p>
					<p class="descricao grey">- Campanha de mídia paga em conjunto (geralmente Facebook Ads e/ou Google Adwords)</p>
				</div>

				<div class="w-col w-col-6 item-implementacao item5">
					<img src="images/analise-resultados.png" alt="" style="top: -10px; width: 92px; left: -5px;">
					<h2 class="escuro big cinza">Análise & Resultados</h2>
					<p class="descricao grey">- Relatório de fechamento com os resultados obtidos</p>
					<p class="descricao grey">- Sugestões de ações e próximos passos</p>
				</div>

			</div>
		</div>
	</div>

	<div class="w-section item-detalhe cont-implementacao cont-gratuita">
		<div class="w-container container_about conteudo padding-top-0">
			<div class="w-row">

				<div class="linha transp"></div>

				<div class="w-col w-col-12">
					<h2 class="escuro line" data-ix="fade-scroll">Tempo:</h2>
					<p class="descricao grey" data-ix="fade-scroll">Recomendamos ao menos 4 horas de dedicação do responsável da empresa ao longo do período de implementação, incluindo as reuniões com o nossa equipe.</p>
				</div>

				<div class="linha transp"></div>

				<div class="w-col w-col-12">
					<h2 class="escuro line" data-ix="fade-scroll">Investimento:</h2>
					<p class="descricao grey" data-ix="fade-scroll">
						<span>Esse plano é gratuito e não cobraremos nada por isso. :)</span><br>
						<span>Os valores da assinatura do software não estão incluídos em nossos planos de implementação.</span>
					</p>
				</div>

			</div>
		</div>
	</div>

	<div class="w-section item-detalhe cont-implementacao cont-rapida">
		<div class="w-container container_about conteudo">
			<div class="w-row">

				<div class="w-col w-col-12">
					<h2 class="escuro line" data-ix="fade-scroll">Tempo:</h2>
					<p class="descricao grey" data-ix="fade-scroll">Recomendamos ao menos 12 horas de dedicação do responsável da empresa ao longo do período de implementação, incluindo as reuniões com o nossa equipe.</p>
				</div>

				<div class="linha transp"></div>

				<div class="w-col w-col-12">
					<h2 class="escuro line" data-ix="fade-scroll">Investimento:</h2>
					<p class="descricao grey" data-ix="fade-scroll">
						<span style="font-size: 18px;">2x R$ 350,00</span><br>
						<span style="font-size: 13px;">Os valores da assinatura do software e o investimento em compra de mídia não estão incluídos em nossos planos de implementação.</span>
					</p>
				</div>

			</div>
		</div>
	</div>

	<div class="w-section item-detalhe cont-implementacao cont-padrao" style="display: block;">
		<div class="w-container container_about conteudo">
			<div class="w-row">

				<div class="w-col w-col-12">
					<h2 class="escuro line" data-ix="fade-scroll">Tempo:</h2>
					<p class="descricao grey" data-ix="fade-scroll">Recomendamos ao menos 12 horas de dedicação mensal do responsável da empresa ao longo do período de implementação, incluindo as reuniões com o nossa equipe.</p>
				</div>

				<div class="linha transp"></div>

				<div class="w-col w-col-12">
					<h2 class="escuro line" data-ix="fade-scroll">Investimento:</h2>
					<p class="descricao grey" data-ix="fade-scroll">
						<span style="font-size: 18px;">3x de R$ 600,00</span><br>
						<span style="font-size: 13px;">Os valores da assinatura do software e o investimento em compra de mídia não estão incluídos em nossos planos de implementação.</span>
					</p>
				</div>

			</div>
		</div>
	</div>


	<div class="w-section vantagens-implementacao sessao_azul">
		<div class="w-container container_about conteudo">
			<div class="w-row">

				<div class="w-col w-col-12">
					<h2 class="escuro big white" data-ix="fade-scroll">Vantagens</h2>
				</div>

				<div class="w-col w-col-6">
					<div class="w-clearfix div_funcionalidades">
						<img class="seta_consultoria" src="images/check_yes.png" width="45">
                  		<h2 class="escuro line branco left displayinline" data-ix="fade-scroll">Nosso trabalho de apoio a implementação tem como objetivo principal ensinar nossos clientes a conduzir as campanhas e ações por conta própria</h2>
                  	</div>
              	</div>

				<div class="w-col w-col-6">
					<div class="w-clearfix div_funcionalidades">
						<img class="seta_consultoria" src="images/check_yes.png" width="45">
                  		<h2 class="escuro line branco left displayinline" data-ix="fade-scroll">As ações realizadas no software podem ser mantidas continuamente após o trabalho de implementação</h2>
                  	</div>
                </div>

				<div class="w-col w-col-6">
					<div class="w-clearfix div_funcionalidades">
						<img class="seta_consultoria" src="images/check_yes.png" width="45">
                  		<h2 class="escuro line branco left displayinline" data-ix="fade-scroll">Ações que seguem práticas atuais e direcionadas para resultados efetivos marketing e vendas</h2>
                  	</div>
                </div>

				<div class="w-col w-col-6">
					<div class="w-clearfix div_funcionalidades">
						<img class="seta_consultoria" src="images/check_yes.png" width="45">
                  		<h2 class="escuro line branco left displayinline" data-ix="fade-scroll">Acompanhamento próximo de nossos especialistas em Marketing Digital</h2>
                  	</div>
                </div>

			</div>
		</div>
	</div>
  <div class="w-section cta_home" id="experimente">
    <div class="w-container cta_home">
      <h2 class="cinza" data-ix="pump-scroll">Experimente a LAHAR&nbsp;por 30 dias</h2><img class="arrow" src="images/seta_cinza.png" width="106" data-ix="pump-scroll">
      <div class="w-form">
         <form class="form_campos" id="trial-email-form-baixo" name="trial-email-form-baixo" data-name="Email Form" data-ix="pump-scroll">
          <input class="w-input input api-lahar-baixo lahar_email_contato" id="mail_baixo" type="email" placeholder="Seu endereço de email" name="mail" data-name="mail" required="required">
          <input class="w-button button verde big"  id="envia_trial_baixo" type="button" value="Criar minha conta grátis" data-wait="Please wait..." data-ix=''>
          <input class="w-button button verde big" style="display: none;" id="envia_trial_baixo_feedback" type="button" value="Verificando seu email..." data-wait="Please wait..." data-ix=''>
        </form>
        <div class="w-form" id="mensagem_form_baixo" style="display:none;">
          <p style="text-align:left; margin-left:40px; color:#4f4f4f !important;">O e-mail informado já possui uma conta na LAHAR. Favor digitar outro e-mail ou entrar em contato conosco.</p>
        </div>
        <div class="w-form" id="mensagem_form_baixo_invalido" style="display:none;">
          <p style="text-align:left; margin-left:100px; color:#4f4f4f !important;">O e-mail informado não é válido.</p>
        </div>
      </div>
    </div>
  </div>

  <?php include('includes/rodape.php'); ?>

  <script>
  	$('#gratuita').click(function(){
  		$('.cont-item-implementacao').hide();

  		$('#tit-etapa').html('A implementação de seu software consiste em uma única etapa:');

  		$('.muda-plano').removeClass('active');
  		$(this).addClass('active');

  		$('.etapa').removeClass('active').removeClass('etapa-ok');
  		$('.etapa1').addClass('active');

  		$('.etapa-assinatura').removeClass('rapida');
  		$('.etapa-assinatura').removeClass('padrao');
  		$('.etapa-assinatura').addClass('gratuita');

  		$('.cont-implementacao').hide();
  		$('.cont-gratuita').show();
  		$('.item-implementacao').hide();

  		$('body').removeClass('padrao').removeClass('rapida').addClass('gratuita');
  	});

  	$('#rapida').click(function(){
  		$('.item-implementacao').hide();
  		$('.cont-implementacao').hide();

  		$('#tit-etapa').html('Qual o objetivo da sua empresa?');

  		$('.muda-plano').removeClass('active');
  		$(this).addClass('active');

  		$('.etapa').removeClass('active off').removeClass('etapa-ok');
  		$('.etapa').addClass('etapa-ok');
  		$('.etapa1').addClass('active').removeClass('etapa-ok');
  		$('.etapa5').addClass('active').removeClass('etapa-ok');

  		$('.etapa-assinatura').removeClass('gratuita');
  		$('.etapa-assinatura').removeClass('padrao');
  		$('.etapa-assinatura').addClass('rapida');

  		$('.cont-rapida').show();
  		$('.cont-item-implementacao').show();

  		//$('.item1').show();
  		//$('.item5').show();

  		$('body').removeClass('padrao').removeClass('gratuita').addClass('rapida');
  	});

  	$('#padrao').click(function(){
  		$('.cont-item-implementacao').hide();

  		$('#tit-etapa').html('A implementação de seu software consiste nas seguintes etapas:');

  		$('.muda-plano').removeClass('active');
  		$(this).addClass('active');

  		$('.etapa').removeClass('active').removeClass('etapa-ok off');
  		$('.etapa').addClass('active');

  		$('.etapa-assinatura').removeClass('gratuita');
  		$('.etapa-assinatura').removeClass('rapida');
  		$('.etapa-assinatura').addClass('padrao');

  		$('.cont-implementacao').hide();
  		$('.cont-padrao').show();
  		$('.cont-item-implementacao').show();
  		$('.item-implementacao').show();

  		$('body').removeClass('gratuita').removeClass('rapida').addClass('padrao');
  	});

  	$('.etapa').click(function(){
  		if($(this).hasClass('etapa-ok')){

	  		$('.etapa2').removeClass('active').addClass('off');
	  		$('.etapa3').removeClass('active').addClass('off');
	  		$('.etapa4').removeClass('active').addClass('off');
	  		$('.item2').hide();
	  		$('.item3').hide();
	  		$('.item4').hide();

	  		if(item != ''){
		  		var item = '.item'+$(this).attr('rel');
		  		var etapa = '.etapa'+$(this).attr('rel');
		  		$('.item1').show();
		  		$('.item5').show();
		  		$(item).show();
		  		$(etapa).addClass('active');
	  		}

	  	}
  	});
  </script>
</body>
</html>