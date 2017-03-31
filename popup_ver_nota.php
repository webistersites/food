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

  .popup_ver_nota {
    margin: 120px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 50%;
    position: relative;
    transition: all 5s ease-in-out;
  }

  .popup_ver_nota h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
  }
  .popup_ver_nota .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .popup_ver_nota .close:hover {
    color: #000;
  }
  .popup_ver_nota .content {
    max-height: 60%;
    overflow: auto;
  }

  @media screen and (max-width: 700px){
    .box{
      width: 70%;
    }
    .popup_ver_nota{
      width: 70%;
    }
  }
</style>

<?php
   $query_nf = "SELECT 
	b.code,
    b.name,
    b.cost,
    a.quantidade,
    a.quantidade*b.cost as Total
FROM
	pde_fato_vendas_produtos a
INNER JOIN
	tec_products b
ON
	a.id_produto = b.id
WHERE
	a.num_nota_fiscal = '".$ver_hist['num_nota_fiscal']."'
    ;";
   
   $exec_query = mysql_query($query_nf);
   
  echo '<div id="ver_nota?nf='.$ver_hist['num_nota_fiscal'].'" class="overlay">
  	<div class="popup_ver_nota">
            <h2 class="ui center aligned header">'.$ver_hist['num_nota_fiscal'].'</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">';
  echo '
                <table class="">
                    <thead>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Qtd.</th>
                        <th>Total</th>
                    </thead>
                ';
                while($ver_nf = mysql_fetch_array($exec_query))
                {
                    echo '<tr>'
                        . '<td>'
                            . $ver_nf['name']
                        . '</td>'
                        . '<td>'
                            . $ver_nf['cost']
                        . '</td>'
                        . '<td>'
                            . $ver_nf['quantidade']
                        . '</td>'
                        . '<td>'
                            . $ver_nf['Total']
                        . '</td>'
                        . '</tr>'
                        ;
                }
  
  echo '</table>'
        . '</div>'
       .'</div>'
     .'</div>';
 ?>

