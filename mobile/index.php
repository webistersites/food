  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
      #gambi {
        border-radius: 120px;
        color: #FFF;        
      }

      #produto figcaption {
        font-size: 60%;
      }

      #produto img {
        width: 50%;
        border: 1px #c2c2c2 solid;
        border-radius: 3px;
      }
      </style>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="bower_components/materialize/dist/js/materialize.min.js"></script>

        <nav>
    <div class="nav-wrapper green">

      <a href="#!" class="brand-logo"><i class="material-icons">cloud</i>Mobile</a>
      <ul class="right">
        <li><span class="badge" id="gambi">3</span><a href="#modal1"><i class="material-icons">shopping_cart</i></a></li>
      </ul>
      <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/12037935_887733664641396_6453101076101052912_n.jpg?oh=3c314b7a6b7598c48828fce816f98fb1&oe=592ADCC1">
      </div>
      <a href="#!user"><img class="circle" src="https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/14695423_1150759785005448_6997443789428337408_n.jpg?oh=bc6ccb41ad96ae08d7b0f9f18f36ef3d&oe=592ABED3"></a>
      <a href="#!name"><span class="white-text name">Junior N.</span></a>
      <a href="#!email"><span class="white-text email">teste@teste.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>

  </nav>

  <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Pedido</h4>
      <p>
        <table class="centered">
            <thead>
              <tr>
                  <th data-field="id">Name</th>
                  <th data-field="name">Item Name</th>
                  <th data-field="price">Item Price</th>
              </tr>
            </thead>

            <tbody>
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
      </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Finalizar</a>
    </div>
  </div>
  
      <div class="container">
      <h4>Produtos</h4>
            
        
  <ul id="tabs-swipe" class="tabs">
    <li class="tab col s3"><a href="#test-swipe-1" class="green-text">Esfihas</a></li>
    <li class="tab col s3"><a class="active" href="#test-swipe-2">Test 2</a></li>
    <li class="tab col s3"><a href="#test-swipe-3">Test 3</a></li>
    <li class="tab col s3"><a href="#test-swipe-3">Test 3</a></li>
    <li class="tab col s3"><a href="#test-swipe-3">Test 3</a></li>
    <li class="tab col s3"><a href="#test-swipe-3">Test 3</a></li>
  </ul>
  <div id="test-swipe-1" class="col s12">
    <br>
    <div class="row">
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              
          </div>
          <div class="row">
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              
          </div>
          <div class="row">
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              <div class="col s3"><span id="produto"><img src="../images/4queijos.jpg"><figcaption>ESFIHA DE 4 QUEIJOS</figcaption></span></div>
              
          </div>
        </div>
  <div id="test-swipe-2" class="col s12 red">Test 2</div>
  <div id="test-swipe-3" class="col s12 green">Test 3</div>
    </div>        

        <br>
        
      </div>
        <div class="fixed-action-btn vertical">
        <a class="btn-floating btn-large green">
          <i class="material-icons">menu</i>
        </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
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

  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
        
       
  </script>
  </body>
  </html>