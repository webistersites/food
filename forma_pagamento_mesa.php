<?php
    $mesa = $_GET['mesa'];
    include 'conecta.php';
    echo "<script>";
    echo '$(refresh).ready(function(){
             $("#dinheiro_mesa").click(function(){
              $("#refresh").load("forma_dinheiro_mesas.php?mesa='.$mesa.'");
             });
            });';
    echo "</script>";
    
    $ver_sub = mysql_query("SELECT
                            sum(a.quantidade*b.cost) as Subtotal
                            FROM
                            pedido_mesa".$mesa." a
                            INNER JOIN
                            tec_products b
                            ON
                            a.id_produto = b.id
                            ORDER BY a.id
                            ");

    $subtotal = mysql_result($ver_sub,0);

    $buscaFormas=mysql_query("SELECT * FROM forma_pagamento where id in (2,3)"); //busca todas as formas exceto Dinheiro, que é tratado separado
    echo '<div class="">
            <h2 class="ui center aligned header">Forma de Pagamento</h2>
            <div class="content"><br>
                <a href="javascript:void(0);" id="dinheiro_mesa" class="ui fluid basic button"><i class="money icon"></i>Dinheiro</a><br>';
                while ($forma = mysql_fetch_array($buscaFormas))
                    {
                        echo '<a href="vendaDAO_mesas.php?mesa='.$mesa.'&din='.$subtotal.'&forma='.$forma['id'].'" class="ui fluid basic button"><i class="'.$forma['icone'].'"></i>'.$forma['forma_pagamento'].'</a>';
                        echo '<br>';
                    } 
            echo '</div>'
     .'</div>';
 ?>