  <?php 
    include 'conectaMobile.php';
    include "../atualiza_pagina.php";
   ?>
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="bower_components/semantic/dist/components/grid.min.css"/>
      <link type="text/css" rel="stylesheet" href="bower_components/semantic/dist/components/container.min.css"/>
      <link type="text/css" rel="stylesheet" href="bower_components/semantic/dist/components/image.min.css"/>
      <link type="text/css" rel="stylesheet" href="bower_components/semantic/dist/components/card.min.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <style type="text/css">
      #subtitulo {
        color: #222;
        text-align: center;
        margin-left: 6px;
        font-size: 9pt;
      }
      </style>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="bower_components/materialize/dist/js/materialize.min.js"></script>
      <script type="text/javascript" src="ajaxMobile.js"></script>

        <nav>
          <div class="nav-wrapper black">
            <a href="#!" class="brand-logo"><i class="material-icons">view_module</i>Mesas</a>
          </div>
        </nav>
      <div class="container">
        <br>
            <div class="ui four columns grid">
              <?php 
                $q_mesas = mysql_query("SELECT * FROM tec_mesas where id < 17");
                while ($mesas = mysql_fetch_array($q_mesas)) 
                {
                  echo '<div class="column">
                          <a href="mob_mesa'.$mesas['id'].'.php">
                          <img class="ui tiny circular image" src="../images/mesa-'.$mesas['estado'].'.png">
                          <span id="subtitulo">MESA '.$mesas['id'].'</span>
                          </a>
                        </div>';
                }

               ?>
<!--               <div class="column"><img class="ui tiny circular image" src="../images/mesa-free.png"><span id="subtitulo">MESA 1</span></div>
              <div class="column"></div>
              <div class="column"></div>
              <div class="column"></div>
              <div class="column"></div>
              <div class="column"></div>
              <div class="column"></div>
              <div class="column"></div> -->
            </div>

        <br>
        
      </div>
        

  <script type="text/javascript">  // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //$('.collapsible').collapsible();

 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '30%', // Ending top style attribute
      // ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
      //   console.log(modal, trigger);
      // }
      // complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );
  });

   $('.carousel.carousel-slider').carousel({fullWidth: true});
        
       
  </script>
  </body>
  </html>