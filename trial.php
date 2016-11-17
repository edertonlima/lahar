<?php
  $email = $_GET['email'];
?>

<!DOCTYPE html>
<html data-wf-site="556474ad0112f01b4ff314c5" data-wf-page="556474ad0112f01b4ff314c6">
<head>
  <meta charset="utf-8">
  <title>Criar Conta Gratuita | LAHAR</title>
  <meta name="description" content="Experimente nosso software gratuitamente por 30 dias!">
  <meta name="keywords" content="Criar Conta Gratuita, LAHAR, Software de Marketing Digital, Automação de Marketing, CRM, Geração de Leads">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property='og:title' content='Criar Conta Gratuita | LAHAR' />
  <meta property='og:description' content='Experimente nosso software gratuitamente por 30 dias!' />
  <meta property='og:url' content='http://www.lahar.com.br/criar-conta' />
  <meta property='og:image' content='http://www.lahar.com.br/images/lahar.jpg'/>
  <meta property="og:image:type" content="image/jpeg">

  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/lahar.webflow.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
</head>
<body class="page-trial">
  <div class="w-section" id="trial" data-ix="jasou-e-experimente-aparece">
    <div class="menu_top">
      <div class="w-nav nav_cinza" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">
        <div class="w-row">
          <div class="w-col w-col-1 w-col-small-1 coluna_1"></div>
          <div class="w-col w-col-10 w-col-small-10 w-clearfix coluna_navmenu txt-ajuda">
            <div class="w-nav-button menu_button">
              <div class="w-icon-nav-menu icon_navbar" style="display: none!important;"></div>
            </div>
            <a class="w-nav-brand logo_menu" href="/"><img src="images/logo-header.png" width="159" style="padding-bottom: 15px;">
            </a>
            <span class="telefone_top" style="float: right">Dúvidas? Ligue para nossa Central de Vendas <strong>(14) 3010-3330</strong></span>
          </div>
          <div class="w-col w-col-1 w-col-small-1 coluna_1"></div>
        </div>
      </div>
    </div>
  </div>
    <div class="w-section sessao_cinza2">
        <div class="w-container" data-ix="fade-scroll">
          <div class="w-row" style="padding-bottom: 30px; padding-top: 70px; text-align: center;">
            <div class="w-col w-col-12">
                <h1 class="escuro big cinza">Experimente nosso software gratuitamente!</h1>
                <p class="escuro line case">Utilize a versão trial por 30 dias. Cadastre-se.</p>
            </div>
          </div>
          <div class="w-row" style="text-align: center;">
            <div class="w-col w-col-6" id="campos_form">
                <form id="trial-email-form" data-name="Trial Form" name="trial-email-form" data-ix="pump">
                  <input class="w-input input api-lahar" id="mail" type="email" placeholder="Seu endereço de email" name="mail" data-name="mail" value="<?php if($email){ echo $email; } ?>" required="required">
                  <input class="w-input input api-lahar" id="nome" type="text" placeholder="Seu nome" name="nome" data-name="nome" required="required" autofocus>
                  <input class="w-input input api-lahar telefone" id="tel" type="text" placeholder="Seu telefone de contato" name="tel" data-name="tel" required="required">
                  <input class="w-input input api-lahar" id="empresa" type="text" placeholder="Nome de sua empresa" name="empresa" data-name="empresa" required="required">
                  <input class="w-input input api-lahar" id="site" type="url" onblur="normalizaLink(this.value,this);" placeholder="http://www.seusite.com.br" name="site" data-name="site" required="required">
                  <select class="w-select field api-lahar" name="tags" id="tags" style="float:left;" required="required">
                    <option selected="" disabled="" value="">Qual o seu objetivo com a LAHAR?</option>
                    <option value="empreendedor">Possuo um negócio e desejo ter resultados com a internet</option>
                    <option value="concorrente">Já utilizei/utilizo outra ferramenta e desejo saber mais sobre a LAHAR</option>
                    <option value="agencia">Sou uma agência e desejo entender como utilizar para meus clientes</option>
                    <option value="estudante">Sou estudante e interessado em conhecer esse tipo de software</option>
                  </select>
                  <h2 class="escuro line textopadrao" style="text-align: center;">Clicando no botão abaixo você concorda com nossos <a href="politica-privacidade-uso" class="link_padrao" target="_blank">termos de uso</a></h2>
                  <input class="w-button button verde big"  id="cria_conta_trial" type="submit" value="Enviar solicitação" data-wait="Por favor aguarde..." data-ix=''>
                  <input class="w-button button verde big" style="display: none;" id="cria_conta_trial_aguarde" type="button" value="Por favor aguarde..." data-wait="Por favor aguarde..." data-ix=''>
                </form>
            </div>

            <div class="w-col w-col-6" id="motivos">
                <img class="icon_vaga lista_3" width="45" src="images/check_yes.png">
                <p class="escuro line" style="font-size: 15px; margin-top: 0px;">Impulsione o seu número de leads, criando páginas de captura facilmente e obtendo maiores taxas de conversão em seu site</p><br>
                <img class="icon_vaga lista_3" width="45" src="images/check_yes.png">
                <p class="escuro line" style="font-size: 15px; margin-top: 0px;">Transforme seus contatos em leads qualificados e crie mais oportunidades concretas de vendas</p><br>
                <img class="icon_vaga lista_3" width="45" src="images/check_yes.png">
                <p class="escuro line" style="font-size: 15px; margin-top: 0px;">Ganhe mais tempo e produtividade a partir de uma solução onde você tem total controle sobre as ações de marketing digital</p><br>
                <img class="icon_vaga lista_3" width="45" src="images/check_yes.png">
                <p class="escuro line" style="font-size: 15px; margin-top: 0px;">Mensure os resultados em tempo real de suas campanhas e obtenha informações atualizadas sobre seus clientes</p><br>
                <img class="icon_vaga lista_3" width="45" src="images/check_yes.png">
                <p class="escuro line" style="font-size: 15px; margin-top: 0px;">Automatize os processos de marketing digital e impacte seus leads de acordo com seus interesses e preferências</p>
            </div>
          </div>

          <div class="w-row box-etapa" style="display: none; margin-top:10px; margin-bottom:10px;" id="mensagem_sucesso">
            <fieldset class="w-col w-col-12 center">
              <h2 class="sucesso"><i class="fa fa-check-square-o" aria-hidden="true"></i>Sua conta foi solicitada com sucesso!</h2>
              <!-- <p class="escuro line case">Acesse seu email e siga as instruções enviadas para acessar o software.</p> -->
              <p class="escuro line case">Aguarde que você receberá em seu email as instruções e os dados para acessar o software.</p>
            </fieldset>
          </div>

          <div class="w-row box-etapa" style="display: none; margin-top:10px; margin-bottom:10px;" id="mensagem_erro_usuario">
            <fieldset class="w-col w-col-12 center">
              <h2 class="sucesso"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:#ff0000; font-size:60px;"></i>Oopss...email já cadastrado!</h2>
              <p class="escuro line case">O email informado já possui uma conta na LAHAR. Favor informar outro email válido.</p>
            </fieldset>
            <fieldset class="w-col w-col-12 center action">
            <a href="criar-conta?email=<?php echo $email; ?>" class="w-button button verde big">Tentar novamente</a>
          </fieldset>
          </div>

          <div class="w-row" style="  padding-top: 15px; text-align: center;">
              <div class="w-col w-col-12">
                  <div class="linha"></div>
              </div>
          </div>

          <div class="w-row" style="padding-bottom: 107px;  padding-top: 35px;">
              <div class="w-col w-col-14" style="text-align: center;">
                <img src="images/fotoMocelim.png" style="width: 28%;"><br><br>
                <p style="text-align: center; color: #555555;">“Realizamos webinars em uma média de 3 vezes por semana, o que leva a um processo constante da utilização do e-mail marketing com o objetivo de divulgar esses eventos. Com a LAHAR, conseguimos aumentar em muito o número de pessoas participando de webinars, o que levou a um maior engajamento de nossos leads.”
                  <br>
                  <br><strong>Antonio Mocelim - M3Corp</strong>
                </p>
              </div>
              <div class="w-col w-col-14 depoimento-last" style="text-align: center; float: right;">
                <img src="images/fotoMarina.png" style="width: 26%;"><br><br>
                <p style="text-align: center; color: #555555;">“Hoje a gente tem tudo automatizado na ferramenta, então toda a nossa atuação em marketing digital já é voltada para a utilização da LAHAR. Em nosso site temos diversas áreas e pontos de conversão que são totalmente integrados com a plataforma. Temos a certeza que, com a LAHAR, podemos contar com a gestão e a mensuração, do início ao fim, dos resultados de nossas ações de marketing digital.”
                  <br>
                  <br><strong>Marina Oliveira - Lecom</strong>
                </p>
              </div>
          </div>
      </div>
  </div>
  <?php $rodapeMini = true; ?>
  <?php include('includes/rodape.php'); ?>
  <script src="js/jquery.maskedinput.js"></script>
  <script type="text/javascript">
    jQuery("input.telefone")
        .focusin(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            element = $(target);
            element.unmask();
            element.mask("(99) 99999-999?9");
    });
    jQuery("input.telefone")
        .focusout(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();

            if(phone.length > 10) {
                element.mask("(99) 99999-999?9");
            } else {
                element.mask("(99) 9999-9999?9");
            }
    });
  </script>
</body>
</html>