<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">

    <title>Dashboard with materialize</title>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>

    <!--Import meuEstilo.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/meuEstilo.css"  media="screen,projection"/>

    <!--Import materialize-icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>

  <body>

      <!-- Estrutura dropdown -->
      <ul class="dropdown-content" id="dropdown1">
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li class="divider"></li>
          <li><a href="#">Three</a></li>
      </ul>

     <!-- NAVBAR MENU -->
       <div class="navbar-fixed hide-on-large-only">
        <nav id="navbar" class="red lighten-2">
          <div class="nav-wrapper">

            <!-- Logomarca -->
            <a href="#!" class="brand-logo hide-on-large-only">Espaço Nitidez</a>

            <!-- botão de menu para dispositivos mobile-->
            <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="mdi-navigation-menu"></i></a>


            <!-- MENU TELAS GRANDES
            <ul class="right hide-on-med-and-down">
                <li class="pesquisa">
                    <form>
                      <div class="input-field pesquisa">
                          <input id="pesquisa-input" type="search" required>
                          <label for="search"><i class="mdi-action-search" id="icon-nav-search-1"></i></label>
                        <i class="mdi-navigation-close" id="icon-nav-search-2"></i>
                      </div>
                    </form>
                </li>
              <li><a href="home.html">Home</a></li>
              <li class="active"><a href="sass.html">Sass</a></li>
              <li><a href="components.html">Components</a></li>-->

              <!-- Dropdown Trigger
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
            </ul>-->

            <!-- menu para telas pequenas -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="components.html">Components</a></li>
                <li><a href="javascript.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>

          </div>
        </nav>
        </div>

       <div class="row red lighten-2 hide-on-med-and-down" id="topo">
           <div class="container">
               <div class="row">
                   <div class="col l12 white-text">
                       <h3 class="upercase">Ótica Espaço Nitidez</h3>
                   </div>
               </div>
           </div>
        </div>
        <div class="row red lighten-2 hide-on-med-and-down" id="backend">
        </div>

     <div class="container" id="container">
        <div class="row z-depth-1">
            <div class="col s12" id="cabecalho">

        <!-- Formulário -->
        <div class="row">
           <div class="col s12">
               <h4>Compra de óculos</h4>
           </div>
           <div class="col s12">
            <div class="card-panel teal">
              <span class="white-text">
                    Preencha o formulário para cadastrar um óculos no estoque da ótica.<br>
                    <b>OBS: o preço de compra será multiplicado pela quantidade e descontado no caixa.</b>
              </span>
            </div>
          </div>
          <form class="col s12" action="<?php echo base_url().'oculos/cadastro'?>" method="post">

            <div class="row">
              <div class="input-field col l4 m4 s12">
                <input id="referencia" name="referencia" type="text" class="validate">
                <label for="referencia">Referência</label>
              </div>


              <div class="input-field col l4 m4 s12">
                <input id="modelo" name="modelo" type="text" class="validate">
                <label for="modelo">Modelo</label>
              </div>

              <div class="input-field col l4 m4 s12">
                <input id="cor" name="cor" type="text" class="validate">
                <label for="cor">Cor</label>
              </div>

                <div class="col l12 m12 s12">
                    <label for="tipo">Tipo</label>
                    <select class="selection" name="tipo" id="tipo">
                        <option value="sol">Óculos de sol</option>
                        <option value="grau">Óculos de grau</option>
                    </select>
                </div>


              <div class="input-field col l4 m4 s12">
                <input id="precocompra" name="preco_compra" type="text" class="validate">
                <label for="precocompra">Preço de compra (R$)</label>
              </div>

              <div class="input-field col l4 m4 s12">
                <input id="precovenda" name="preco_venda" type="text" class="validate">
                <label for="precovenda">Preço de venda (R$)</label>
              </div>

                <div class="input-field col l4 m4 s12">
                  <input id="qtd" name="qtd" type="number" class="validate">
                    <label for="qtd">Qtd</label>
                </div>

                <div class="input-field col l12 m12 s12 center-align">
                  <textarea id="icon_prefix2" name="descricao" class="materialize-textarea"></textarea>
                  <label for="icon_prefix2">Descrição</label>
                </div>

                <div class="input-field col l12 m12 s12 right-align">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
                  </button>
                </div>

            </div>

          </form>
        </div>

        </div>
       </div>
  </div>


  <div class="fixed-action-btn hide-on-med-and-down" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="material-icons">more_horiz</i>
    </a>
    <ul>
      <li><a class="btn-floating red tooltipped" data-position="left" data-delay="25" data-tooltip="Configurações"><i class="material-icons">settings</i></a></li>
      <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="25" data-tooltip="Painel de controle"><i class="material-icons">store</i></a></li>
      <li><a class="btn-floating green tooltipped" data-position="left" data-delay="25" data-tooltip="Clientes" ><i class="material-icons">contact_phone</i></a></li>
      <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="25" data-tooltip="Nova venda" ><i class="material-icons">add_shopping_cart</i></a></li>
    </ul>
  </div>



    <footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">
        © 2015 Copyright Caio Alves
        <a class="grey-text text-lighten-4 right" href="#!">Mais informações</a>
        </div>
      </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.1.4.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/materialize.min.js'?>"></script>

    <script type="text/javascript">
        $(document ).ready(function(){
            $('.datepicker').pickadate();
            $('select').material_select();
            $('.dropdown-button').dropdown();
            $(".button-collapse").sideNav();
            $('.fixed-action-btn').openFAB();
        });
    </script>

  </body>
</html>
