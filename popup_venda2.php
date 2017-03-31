<?php 
    $caixa = 2;
    include 'din_vendaDAO.php'; 
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

  .popup_venda {
    margin: 120px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 5s ease-in-out;
  }

  .popup_venda h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
  }
  .popup_venda .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .popup_venda .close:hover {
    color: #000;
  }
  .popup_venda .content {
    max-height: 60%;
    overflow: auto;
  }

  @media screen and (max-width: 700px){
    .box{
      width: 70%;
    }
    .popup_venda{
      width: 70%;
    }
  }
</style>

<?php
    
  $buscaFormas=mysql_query("SELECT * FROM forma_pagamento where id in (2,3)"); //busca todas as formas exceto Dinheiro, que é tratado separado
  echo '<div id="venda" class="overlay">
  	<div class="popup_venda">
            <h2 class="ui center aligned header">Forma de Pagamento</h2>
            <a class="close" href="#">&times;</a>
            <div class="content"><br>
                <a href="#popup_din" class="ui fluid basic button"><i class="money icon"></i>Dinheiro</a><br>';
                while ($forma = mysql_fetch_array($buscaFormas)){
                    echo '<a href="'.$forma['link'].'?caixa=2&din='.$subtotal.'&forma='.$forma['id'].'" class="ui fluid basic button"><i class="'.$forma['icone'].'"></i>'.$forma['forma_pagamento'].'</a>';
                    echo '<br>';
                }
            echo '</div>'
       .'</div>'
     .'</div>';
 ?>

