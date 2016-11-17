<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Wed Jul 22 2015 23:35:14 GMT+0000 (UTC) -->
<html data-wf-site="556474ad0112f01b4ff314c5" data-wf-page="559bcdd6a9e7a398570ba29b">
<head>
  <meta charset="utf-8">
  <title>Trabalhe na LAHAR | LAHAR</title>
  <meta name="description" content="Trabalhe na LAHAR">
  <meta name="keywords" content="Quer fazer parte do nosso time? Preencha o formulário e candidate-se a uma das nossas vagas.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">

  <meta property='og:title' content='Trabalhe na LAHAR | LAHAR' />
  <meta property='og:description' content='Quer fazer parte do nosso time? Preencha o formulário e candidate-se a uma das nossas vagas.' />
  <meta property='og:url' content='http://www.lahar.com.br/trabalhe-na-lahar' />
  <meta property='og:image' content='http://www.lahar.com.br/images/team.jpg'/>
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
  <div class="w-section hero secundaria team" data-ix="jasou-e-experimente-aparece">
    <?php include('includes/menu.php'); ?>
    <div class="w-container frases secundaria">
      <h2 class="escuro line inst branco" data-ix="fade-scroll">QUER FAZER PARTE DO NOSSO TIME?</h2>
      <h1 class="institucional" data-ix="fade-scroll">Trabalhe na LAHAR</h1>
      <h2 class="escuro line inst branco" data-ix="fade-scroll" style="text-transform: none;">Utilize o formulário abaixo para deixar seu currículo em<br>nosso banco de talentos</h2>
    </div>
  </div>
  <div class="w-section sessao_about white">
    <div class="w-container container_about conteudo">
      <div class="w-row">
        <div class="w-col w-col-4 w-col-small-4 w-clearfix coluna_vagas">
          <h3 class="h3_title_funcionalidades" data-ix="slide-right-to-left">Vagas Disponíveis</h3>
          <img class="icon_vaga" src="images/checked_user.png" width="25">
          <h2 class="escuro line textopadrao"><a href="javascript: seleciona_vaga('customer');" id="customer" class="escuro line textopadrao" style="text-transform: inherit;">&nbsp;Customer Success</a></h2>
          <img class="icon_vaga" src="images/checked_user.png" width="25">
          <h2 class="escuro line textopadrao"><a href="javascript: seleciona_vaga('desenvolvedor_web');" id="desenvolvedor_web" class="escuro line textopadrao" style="text-transform: inherit;">&nbsp;Desenvolvedor Web PHP</a></h2>
          <img class="icon_vaga" src="images/checked_user.png" width="25">
          <h2 class="escuro line textopadrao"><a href="javascript: seleciona_vaga('especialista_mktdigital');" id="especialista_mktdigital" class="escuro line textopadrao" style="text-transform: inherit;">&nbsp;Especialista de Marketing Digital</a></h2>
          <img class="icon_vaga" src="images/checked_user.png" width="25">
          <h2 class="escuro line textopadrao"><a href="javascript: seleciona_vaga('estagiario_web');" id="estagiario_web" class="escuro line textopadrao" style="text-transform: inherit;">&nbsp;Estagiário Desenvolvedor Web</a></h2>

          <h3 class="h3_title_funcionalidades" data-ix="slide-right-to-left">Benefícios</h3>
          <img class="icon_vaga" width="25" src="images/check_yes.png">
          <h2 class="escuro line textopadrao">&nbsp;Participação nos Resultados.</h2>
          <img class="icon_vaga" width="25" src="images/check_yes.png">
          <h2 class="escuro line textopadrao">&nbsp;Plano de Saúde Unimed.</h2>
          <img class="icon_vaga" width="25" src="images/check_yes.png">
          <h2 class="escuro line textopadrao">&nbsp;Vale Refeição.</h2>
          <img class="icon_vaga" width="25" src="images/check_yes.png">
          <h2 class="escuro line textopadrao">&nbsp;Flexibilidade nos horários.</h2>
          <img class="icon_vaga" width="25" src="images/check_yes.png">
          <h2 class="escuro line textopadrao">&nbsp;Workshops e Seminários internos para compartilhar conhecimento.</h2>
          <img class="icon_vaga" width="25" src="images/check_yes.png">
          <h2 class="escuro line textopadrao">&nbsp;Ambiente descontraído, confortável, saudável para nossos colaboradores.</h2>
          <img class="icon_vaga" width="25" src="images/check_yes.png">
          <h2 class="escuro line textopadrao">&nbsp;Trabalhar vestido da maneira mais agradável para você, sem dress code.</h2>
        </div>
        <div class="w-col w-col-8 w-col-small-8 coluna_form_trabalhe">
          <h3 class="h3_title_funcionalidades" data-ix="slide-right-to-left" id="titulo_requisitos" <?php if($_GET['enviado'] == 'ok'){ echo "style='display:none;'"; } ?>>Cadastre seu Currículo</h3>
          <h2 class="escuro line textopadrao" id="texto_requisitos" <?php if($_GET['enviado'] == 'ok'){ echo "style='display:none;'"; } ?>>Clique em uma das vagas ao lado para se candidatar ou preencha seus dados para apenas enviar seu currículo para nós.</h2>
          <div class="w-form form_wrapper">
            <form id="curriculo_form" enctype="multipart/form-data" action="envia_curriculo.php" method="post" data-name="Email Form" name="email-form" <?php if($_GET['enviado'] == 'ok'){ echo "style='display:none;'"; } ?>>
              <input class="w-input field" id="nome" type="text" placeholder="Nome" name="nome" data-name="Nome" required="required">
              <input class="w-input field" id="email" type="email" placeholder="Email" name="email" data-name="email" required="required">
              <input class="w-input field" id="telefone" type="text" placeholder="Telefone" name="telefone" data-name="telefone" required="required" style="width: 50%; float:left;">
              <input class="w-input field" id="cidade_uf" type="text" placeholder="Cidade/UF" name="cidade_uf" data-name="cidade_uf" required="required" style="width: 50%;">
              <select class="w-select field" name="pretensao" id="pretensao" style="width: 50%; float:left;" required="required">
                <option selected="" disabled="" value="">Pretensão Salarial</option>
                <option value="Até R$.1000,00">Até R$1.000,00</option>
                <option value="Entre R$1.000,00 e R$2.000,00">Entre R$1.000,00 e R$2.000,00</option>
                <option value="Entre R$2.000,00 e R$3.000,00">Entre R$2.000,00 e R$3.000,00</option>
                <option value="Entre R$3.000,00 e R$4.000,00">Entre R$3.000,00 e R$4.000,00</option>
                <option value="Entre R$4.000,00 e R$5.000,00">Entre R$4.000,00 e R$5.000,00</option>
                <option value="Acima de R$ 5.000,00">Acima de R$ 5.000,00</option>
              </select>
              <select class="w-select field" name="como_chegou" id="como_chegou" style="width:50%;" required="required">
                <option selected="" disabled="" value="">Como você conheceu a LAHAR?</option>
                <option value="clientes_parceiros">Clientes / Parceiros</option>
                <option value="google">Google</option>
                <option value="facebook">Facebook</option>
                <option value="indicação">Indicação da equipe LAHAR</option>
                <option value="linkedin">Linkedin</option>
                <option value="site_emprego">Sites de emprego</option>
                <option value="site_blog">Site ou Blog da LAHAR</option>
                <option value="outras_mídias">Outras Mídias</option>
              </select>
              <textarea class="w-input textarea" id="textarea" placeholder="Por que deseja trabalhar na LAHAR?" name="textarea" data-name="textarea" required="required" maxlength="500"></textarea>
              <input class="w-input field" id="perfil_linkedin" type="url" placeholder="Perfil do Linkedin" name="perfil_linkedin" data-name="perfil_linkedin">
              <input class="w-input field" id="curriculo" type="file" placeholder="Currículo (.doc ou .pdf)" name="curriculo" data-name="curriculo">
              <input class="w-input field" id="vaga" type="hidden" name="vaga" data-name="vaga">
              <input class="w-button button azul full" type="submit" value="ENVIAR INFORMAÇÕES" id="envia_curriculo" data-wait="Por favor, aguarde..." wait="Por favor, aguarde...">
            </form>
            <div class="w-form-done" <?php if($_GET['enviado'] == 'ok'){ echo "style='display:block; height:510px;'"; } ?>><img src="images/1436291970_Like.png">
              <p class="sucesso"><strong>Informações recebidas!<br xmlns="http://www.w3.org/1999/xhtml"></strong>
                <br>Seus dados já chegaram até nós, agora é só aguardar que entraremos em contato.
                <br>
                <br>Boa sorte!
                <br>
                <br><strong>Equipe de Talentos LAHAR</strong>
              </p>
            </div>
            <div class="w-form-fail" <?php if($_GET['enviado'] == 'erro'){ echo "style='display:block;'"; } ?>>
              <p style="color: white;">Oops! Ocorreu um problema no envio das informações. <br>Por favor tente novamente!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section sessao_cinza"></div>
  <?php include('includes/rodape.php'); ?>
  <script>
  function seleciona_vaga(vaga){

      document.getElementById("vaga").value = vaga;

      if(vaga == 'desenvolvedor_web'){
        document.getElementById("customer").style.fontWeight = "normal";
        document.getElementById("especialista_mktdigital").style.fontWeight = "normal";
        document.getElementById("desenvolvedor_web").style.fontWeight = "bold";
        document.getElementById("estagiario_web").style.fontWeight = "normal";
        document.getElementById("titulo_requisitos").innerHTML = "Cadastre seu Currículo para Desenvolvedor Web PHP";
        document.getElementById("texto_requisitos").innerHTML = "<b>Descrição da vaga:</b><br>Se você é um \"ninja\" do desenvolvimento web essa vaga é para você.  :]<br><br> Buscamos profissionais que tenham experiência em desenvolvimento web php e que queiram integrar um time jovem, motivado e empenhado em criar a melhor plataforma de marketing digital do país.<br><br><b>O desenvolvedor precisa saber trabalhar em nossa estrutura:</b><br><ul><li>PHP e frameworks como CodeIgniter e Symfony;</li><li>HTML, CSS, JavaScript e JQuery;</li><li>Banco de dados MySQL e Oracle;</li><li>Arquitetura escalável, em Cloud, Multi-Empresa/Cliente;</li><li>Amazon AWS.</li></ul><br>";
      }else if(vaga == 'especialista_mktdigital'){
        document.getElementById("customer").style.fontWeight = "normal";
        document.getElementById("especialista_mktdigital").style.fontWeight = "bold";
        document.getElementById("desenvolvedor_web").style.fontWeight = "normal";
        document.getElementById("estagiario_web").style.fontWeight = "normal";
        document.getElementById("titulo_requisitos").innerHTML = "Cadastre seu Currículo para Especialista de Marketing Digital";
        document.getElementById("texto_requisitos").innerHTML = "<b>Descrição da vaga:</b><br>Como especialista de marketing digital sua missão será ajudar a LAHAR a encontrar formas eficientes e escaláveis de gerar trafego qualificado e posterior oportunidades de vendas para a nossa equipe comercial.<br><br>Este perfil de profissional dever ter como objetivo potencializar os principais canais digitais da LAHAR, utilizando o que existe de mais avançado de marketing digital/grown hacking.<br>Saber navegar sobre os assuntos SEO, Mídia Paga (Google Adwords, Facebook Ads, Linkedin Ads, etc.), Email Marketing, Social Media, Automação de Marketing, Geração de Leads/Conversão é fundamental.<br><br>Ao assumir este desafio, o profissional irá assumir  as responsabilidades em nossos canais digitais e em paralelo ajudará os clientes com necessidades de consultoria avançada.<br><br>Por ser um profissional especialista, o mesmo tem o papel fundamental de contribuição no roadmap de evoluções e melhorias de nossa plataforma LAHAR, além de contribuir com materiais de ajuda.<br><br><b>Requisitos:</b><br><ul><li>Disposição para colaborar com o crescimento da Plataforma LAHAR;</li><li>Conhecimento geral de Marketing Digital (SEO, Web Analytics, Social Media, Email Marketing, Geração de Leads, etc.);</li><li>Ter 2 ou mais anos de experiência como especialista no assunto;</li><li>Ter experiência com Wordpress;</li><li>Capacidade de aprendizado;</li><li>Visão analítica dos processos;</li><li>Inglês Intermediário ou Avançado.</li></ul><br><b>Diferenciais:</b><br><ul><li>Conhecimento em Inbound Marketing;</li><li>Conhecimento em técnicas de Growth Hacking.</li></ul><br>";
      }else if (vaga == 'customer'){
        document.getElementById("customer").style.fontWeight = "bold";
        document.getElementById("especialista_mktdigital").style.fontWeight = "normal";
        document.getElementById("desenvolvedor_web").style.fontWeight = "normal";
        document.getElementById("estagiario_web").style.fontWeight = "normal";
        document.getElementById("titulo_requisitos").innerHTML = "Cadastre seu Currículo para Customer Success";
        document.getElementById("texto_requisitos").innerHTML = "<b>Descrição da vaga:</b><br>Sucesso do cliente! Quer participar deste processo? Esta vaga é para você!<br><br>O objetivo do Customer Success é colaborar visando garantir o sucesso do nosso cliente. Para isto este profissional necessita acompanhar constantemente a evolução e os resultados utilizando nossa plataforma. Como customer você terá a oportunidade de relacionar-se constantemente com vários clientes nos mais variados segmentos.<br><br>Responsabilidade e aprendizado constante faz parte desta vaga, somos focados na entrega e geração de resultados para nossos clientes e a todo momento temos interação na busca de feedbacks e direcionamentos para nossos clientes e equipe interna, sempre na busca de gerar resultados através do marketing digital e do crescimento de todos os envolvidos.<br><br>Ao assumir esta função, você terá uma oportunidade única de aprender constantemente sobre Marketing Digital, aprender a aplicar uma metodologia de trabalho eficaz e aprender sobre os mais variados negócios/segmentos, além de ser uma peça fundamental na geração de resultados para os nossos clientes e um canal importante na evolução da nossa Empresa/Plataforma e equipe interna.<br><br><b>Requisitos:</b><br><ul><li>Muita vontade de trabalhar em uma empresa focada em geração de resultados e que busca ter a melhor plataforma e entrega de resultados através de marketing digital;</li><li>Boa comunicação e didática;</li><li>Relacionar-se bem com clientes, gostar de trabalhar no atendimento e relacionamento com clientes, sempre baseado na entrega dos resultados;</li><li>Grande interesse por Marketing Digital (SEO, Analytics, Social Media e Email Marketing);</li><li>Ser interessado em crescimento constante, buscar aprender e ter uma alta capacidade analítica para avaliar números e resultados;</li><li>Habilidade de produzir bons textos sobre o Marketing Digital;</li><li>Inglês intermediário ou avançado.</li></ul><br>";
      }else if (vaga == 'estagiario_web'){
        document.getElementById("customer").style.fontWeight = "normal";
        document.getElementById("especialista_mktdigital").style.fontWeight = "normal";
        document.getElementById("desenvolvedor_web").style.fontWeight = "normal";
        document.getElementById("estagiario_web").style.fontWeight = "bold";
        document.getElementById("titulo_requisitos").innerHTML = "Cadastre seu Currículo para Estagiário Desenvolvedor Web";
        document.getElementById("texto_requisitos").innerHTML = "<b>Descrição da vaga:</b><br>O estagiário desenvolvedor irá adquirir experiência em todo tipo de desenvolvimento web, irá integrar um time jovem, apaixonados por tecnologia e todos muito empenhados em criar a melhor plataforma de marketing digital do país.<br><br>O estudante precisa cursar nível superior em tecnologia da informação e tenha muito interesse em aprender e crescer junto conosco.<br><br><b>Abaixo um pouco de nossa estrutura que terá contato:</b><br><ul><li>PHP e frameworks como CodeIgniter e Symfony;</li><li>HTML, CSS, JavaScript e JQuery;</li><li>Banco de dados MySQL e Oracle;</li><li>Arquitetura escalável, em Cloud, Multi-Empresa/Cliente;</li><li>Amazon AWS.</li></ul><br>";
      }

  }
  </script>
</body>
</html>