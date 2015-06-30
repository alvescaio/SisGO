<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">

    <title>Espaço Nitidez</title>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>

  </head>

  <body>

    <div class="row">

      <div class="col l2 grey">
        <div class="row">
            <div class="col l12">
                <a href="#!" class="brand-logo hide-on-med-and-down">Espaço Nitidez</a>
            </div
        </div>
      </div>

      <div class="col l10">
        <!-- Teal page content  -->
      </div>

    </div>


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
