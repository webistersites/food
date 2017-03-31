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

  .popup_motoboy {
    margin: 120px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 25%;
    position: relative;
    transition: all 5s ease-in-out;
  }

  .popup_motoboy h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
  }
  .popup_motoboy .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .popup_motoboy .close:hover {
    color: #000;
  }
  .popup_motoboy .content {
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
    
  $buscaBoys=mysql_query("select id,nome from usuarios where id_cargo = 5"); // Busca os Motoboys cadastrados como Usuários;
  echo '<div id="motoboys" class="overlay">
  	<div class="popup_motoboy">
            <h2 class="ui center aligned header">Motoboys</h2>
            <a class="close" href="#">&times;</a>
            <div class="content"><br>
                <form action="selecionar_motoboy.php" method="post">';
                while ($boy = mysql_fetch_array($buscaBoys))
                    {
                        echo '<div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="nome_boy" value="'.$boy['id'].'" id="'.$boy['id'].'">';
                        echo '<label for="'.$boy['id'].'">'.$boy['nome'].'</label>'
                                . '</div>'
                            . '</div>'
                                . '';                    
                    }
            echo        '<br>'
                    . '<input type="submit" value"Selecionar" class="ui right floated blue button">'
                    . '</form>'
                . '</div>'
       .'</div>'
     .'</div>';
 ?>

