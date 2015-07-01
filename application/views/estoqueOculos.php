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

            <a href="#" class="btn-flat hide-on-large-only right btn-large transparent white-text btn-pesquisaUp" id="searchTop"><i class="material-icons">search</i></a>

            <!-- botão de menu para dispositivos mobile-->
            <a href="#" data-activates="mobile-demo" class="button-collapse left"><i class="mdi-navigation-menu"></i></a>


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
                       <h3>Ótica Espaço Nitidez</h3>
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

            <div class="col l10 m9 s12">
                <h4>Estoque de óculos</h4>
            </div>
            <div class="col l1 m2 s6 hide-on-med-and-down">
                <a class="btn-floating btn-large waves-effect waves-light green tooltipped" data-position="left" data-delay="50" data-tooltip="Cadastrar novo óculos"><i class="material-icons">add</i></a>
            </div>
            <div class="col l1 m1 s6 hide-on-med-and-down">
                <a class="btn-floating btn-large waves-effect waves-light grey btn-pesquisaUp"><i class="material-icons">search</i></a>
            </div>


            <div class="col s12">
                <div class="card-panel teal">
                  <span class="white-text">
                        Aqui você encontra a relação de óculos em estoque
                  </span>
                </div>
            </div>

            <form class="col l12">
               <div class="divider"></div>
                <div class="row">
                  <div class="input-field col l3 m4 s12">
                    <input id="referencia" type="text" class="validate">
                    <label for="referencia">Referência</label>
                  </div>


                  <div class="input-field col l3 m4 s12">
                    <input id="modelo" type="text" class="validate">
                    <label for="modelo">Modelo</label>
                  </div>

                  <div class="input-field col l3 m4 s12">
                    <input id="cor" type="text" class="validate">
                    <label for="cor">Cor</label>
                  </div>

                  <div class="input-field col l3 center-align">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Pesquisar</button>
                  </div>
                </div>
                <div class="divider"></div>
            </form>

        <table class="striped">
            <thead>
              <tr>
                  <th data-field="referencia">Ref</th>
                  <th data-field="modelo">Modelo</th>
                  <th data-field="tipo">Tipo</th>
                  <th data-field="Cor">Cor</th>
                  <th data-field="preco">Preço</th>
                  <th data-field="preco"></th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>#123432</td>
                <td>Masculino</td>
                <td>Sol</td>
                <td><i class="material-icons">stop</i></td>
                <td>R$ 120,00</td>
                <td class="center-align"><a href="#"><i class="material-icons" style="color:black">more_horiz</i></a></td>
                <td class="center-align"><a class="modal-trigger" href="#modalExclusao"><i class="material-icons" style="color:red" >clear</i></a></td>
              </tr>
              <tr>
                <td>#123432</td>
                <td>Unissex</td>
                <td>Grau</td>
                <td><i class="material-icons" style="color:red">stop</i></td>
                <td>R$ 140,00</td>
                <td class="center-align"><a href="#"><i class="material-icons" style="color:black">more_horiz</i></a></td>
                <td class="center-align"><a class="modal-trigger" href="#modalExclusao"><i class="material-icons" style="color:red" >clear</i></a></td>
              </tr>
              <tr>
                <td>#123432</td>
                <td>Feminino</td>
                <td>Sol</td>
                <td><i class="material-icons" style="color:gray">stop</i></td>
                <td>R$ 120,00</td>
                <td class="center-align"><a href="#"><i class="material-icons" style="color:black">more_horiz</i></a></td>
                <td class="center-align"><a class="modal-trigger" href="#modalExclusao"><i class="material-icons" style="color:red" >clear</i></a></td>
              </tr>
              <tr>
                <td>#123432</td>
                <td>Masculino</td>
                <td>Grau</td>
                <td><i class="material-icons">stop</i></td>
                <td>R$ 120,00</td>
                <td class="center-align"><a href="#"><i class="material-icons" style="color:black">more_horiz</i></a></td>
                <td class="center-align"><a class="modal-trigger" href="#modalExclusao"><i class="material-icons" style="color:red" >clear</i></a></td>
              </tr>
              <tr>
                <td>#123432</td>
                <td>Feminino</td>
                <td>Grau</td>
                <td><i class="material-icons" style="color:purple">stop</i></td>
                <td>R$ 120,00</td>
                <td class="center-align"><a href="#"><i class="material-icons" style="color:black">more_horiz</i></a></td>
                <td class="center-align"><a class="modal-trigger" href="#modalExclusao"><i class="material-icons" style="color:red" >clear</i></a></td>
              </tr>
            </tbody>
        </table>

        </div>

        </div>
       </div>
  </div>


  <div class="fixed-action-btn hide-on-med-and-down" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="material-icons">more_horiz</i>
    </a>
    <ul>
      <li><a class="btn-floating red tooltipped" data-position="left" data-delay="20" data-tooltip="Configurações"><i class="material-icons">settings</i></a></li>
      <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="20" data-tooltip="Painel de controle"><i class="material-icons">store</i></a></li>
      <li><a class="btn-floating green tooltipped" data-position="left" data-delay="20" data-tooltip="Clientes" ><i class="material-icons">contact_phone</i></a></li>
      <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="20" data-tooltip="Nova venda" ><i class="material-icons">add_shopping_cart</i></a></li>
    </ul>
  </div>


  <!-- Modal Structure -->
  <div id="modalExclusao" class="modal">
    <div class="modal-content">
      <h4>Deseja mesmo excluir esse item?</h4>
      <p>Obs: o produto será retirado do estoque sem nenhum reembolso no caixa.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Excluir</a>
    </div>
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
            $('.modal-trigger').leanModal();
            $( "form" ).slideUp();
            $('.datepicker').pickadate();
            $('select').material_select();
            $('.dropdown-button').dropdown();
            $(".button-collapse").sideNav();
            $('.fixed-action-btn').openFAB();
        });

        $("#searchTop").hover(function(){
            $(this).css('box-shadow', '0');
        }, function(){
            $(this).css('box-shadow', '0');
        });

        $(".btn-pesquisaUp").click(function(){
            $( "form" ).slideToggle();
        });

    </script>

  </body>
</html>
