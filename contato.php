<!DOCTYPE html>
<html data-wf-site="556474ad0112f01b4ff314c5" data-wf-page="559bc9a5a9e7a398570ba19b">
<head>
  <meta charset="utf-8">
  <title>Contato | LAHAR</title>
  <meta name="description" content="Contato - LAHAR">
  <meta name="keywords" content="Contato - LAHAR">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">

  <meta property='og:title' content='Contato | LAHAR' />
  <meta property='og:description' content='Vamos colocar suas ideias em prática? Preencha o formulário abaixo e entraremos em contato.' />
  <meta property='og:url' content='http://www.lahar.com.br/contato' />
  <meta property='og:image' content='http://www.lahar.com.br/images/title_08.jpg'/>
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
</head>
<body>
  <div class="w-section hero secundaria contato" data-ix="jasou-e-experimente-aparece">
    <?php include('includes/menu.php'); ?>
    <div class="w-container frases secundaria">
      <h2 class="escuro line inst branco" data-ix="fade-scroll">ENTRE EM CONTATO</h2>
      <h1 class="institucional" data-ix="fade-scroll">Vamos colocar suas <br>ideias em prática?</h1>
      <h2 class="escuro line inst branco" data-ix="fade-scroll" style="text-transform: none;">Deixe uma mensagem no formulário abaixo</h2>
    </div>
  </div>
  <div class="w-section sessao_about white">
    <div class="w-container container_about conteudo">
      <div class="w-form form_wrapper">
        <h1 class="escuro line textopadrao" style="font-size: 15px; text-align:center;">
            Se preferir nos envie um email para <strong>contato@lahar.com.br</strong> ou<br> entre em contato pelo nosso telefone <strong>(14) 3010-3330</strong>.
        </h1>
        <br>
        <form class="form_50" id="contato-email-form" name="contato-email-form" data-name="Email Form">
          <input class="w-input field api-lahar-contato lahar_nome_contato" id="nome" type="text" placeholder="Seu nome" name="name" data-name="Name" required="required">
          <input class="w-input field api-lahar-contato lahar_email_contato" id="email" type="email" placeholder="Seu endereço de email" name="email" data-name="Email" required="required">
          <input class="w-input field api-lahar-contato lahar_tel_celular" id="tel_celular" type="text" placeholder="Seu telefone de contato" name="tel_celular" data-name="Contato" required="required">
          <textarea class="w-input textarea api-lahar-contato lahar_anotacoes" id="textarea" placeholder="Deixe aqui sua mensagem..." name="mensagem" data-name="mensagem" required="required" maxlength="1000"></textarea>
          <input class="w-button button azul full" id="envia_contato" type="submit" value="ENVIAR" data-wait="Por favor, aguarde..." wait="Por favor, aguarde...">
        </form>
        <div class="w-form-done" id="mensagem_contato">
          <img src="images/1436291970_Like.png">
          <p class="sucesso"><strong>Obrigado!<br xmlns="http://www.w3.org/1999/xhtml"></strong>
            <br>Por favor, aguarde uns instantes. Vamos retornar o mais breve possível!
            <br>
            <br><strong>Equipe de Atendimento LAHAR</strong>
          </p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form</p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section sessao_cinza"></div>
  <div class="w-section sessao_about white"></div>
  <div class="w-section sessao_cinza"></div>
  <div class="w-section sessao_cinza"></div>
  <div class="w-section sessao_about white"></div>
  <div class="w-section sessao_cinza"></div>
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
  <script src="js/jquery.maskedinput.js"></script>
  <script type="text/javascript">
    jQuery("input.lahar_tel_celular")
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