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
        <nav id="navbar">
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
              <li><a href="sass.html">Sass</a></li>
              <li class="active"><a href="components.html">Components</a></li>
              <!-- Dropdown Trigger -->
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
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


     <div class="container">
        <div class="row">
            <div class="col s12" id="cabecalho">

        <!-- Formulário -->
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col l12 s6">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
              </div>
              <div class="input-field col l12 s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                <label for="disabled">Disabled</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <select class="selection">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <div class="range_field">
                        <input type="range" min="0" max="100" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input type="date" class="datepicker"/>
                </div>
            </div>

            <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Materialize Select</label>
            </div>


          </form>
        </div>

        </div>
       </div>
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
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.1.4.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/materialize.min.js'?>"></script>

    <script type="text/javascript">
        $( document ).ready(function(){
            $('.datepicker').pickadate();
            $('select').material_select();
            $('.dropdown-button').dropdown();
            $(".button-collapse").sideNav();
        });
    </script>

  </body>
</html>
