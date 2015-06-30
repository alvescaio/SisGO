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

      <!-- Estrutura dropdown
      <ul class="dropdown-content" id="dropdown1">
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li class="divider"></li>
          <li><a href="#">Three</a></li>
      </ul>
        -->

     <!-- NAVBAR MENU -->
        <nav id="navbar" class="red lighten-2">
          <div class="nav-wrapper">

            <!-- Logomarca -->
            <a href="#!" class="brand-logo hide-on-med-and-down" style="margin-left: 50px">Espaço Nitidez</a>
            <a href="#!" class="brand-logo hide-on-large-only">Espaço Nitidez</a>

            <!-- botão de menu para dispositivos mobile-->
            <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="mdi-navigation-menu"></i></a>

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
              <li><a href="components.html">Components</a></li>
              <!-- Dropdown Trigger
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a></li> -->
            </ul>

            <!-- menu para telas pequenas -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="components.html">Components</a></li>
                <li><a href="javascript.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>

          </div>
        </nav>

        <div class="row red lighten-2" id="backend">
        </div>

     <div class="container">
        <div class="row z-depth-1">
            <div class="col s12" id="cabecalho">

        <!-- Formulário -->
        <div class="row">
           <div class="col s12">
               <h3>Cadastro de óculos</h3>
           </div>
           <div class="col s12">
            <div class="card-panel teal">
              <span class="white-text">
                    Preencha o formulário para cadastrar um óculos no estoque da ótica.<br>
                    <b>OBS: o preço de compra será multiplicado pela quantidade e descontado no caixa.</b>
              </span>
            </div>
          </div>
          <form class="col s12">

            <div class="row">
              <div class="input-field col l4 m4 s12">
                <input id="referencia" type="text" class="validate">
                <label for="referencia">Referência</label>
              </div>


              <div class="input-field col l4 m4 s12">
                <input id="modelo" type="text" class="validate">
                <label for="modelo">Modelo</label>
              </div>

              <div class="input-field col l4 m4 s12">
                <input id="cor" type="text" class="validate">
                <label for="cor">Cor</label>
              </div>

                <div class="col l12 m12 s12">
                    <label for="tipo">Tipo</label>
                    <select class="selection" id="tipo">
                        <option value="sol">Óculos de sol</option>
                        <option value="grau">Óculos de grau</option>
                    </select>
                </div>


              <div class="input-field col l4 m4 s12">
                <input id="precocompra" type="text" class="validate">
                <label for="precocompra">Preço de compra</label>
              </div>

              <div class="input-field col l4 m4 s12">
                <input id="precovenda" type="text" class="validate">
                <label for="precovenda">Preço de venda</label>
              </div>

                <div class="input-field col l4 m4 s12">
                  <input id="qtd" type="text" class="validate">
                    <label for="qtd">Qtd</label>
                </div>

                <div class="input-field col l12 m12 s12 center-align">
                  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
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


  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="material-icons">view_list</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">settings</i></i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">store</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">contact_phone</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">add_shopping_cart</i></a></li>
    </ul>
  </div>



    <footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">
        © 2015 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/materialize.min.js'?>"></script>

    <script type="text/javascript">
        $( document ).ready(function(){
            $('.datepicker').pickadate();
            $('select').material_select();
            $('.dropdown-button').dropdown();
            $(".button-collapse").sideNav();
            $('.fixed-action-btn').openFAB();
        });
    </script>

  </body>
</html>
