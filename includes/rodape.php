<?php if(empty($rodapeMini)){ ?>
<div class="w-section footer">
    <div class="w-row">
      <div class="w-col w-col-2"></div>
      <div class="w-col w-col-2">
          <p class="descricao cinza" style="margin-top:0px;"><strong>LAHAR</strong></p>
          <a class="link_footer cinza _14" href="a-empresa">A Empresa</a>
          <a class="link_footer cinza _14" href="trabalhe-na-lahar">Trabalhe NA LAHAR</a>
          <a class="link_footer cinza _14" href="contato">Contato</a>
          <a class="link_footer cinza _14" href="http://blog.lahar.com.br">Blog</a>
          <a class="link_footer cinza _14" href="funcionalidades-lahar">Funcionalidades</a>
          <a class="link_footer cinza _14" href="implementacao-lahar">Implementação LAHAR</a>
          <a class="link_footer cinza _14" href="planos-e-precos">Planos e Preços</a>
          <a class="link_footer cinza _14" href="parceria">Seja um Parceiro</a>
          <a class="link_footer cinza _14" href="http://ajuda.lahar.com.br">Central de Ajuda</a>
          <a class="link_footer cinza _14" href="politica-privacidade-uso">Política de Privacidade</a>
      </div>
      <div class="w-col w-col-3">
        <div class="w-embed w-script w-hidden-small w-hidden-tiny"><a class="twitter-timeline" href="https://twitter.com/lahardigital" data-widget-id="608673913686618112">Tweets by @lahardigital</a>
          <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
          </script>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-embed w-hidden-small w-hidden-tiny">
          <div class="fb-page" data-href="https://www.facebook.com/lahardigital" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
            <div class="fb-xfbml-parse-ignore">
              <blockquote cite="https://www.facebook.com/lahardigital"><a href="https://www.facebook.com/lahardigital">LAHAR</a>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      <div class="w-col w-col-2"></div>
    </div>
</div>
<?php } ?>
<div class="w-section sessao_textos_rodape">
    <div class="w-row coluna_social">
      <div class="w-col w-col-2 w-col-small-2 coluna_rodape" style="margin-top:0px;"></div>
      <div class="w-col w-col-6 w-col-small-6 coluna_footer">
        <p class="descricao cinza footer_texts cinzaclaro">Copyright © 2016 - LAHAR. Todos os direitos reservados. </p>
      </div>

      <?php if(empty($rodapeMini)){ ?>
      <div class="w-col w-col-4 w-col-small-4 coluna_icones">
        <a class="w-inline-block social" href="https://plus.google.com/103582358471907428944" target="_blank"><img src="images/5576fc7d7c82bf8771d2ac04_29-32.png" width="25"></a><!-- Google+ -->
        <a class="w-inline-block social" href="https://www.facebook.com/lahardigital" target="_blank"><img src="images/5576fc3a7c82bf8771d2abf5_1-32.png" width="25"></a><!-- Facebook -->
        <a class="w-inline-block social" href="https://www.linkedin.com/company/lahar-digital" target="_blank"><img src="images/5576fc6fe695c0d36564f714_5-32.png" width="25"></a> <!-- LinkedIn -->
        <a class="w-inline-block social" href="https://twitter.com/lahardigital" target="_blank"><img src="images/5576fc5ce695c0d36564f710_2-32.png" width="25"></a><!-- Twitter -->
        <a class="w-inline-block social" href="https://www.youtube.com/channel/UCEjSsivsCSpV5eXDsicJgRQ" target="_blank"><img src="images/5576fc65e695c0d36564f712_9-32.png" width="25"></a><!-- Youtube -->
      </div>
      <?php } ?>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>

  <script>
  </script>
  <script src="http://app.lahar.com.br/assets/scripts/custom/api_parametros.js" type="text/javascript"></script>
  <script type="text/javascript">

	$(document).ready(function(){

    $('#entre_em_contato').click(function(event) {
      window.location.href = 'http://www.lahar.com.br/contato';
    });

    $('.seja_parceiro').click(function(event) {
      window.open('http://paginas.lahar.com.br/seja-um-parceiro-lahar','_blank');
    });

    $('#envia_trial').click(function(event) {
      var email = document.getElementById("mail").value;
      var re = /^(([^<>()[]\.,;:s@"]+(.[^<>()[]\.,;:s@"]+)*)|(".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/igm;

      if(email){

        if(!validateEmail(email)){
          document.getElementById("mensagem_form").style.display = "none";
          document.getElementById("mensagem_form_invalido").style.display = "inherit";
        }else{

          $('#envia_trial').hide();
          $('#envia_trial_verificacao').show();


          $.post('http://aceite.lahar.com.br/verificar-email', {email: email}, function(retorno){
            if(retorno == 'erro'){
              var element = document.getElementById("form_campos_principal");
              element.setAttribute("data-ix", "");
              element.setAttribute("style", "");
              $('#envia_trial').show();
              $('#envia_trial_verificacao').hide();

              document.getElementById("mensagem_form_invalido").style.display = "none";
              document.getElementById("mensagem_form").style.display = "inherit";
            }else{
              window.location.href = 'http://www.lahar.com.br/novo/criar-conta?email='+email;
            }
          });
        }
      }
    });

    $('#envia_trial_baixo').click(function(event) {

      var email = document.getElementById("mail_baixo").value;

      if(email){

        if(!validateEmail(email)){
          document.getElementById("mensagem_form_baixo").style.display = "none";
          document.getElementById("mensagem_form_baixo_invalido").style.display = "inherit";
        }else{

          $('#envia_trial_baixo').hide();
          $('#envia_trial_baixo_feedback').show();


          $.post('http://aceite.lahar.com.br/verificar-email', {email: email}, function(retorno){
            if(retorno == 'erro'){
              var element = document.getElementById("trial-email-form-baixo");
              element.setAttribute("data-ix", "");
              element.setAttribute("style", "");
              $('#envia_trial_baixo').show();
              $('#envia_trial_baixo_feedback').hide();

              document.getElementById("mensagem_form_baixo_invalido").style.display = "none";
              document.getElementById("mensagem_form_baixo").style.display = "inherit";
            }else{
              window.location.href = 'http://www.lahar.com.br/novo/criar-conta?email='+email;
            }
          });
        }
      }
    });


    $('#cria_conta_trial').click(function(event) {
      var email     = document.getElementById("mail").value;
      var nome      = document.getElementById("nome").value;
      var telefone  = document.getElementById("tel").value;
      var empresa   = document.getElementById("empresa").value;
      var site      = document.getElementById("site").value;
      var objetivo  = document.getElementById("tags").value;

      if(email && nome && telefone && empresa && site && objetivo){

        $('#cria_conta_trial').hide();
        $('#cria_conta_trial_aguarde').show();

        document.getElementById("campos_form").style.display = "none";
        document.getElementById("motivos").style.display = "none";

        $.post('http://aceite.lahar.com.br/cadastro', {email: email, nome: nome, telefone: telefone, nome_empresa: empresa, site_empresa: site, objetivo: objetivo}, function(retorno){

          if(retorno == 'erro_criar_empresa'){
            document.getElementById("mensagem_erro").style.display = "block";
          }else if(retorno == 'erro_usuario_existe'){
            document.getElementById("mensagem_erro_usuario").style.display = "block";
          }else{
            document.getElementById("mensagem_sucesso").style.display = "block";
          }

        });
      }
    });

    $('#envia_demonstracao').click(function(event) {
      var nome     = document.getElementById("nome_demo").value;
      var email    = document.getElementById("email_demo").value;
      var telefone = document.getElementById("contato_demo").value;
      var site     = document.getElementById("site_demo").value;

      if(nome && email && site){
        window.location.href = 'http://paginas.lahar.com.br/demonstracao-lahar?nome='+nome+'&email='+email;
      }
    });


	});

    $(document).ready(function() {
      var integrou_principal = false;
      $("#trial-email-form").submit(function() {
        if (!integrou_principal) {
          efetua_integracao('principal');
          integrou_principal=true;
          return false;
        }
      })
    });

    $(document).ready(function() {
      var integrou_demonstracao = false;
      $("#demonstracao-email-form").submit(function() {
        if (!integrou_demonstracao) {
          efetua_integracao('demonstracao');
          integrou_demonstracao=true;
          return false;
        }
      })
    });

    $(document).ready(function() {
      var integrou_contato = false;
      $("#contato-email-form").submit(function() {
        if (!integrou_contato) {
          efetua_integracao('contato');
          integrou_contato=true;
          document.getElementById("contato-email-form").style.display = "none";
          document.getElementById("mensagem_contato").style.display = "block";
          return false;
        }
      })
    });

    $(document).ready(function() {
      var integrou_consultoria = false;
      $("#consultoria-email-form").submit(function() {
        if (!integrou_consultoria) {
          efetua_integracao('consultoria');
          integrou_consultoria=true;
          document.getElementById("consultoria-email-form").style.display = "none";
          document.getElementById("titulo_chamada").style.display = "none";
          document.getElementById("mensagem_consultoria").style.display = "block";
          return false;
        }
      })
    });

    function efetua_integracao(localizacao) {
        var campos = { // Colocar aqui campos fixos ou enviar estas infos como hidden no formulário
          token_api_lahar: 'lahardigNQan08vrIQgPgZVS8APuwDnBcZe0SeP0JIPIYWWsjB50RWKs7Md3Ieif',
          nome_formulario: "solicita-trial-site", // Para integração 'conversions'
          url_origem: $(location).attr('href') // Alterar apenas se necessário
        };
        var elementos = [];

        if(localizacao == 'principal'){
          $('.api-lahar').each(function(index,element){
            elementos.push(element);
          });
        } else if(localizacao == 'secundario') {
            $('.api-lahar-baixo').each(function(index,element){
              elementos.push(element);
            });
        }else if(localizacao == 'demonstracao'){
            var campos = { // Colocar aqui campos fixos ou enviar estas infos como hidden no formulário
              token_api_lahar: 'lahardigNQan08vrIQgPgZVS8APuwDnBcZe0SeP0JIPIYWWsjB50RWKs7Md3Ieif',
              nome_formulario: "primeiropasso-demonstracao-site", // Para integração 'conversions'
              url_origem: $(location).attr('href') // Alterar apenas se necessário
            };

            $('.api-lahar-demo').each(function(index,element){
              elementos.push(element);
            });
        }else if(localizacao == 'contato'){
            var campos = { // Colocar aqui campos fixos ou enviar estas infos como hidden no formulário
              token_api_lahar: 'lahardigNQan08vrIQgPgZVS8APuwDnBcZe0SeP0JIPIYWWsjB50RWKs7Md3Ieif',
              nome_formulario: "contato-site", // Para integração 'conversions'
              url_origem: $(location).attr('href') // Alterar apenas se necessário
            };

            $('.api-lahar-contato').each(function(index,element){
              elementos.push(element);
            });
        }else{
            var campos = { // Colocar aqui campos fixos ou enviar estas infos como hidden no formulário
              token_api_lahar: 'lahardigNQan08vrIQgPgZVS8APuwDnBcZe0SeP0JIPIYWWsjB50RWKs7Md3Ieif',
              nome_formulario: "consultoria-site", // Para integração 'conversions'
              url_origem: $(location).attr('href') // Alterar apenas se necessário
            };

            $('.api-lahar-consult').each(function(index,element){
              elementos.push(element);
            });
        }

        //integracao_js(campos, null, elementos, 'conversions'); // TIPO_DA_INTEGRACAO pode ser 'conversions' e 'leads'
    }

    function normalizaLink(link,campo)
    {
      if(link.indexOf('http://')==-1&&link!="")
      {
        campo.value='http://'+link;
      }
      return true;
    }

    function validateEmail(email) {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }

  </script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  <?php if(empty($rodapeMini)){ ?>
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3&appId=134083443453141";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <?php } ?>

<!--
  <script> // Webflow chrome fixed background IX workaround
    if (Webflow.env.chrome) tram.config.fallback = true;
  </script> -->