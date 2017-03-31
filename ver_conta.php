<?php
    include "cabecalho.php";
    $id_mesa = $_GET['mesa'];
?>
<style type="text/css">
    body {
      background-color: #e3e3e3;
    }
    .sumir {
        display: none;
    }
</style>

<div class="ui container">
    <div class="ui secondary pointing green menu">
        <?php echo '<a class="item" href="mesa'.$id_mesa.'.php" >'; ?>
            Mesa <?php echo $id_mesa; ?>
        </a>
        <?php echo '<a class="item" href="ver_conta.php?mesa='.$id_mesa.'" onclick="location.reload()">'; ?>
            Ver conta
        </a>
        <a class="item" href="#venda" >
            Fechar mesa
        </a>
    </div>
    <div class="ui segment">
        <h2 class="ui center aligned dividing header">
            <i class="food icon"></i> Conta em Aberto | Mesa  <?php echo $id_mesa; ?>
        </h2>
        <br>
    <?php 
        $conta_mesa = mysql_query("SELECT
         a.id,
         b.code,
         b.name as Produto,
         a.quantidade,
         b.cost as Preço,
         a.quantidade*b.cost as Total,
         a.obs
         ,b.category_id
       FROM
	        pedido_aux_mesa$id_mesa a
        INNER JOIN
	         tec_products b
         ON
            a.id_produto = b.id
          ORDER BY a.id");
    
        echo "<table class='ui small compact table'>"
              ."<thead>"                
                ."<th class='center aligned'>Cod</th>"
                ."<th>Produto</th>"
                ."<th>Preço</th>"
                ."<th class='center aligned'>Qtd</th>"
                ."<th>Total</th>"
                ."<th class='right aligned'>Ação</th>"
              ."</thead>"
      ;
      if (!isset($conta_mesa)) {
          echo '</table>';
          
      }
      else {
          while ($pedido=mysql_fetch_array($conta_mesa)) {
            echo "<tr>"
            ."<td class='collapsing center aligned'>".$pedido['code']."</td>"    
            ."<td class='collapsing'>".$pedido['Produto']."</td>"
              ."<td class='collapsing'>R$ ".$pedido['Preço']."</td>"
              . "<td class='center aligned'>".$pedido['quantidade']."x</td>"
              ."<td class='collapsing'>R$ ".$pedido['Total']."</td>"
              ."<td class='right aligned'>"."<a href='del_verconta.php?mesa=".$id_mesa."&id_del=".$pedido['id']."'><i class='trash icon'></i></a>"."</td>"
            ."</tr>"
        ;
        $subtotal+=$pedido['Total'];
      }
      echo '</table>' ;       
      }
    ?>        
    </div>
</div>

<script>
var pasta = window.location.pathname;
var ancora = window.location.hash;
//if (ancora === "#salao" || ancora === "") 
//    {
//        $('.salao').removeClass('sumir');
//        $('#salao').addClass('active');
//    } 
//    else if (ancora === "#cadastrar") 
//    {
//        $('.cadastrar').removeClass('sumir');
//        $('#salao').addClass('active');
//    }
//</script>

<?php
	include "rodape.php";
?>
