
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

  </head>

  <body>

    <!-- Navbar goes here -->

    <!-- Page Layout here -->

    <div class="row">

      <div class="col s12 m4 l3 grey darken-2 z-depth-4">
            <div class="section">
              <h5>Section 1</h5>
              <p>Stuff</p>
            </div>
            <div class="divider"></div>
            <div class="section">
              <h5>Section 2</h5>
              <p>Stuff</p>
            </div>
            <div class="divider"></div>
            <div class="section">
              <h5>Section 3</h5>
              <p>Stuff</p>
            </div>
      </div>

      <div class="col s12 m8 l9 teal accent-4">
        <h1>Olá mundo</h1>
        <div class="divider"></div>
        <h5>Loren impulsem</h5>

        <table class="striped centered teal accent-5">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Item Name</th>
              <th data-field="price">Item Price</th>
          </tr>
        </thead>

        <tbody class="teal accent-3">
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/materialize.min.js'?>"></script>
  </body>
</html>
