<?php 
//    $caixa = 1;
//    include 'din_vendaDAO.php'; 
?>

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

  .popup_cancelar {
    margin: 120px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 5s ease-in-out;
  }

  .popup_cancelar h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
  }
  .popup_cancelar .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .popup_cancelar .close:hover {
    color: #000;
  }
  .popup_cancelar .content {
    max-height: 60%;
    overflow: auto;
  }

  @media screen and (max-width: 700px){
    .box{
      width: 70%;
    }
    .popup_cancelar{
      width: 70%;
    }
  }
</style>

<?php
   //$query = mysql_query("SELECT num_nota_fiscal FROM pde_fato_vendas");
   
  echo '<div id="confirmar?nf='.$ver_hist['num_nota_fiscal'].'" class="overlay">
  	<div class="popup_cancelar">
            <h2 class="ui center aligned header">Deseja cancelar essa nota?</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
            <br>
                <a class="ui tiny basic button" href="#">Não, voltar</a>
                <a class="ui tiny basic right floated red button" href="cancelar_nota.php?nota='.$ver_hist['num_nota_fiscal'].'">Sim, desejo cancelar</a>
            </div>'
       .'</div>'
     .'</div>';
 ?>

