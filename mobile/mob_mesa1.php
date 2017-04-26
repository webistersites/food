  <?php 
    include 'conectaMobile.php';
    $mesa = 1;
    echo '<input type="hidden" value="'.$mesa.'" id="mesa">';
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
      <link type="text/css" rel="stylesheet" href="bower_components/semantic/dist/components/dropdown.min.css"/>
      <link type="text/css" rel="stylesheet" href="bower_components/semantic/dist/components/form.min.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <style type="text/css">
      #gambi {
        border-radius: 120px;
        color: #FFF;        
      }

      #produtos {
        color: #222;
        font-size: 11pt;
        padding: 5px;
        font-weight: bold;
        
      }

      .carousel.carousel-slider {
          height: 990px;
      }
      .carousel .indicators .indicator-item {
          margin: 0 5px;
      }

      </style>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="bower_components/materialize/dist/js/materialize.min.js"></script>
      <script type="text/javascript" src="bower_components/semantic/dist/components/dropdown.min.js"></script>
      <script type="text/javascript" src="ajaxMobile.js"></script>


        <nav>
    <div class="nav-wrapper black">

      <a href="#!" class="brand-logo"><i class="material-icons">stay_primary_portrait</i>Mesa <?php echo $mesa; ?></a>
      <ul class="right">
        <?php 
          $q_itens  = mysql_query("select sum(quantidade) as pedidos from pedido_mesa$mesa"); 
          $itens    = mysql_result($q_itens, 0);
        ?>
        <li><span class="badge" id="gambi"><div id="result"><?php echo $itens; ?></div></span><a href="#modal1" ><i class="material-icons">shopping_cart</i></a></li>
      </ul>
      <ul id="slide-out" class="side-nav">
    <!-- <li><div class="userView">
      <div class="background">
        <img src="https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/12037935_887733664641396_6453101076101052912_n.jpg?oh=3c314b7a6b7598c48828fce816f98fb1&oe=592ADCC1">
      </div>
      <a href="#!user"><img class="circle" src="https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/14695423_1150759785005448_6997443789428337408_n.jpg?oh=bc6ccb41ad96ae08d7b0f9f18f36ef3d&oe=592ABED3"></a>
      <a href="#!name"><span class="white-text name">Junior N.</span></a>
      <a href="#!email"><span class="white-text email">teste@teste.com</span></a>
    </div></li> -->
    <li><a href="index.php" class="waves-effect waves-light btn">Mesas</a></li>
    <!-- <li><a href="#!">Second Link</a></li> -->
    <li><div class="divider"></div></li>
    <li><a class="subheader">Categorias</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#1">Pizzas</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#2">Esfihas</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#3">Salgados</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#4">Beirutes</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#5">Porcoes</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#6">Bebidas</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#7">Pasteis</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#8">Lanches</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#9">Doces</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#10">Sorvetes</a></li>
    <li><a class="waves-effect waves-light btn grey" href="#11">Balas</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>

  </nav>

  <?php 
    $q_produtos   = mysql_query("SELECT
                                    a.id
                                    ,b.name
                                    ,a.quantidade
                                    ,b.cost
                                  FROM
                                    pedido_mesa".$mesa." a
                                  INNER JOIN
                                    tec_products b
                                  ON
                                    a.id_produto = b.id");
   ?>
  <!-- Modal Structure -->
  
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Pedido</h4>
      <p>
        <div id="prods">
        <table class="centered">
            <thead>
              <tr>
                  <th data-field="id">Produto</th>
                  <th data-field="name">Qtd</th>
                  <th data-field="price">Preco</th>
                  <th data-field="action">#</th>
              </tr>
            </thead>

            <tbody>
              
              <?php 
                while ($produto = mysql_fetch_array($q_produtos)) 
                {
                  echo '<tr>
                          <td>'     .$produto['name'].        '</td>
                          <td>'     .$produto['quantidade'].  '</td>
                          <td>R$ '  .$produto['cost'].        '</td>
                          <td><a href="deletaItem.php?id='.$produto['id'].'&mesa='.$mesa.'"><i class="mini material-icons">delete</i></a></td>
                        </tr> ';
                }
               ?>
              
            </tbody>
          </table>
          </div>
      </p>
    </div>

    <div class="modal-footer">
      <?php //echo '<a href="finalizaPedido.php?mesa='.$mesa.'"" class="modal-action modal-close waves-effect waves-green btn-flat">Finalizar</a>'; ?>
    </div>
    
  </div>
  
      <!-- <div class="container"> -->
        <br>
      <div class="carousel carousel-slider center" data-indicators="false">
    <div class="carousel-fixed-item center">
      <!-- <a class="btn waves-effect white grey-text darken-text-2">button</a> -->
    </div>
    <?php 
      $q_categorias   = mysql_query("select * from categorias");

      while ($cat = mysql_fetch_array($q_categorias)) 
      {
        $q_produtos   = mysql_query("SELECT * FROM tec_products WHERE category_id = ".$cat['id']);
        echo '<div class="carousel-item black-text" id="'.$cat['id'].'">
              <h2>'.$cat['categoria'].'</h2>
              <p class="white-text">
                  <div class="ui four cards grid container">
                  ';
                  while ($products = mysql_fetch_array($q_produtos))
                  {

                      echo '<div class="card"><a href="javascript:void(0);" onclick="insereMobile('.$products['id'].')" id="produtos">'.$products['name'].'</a></div>';

                  }
                  echo '</div>
              </p>
            </div>';
      }
     ?>
     <div class="carousel-item black-text" id="98">
      <h2>Sabores</h2>
      <div class="ui form">
        <div class="field">
          <form method="post" action="recebeSabores.php">
          <select name="sabor1">
            <option value="">Sabor 1</option>
            <?php 
              $q_busca  = mysql_query("SELECT id,name FROM tec_products WHERE category_id = 98");
              while ($sabores = mysql_fetch_array($q_busca)) 
              {
                echo '<option value="'.$sabores['name'].'">'.$sabores['name'].'</option>';
              }
             ?>
          </select>
          <br><br>
          <select name="sabor2">
            <option value="">Sabor 2</option>
            <?php 
              $q_busca  = mysql_query("SELECT id,name FROM tec_products WHERE category_id = 98");
              while ($sabores = mysql_fetch_array($q_busca)) 
              {
                echo '<option value="'.$sabores['name'].'">'.$sabores['name'].'</option>';
              }
             ?>
          </select>
          <?php echo '<input type="hidden" name="mesa" value="'.$mesa.'">'; ?>
          <br>
            <button class="btn waves-effect waves-light" type="submit" name="action">Selecionar
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
      </p>
     </div>
  </div>
    </div>        

        <br>
        
      </div>
        <div class="fixed-action-btn vertical click-to-toggle">
        <a class="btn-floating btn-large black">
          <i class="material-icons">menu</i>
        </a>
    <ul>
      <?php echo '<li><a href="cancelarTudo.php?mesa='.$mesa.'" class="btn-floating red"><i class="material-icons">delete</i></a></li>'; ?>
      <!-- <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li> -->
      <?php echo '<li><a href="mob_imprimirCozinhaMesas.php?mesa='.$mesa.'" class="btn-floating blue"><i class="material-icons">print</i></a></li>'; ?>
    </ul>
  <!-- </div> -->

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