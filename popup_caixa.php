<?php #include 'cabecalho.php'; ?>

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

  .popup {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 45%;
    position: relative;
    transition: all 5s ease-in-out;
  }

  .popup h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
  }
  .popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .popup .close:hover {
    color: #DB2828;
  }
  .popup .content {
    max-height: 60%;
    overflow: auto;
  }

  @media screen and (max-width: 700px){
    .box{
      width: 70%;
    }
    .popup{
      width: 70%;
    }
  }
</style>

<?php
  $query = mysql_query('select * from tec_products');
  while ($produtos=mysql_fetch_array($query)) {
    echo '<div id="popup'.$produtos['id'].'" class="overlay">
    	<div class="popup">
    		<h2 class="ui center aligned header">'.$produtos['name'].'</h2>
        <br>
    		<a class="close" href="#">&times;</a>
    		<div class="content">
          <div class="ui three column doubling stackable grid container">
            <div class="column">
              <p><img class="ui small bordered rounded image" src="pdv/uploads/'.$produtos['image'].'"></p>
            </div>
            <div class="column">
              <p>Preço</p>
              <p>Quantidade</p>
              <p>Observação</p>
            </div>
            <div class="column">
              <p>R$ '.$produtos['cost'].'</p>
              <form action="balcaoDAO.php" method="post">
                <input type="hidden" name="id" value="'.$produtos['id'].'">
                <p><div class="ui mini input"><input type="text" id="q" name="quantidade" onKeyPress="return submitenter(this,event)"></div></p>
                <p><div class="ui mini input"><input type="text" name="obs"></div></p>
            </div>
          </div>
          <br><br>
          <a href="#" class="ui basic button">Cancelar</a>
          <input type="submit" class="ui right floated blue button" value="Confirmar">
          </form>
    		</div>
    	</div>
    </div>';
  }

?>
