  <head>
    <meta charset="utf-8" />

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
    Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />    

    <meta name="viewport" content="width=device-width; initial-scale=1.0" />

    <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    
    <link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
      
    <link rel="stylesheet" href="css/style.css" />
    
  
    <script src="js/jquery-1.10.2.min.js"></script> 
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
  </head>
  <div class="loader"></div>
    <script>
      $(window).load(function() {
        $(".loader").fadeOut("slow");
      });
    </script>

<style>
  h1 {
    text-align: center;
    font-family: Tahoma, Arial, sans-serif;
    color: #06D85F;
    margin: 80px 0;
  }

  .box {
    width: 80%;
    margin: 0 auto;
    background: rgba(255,255,255,0.2);
    padding: 35px;
    border: 2px solid #fff;
    border-radius: 20px/50px;
    background-clip: padding-box;
    text-align: center;
  }

  .overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
  }
  .overlay:target {
    visibility: visible;
    opacity: 1;
  }

  .popup_pizzas {
    margin: 120px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 85%;
    position: relative;
    transition: all 5s ease-in-out;
  }

  .popup_pizzas h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
  }
  .popup_pizzas .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .popup_pizzas .close:hover {
    color: #000;
  }
  .popup_pizzas .content {
    max-height: 60%;
    overflow: auto;
  }

  @media screen and (max-width: 700px){
    .box{
      width: 70%;
    }
    .popup_pizzas{
      width: 70%;
    }
  }
</style>


<div id="pizzas" class="overlay">
  <div class="popup_pizzas">
    <h4 class="ui center aligned header">Escolher 2 sabores</h4>
    <a class="close" href="#">&times;</a>
      <div class="content">

        <form id='students' method='post' name='students' action='recebe_sabores.php'>
        
        <table class="table table-bordered">
          <tr>
            <th><input class='check_all' type='checkbox' onclick="select_all()"/></th>
            <th>S. No</th>
            <th>Sabor Pizza</th>
            <th>Preço</th>
            <th>ID</th>
            <th>Código</th>
          </tr>
          <tr>
            <td><input type='checkbox' class='case'/></td>
            <td><span id='snum'>1.</span></td>
            <td><input type='text' id='countryname_1' name='countryname[]'/></td>
            <td><input type='text' id='country_no_1' name='country_no[]' /></td>
            <td><input type='text' id='phone_code_1' name='phone_code[]' /></td>
            <td><input type='text' id='country_code_1' name='country_code' /> </td>
          </tr>
        </table>
        
        <button type="button" class='btn btn-danger delete'>- Delete</button>
        <button type="button" class='btn btn-success addmore'>+ Add Sabor</button>
        <button type="submit" class='btn btn-primary'>Selecionar</button>
        </form>
          <a href="../pdv.php#Pizzas" class='btn btn-primary'>Cancelar</a>
      </div>
    </div>
  </div>
  <script src="js/auto.js"></script>