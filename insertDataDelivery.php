
<?php
include 'conecta.php';
echo "<script>";
include 'ajax2.js';
echo '$(document).ready(function(){
         $("#finalizar").click(function(){
          $("#refresh").load("forma_pagamento.php");
         });
        });';
echo "</script>";
$pega_cliente = mysql_query("select * from pedido_delivery");
$ver_consulta = mysql_fetch_array($pega_cliente);
//$nome     = $_POST['nome'];
//$email    = $_POST['email'];
//$telefone = $_POST['telefone'];
$pesquisa    = $_POST['course'];

$consulta = mysql_query("SELECT id FROM tec_products WHERE CONCAT(CODE, ' - ',NAME) = '$pesquisa'");

if (mysql_num_rows($consulta) == 0) 
{
    $return = "
                <div class='ui negative message'>
                    <!--<i class='close icon'></i>-->
                <div class='header'>
                Produto inválido!
                </div>
                  <p>Verifique o código ou nome do produto.</p>
                </div>";
                $busca = mysql_query("
                                SELECT
                                a.id,
                                b.code,
                                b.name as Produto,
                                a.quantidade,
                                b.cost as Preço,
                                a.quantidade*b.cost as Total,
                                a.obs,
                                b.category_id
                                FROM
                                pedido_delivery a
                                INNER JOIN
                                tec_products b
                                ON
                                a.id_produto = b.id
                                ORDER BY a.id");
        $return .= ""
        . "<table class='ui small compact table'>"
            . "<thead>"
                . "<th class='center aligned'>Cód</th>"
                . "<th>Produto</th>"
                . "<th>Preço</th>"
                . "<th class='center aligned'>Qtd</th>"
                . "<th>Total</th>"
                . "<th class='right aligned'>Ação</th>"
            . "</thead>";
        while ($data = mysql_fetch_array($busca)) 
            {
                $return .= "<tr>";
        $return .= "<td>" . $data['code']       .  "</td>";
        $return .= "<td>" . $data['Produto']    .  "</td>";
        $return .= "<td>R$ " . $data['Preço']      .  "</td>";
                $return .= "<td class='center aligned'><form action='processa_del.php' method='post'><input type='hidden' name='seu_nome2' value='".$data['id']."'><input type='text' name='seu_nome' placeholder='".$data['quantidade']."' size='2'>x</td>";
                $return .= "<td>R$ " . $data['Total']      .  "</td>";
                $return .= "<td class='right aligned'>"."<a href='javascript:void(0);' onclick='deletaDelivery(".$data['id'].")'><i class='trash icon'></i></a>";
        $return .= "</tr>";
                $subtotal+=$data['Total'];
            }
                $return .= "</table>";
                $return .= "<table class='ui table'>";
                $return .= "<tr>";
                $return .= "<td colspan='1'><a href='#motoboys' class='ui basic fluid button'>Motoboy</a></td>";
                $return .= "<td colspan='1'><a href='suspender_venda.php?tipo=".$ver_consulta['id_cliente']."&total=".$subtotal."' class='ui basic fluid button'>Aguardar</a></td>";
                $return .= "<td colspan='3' rowspan='2' width='80%'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>";
                $return .= "</tr>";
                $return .= "<tr>";
                $return .= "<td colspan='2'><a href='balcaoDAO_delivery.php?truncar=yes' class='ui red fluid button'>Cancelar</a></td>";
                // $return .= "<td colspan='1'><a href='#venda' id='botao' class='ui green fluid button'>Finalizar</a></td>";
                // $return .= '<td colspan="1"><a href="javascript:void(0);" id="finalizar" class="ui green fluid button" >Finalizar</a></td>';
                $return .= "</tr>";
                $return .= "</table>";
                $return .= "</p>";
                echo $return;
            }
            else {

$id = mysql_result($consulta,0);

$verifica_duplicidade = mysql_query("SELECT id_produto FROM pedido_delivery WHERE id_produto = $id");
    
    if (mysql_num_rows($verifica_duplicidade) <= 0 ) 
    {
        $ver_id_cliente = mysql_query("SELECT id_cliente FROM pedido_delivery");
        mysql_query("INSERT INTO pedido_delivery SELECT '',$id,1,'',".mysql_result($ver_id_cliente,0).",0");
        $busca = mysql_query("
                                SELECT
                                a.id,
                                b.code,
                                b.name as Produto,
                                a.quantidade,
                                b.cost as Preço,
                                a.quantidade*b.cost as Total,
                                a.obs,
                                b.category_id
                                FROM
                                pedido_delivery a
                                INNER JOIN
                                tec_products b
                                ON
                                a.id_produto = b.id
                                ORDER BY a.id");
        $return = ""
        . "<table class='ui small compact table'>"
            . "<thead>"
                . "<th class='center aligned'>Cód</th>"
                . "<th>Produto</th>"
                . "<th>Preço</th>"
                . "<th class='center aligned'>Qtd</th>"
                . "<th>Total</th>"
                . "<th class='right aligned'>Ação</th>"
            . "</thead>";
        while ($data = mysql_fetch_array($busca)) 
            {
                $return .= "<tr>";
		$return .= "<td>" . $data['code']       .  "</td>";
		$return .= "<td>" . $data['Produto']    .  "</td>";
		$return .= "<td>R$ " . $data['Preço']      .  "</td>";
                $return .= "<td class='center aligned'><form action='processa_del.php' method='post'><input type='hidden' name='seu_nome2' value='".$data['id']."'><input type='text' name='seu_nome' placeholder='".$data['quantidade']."' size='2'>x</td>";
                $return .= "<td>R$ " . $data['Total']      .  "</td>";
                $return .= "<td class='right aligned'>"."<a href='javascript:void(0);' onclick='deletaDelivery(".$data['id'].")'><i class='trash icon'></i></a>";
		$return .= "</tr>";
                $subtotal+=$data['Total'];
            }
                $return .= "</table>";
                $return .= "<table class='ui table'>";
                $return .= "<tr>";
                $return .= "<td colspan='1'><a href='#motoboys' class='ui basic fluid button'>Motoboy</a></td>";
                $return .= "<td colspan='1'><a href='suspender_venda.php?tipo=".$ver_consulta['id_cliente']."&total=".$subtotal."' class='ui basic fluid button'>Aguardar</a></td>";
                $return .= "<td colspan='3' rowspan='2' width='80%'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>";
                $return .= "</tr>";
                $return .= "<tr>";
                $return .= "<td colspan='2'><a href='balcaoDAO_delivery.php?truncar=yes' class='ui red fluid button'>Cancelar</a></td>";
                // $return .= "<td colspan='1'><a href='#venda' id='botao' class='ui green fluid button'>Finalizar</a></td>";
                // $return .= '<td colspan="1"><a href="javascript:void(0);" id="finalizar" class="ui green fluid button" >Finalizar</a></td>';
                $return .= "</tr>";
                $return .= "</table>";
                $return .= "</p>";
    }
    else
    {   $adicionar = mysql_query("SELECT quantidade+1 FROM pedido_delivery WHERE id_produto = $id");
        $sql = mysql_query("UPDATE pedido_delivery SET quantidade = ".mysql_result($adicionar,0)." where id_produto = $id");
        $busca = mysql_query("
                                SELECT
                                a.id,
                                b.code,
                                b.name as Produto,
                                a.quantidade,
                                b.cost as Preço,
                                a.quantidade*b.cost as Total,
                                a.obs,
                                b.category_id
                                FROM
                                pedido_delivery a
                                INNER JOIN
                                tec_products b
                                ON
                                a.id_produto = b.id
                                ORDER BY a.id");
        $return = ""
        . "<table class='ui small compact table'>"
            . "<thead>"
                . "<th class='center aligned'>Cód</th>"
                . "<th>Produto</th>"
                . "<th>Preço</th>"
                . "<th class='center aligned'>Qtd</th>"
                . "<th>Total</th>"
                . "<th class='right aligned'>Ação</th>"
            . "</thead>";
        while ($data = mysql_fetch_array($busca)) 
            {
                $return .= "<tr>";
		$return .= "<td>" . $data['code']       .  "</td>";
		$return .= "<td>" . $data['Produto']    .  "</td>";
		$return .= "<td>R$ " . $data['Preço']      .  "</td>";
                $return .= "<td class='center aligned'><form action='processa_del.php' method='post'><input type='hidden' name='seu_nome2' value='".$data['id']."'><input type='text' name='seu_nome' placeholder='".$data['quantidade']."' size='2'>x</td>";
                $return .= "<td>R$ " . $data['Total']      .  "</td>";
                $return .= "<td class='right aligned'>"."<a href='javascript:void(0);' onclick='deletaDelivery(".$data['id'].")'><i class='trash icon'></i></a>";
		$return .= "</tr>";
                $subtotal+=$data['Total'];
            }
                $return .= "</table>";
                $return .= "<table class='ui table'>";
                $return .= "<tr>";
                $return .= "<td colspan='1'><a href='#motoboys' class='ui basic fluid button'>Motoboy</a></td>";
                $return .= "<td colspan='1'><a href='suspender_venda.php?tipo=".$ver_consulta['id_cliente']."&total=".$subtotal."' class='ui basic fluid button'>Aguardar</a></td>";
                $return .= "<td colspan='3' rowspan='2' width='80%'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>";
                $return .= "</tr>";
                $return .= "<tr>";
                $return .= "<td colspan='2'><a href='balcaoDAO_delivery.php?truncar=yes' class='ui red fluid button'>Cancelar</a></td>";
                // $return .= "<td colspan='1'><a href='#venda' id='botao' class='ui green fluid button'>Finalizar</a></td>";
                // $return .= '<td colspan="1"><a href="javascript:void(0);" id="finalizar" class="ui green fluid button" >Finalizar</a></td>';
                $return .= "</tr>";
                $return .= "</table>";
                $return .= "</p>";
    }

echo $return;
}
?>
