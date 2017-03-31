<?php

	   include 'conecta.php';

	    $mesa           = $_GET['mesa'];
        $sabor1         = $_GET['sb1'];
        $sabor2         = $_GET['sb2'];

        // $id_pizza       = $_POST['phone_code'];
        $ver_preco1          = mysql_query("SELECT cost FROM tec_products WHERE name = '".$sabor1."' AND category_id = 99");
        $ver_preco2          = mysql_query("SELECT cost FROM tec_products WHERE name = '".$sabor2."' AND category_id = 99");
        $preco1              = mysql_result($ver_preco1,0);
        $preco2              = mysql_result($ver_preco2,0);
       
        

                if ($preco1 >= $preco2) 
                    {
                        $concatenar = "1/2 " . $sabor1 . " 1/2 " . $sabor2 . $preco1;
                        $produto = "1/2 " . $sabor1 . " 1/2 " . $sabor2;
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT sao_francisco.tec_products SELECT '',0000,'$produto',100,0,'no_image.png',0,$preco1,0,10,'','','',5,1;");
                                mysql_query("INSERT INTO sao_francisco.pedido_mesa".$mesa." VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '".$produto.$preco1."'),1,'',0)");
                                mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO sao_francisco.pedido_mesa".$mesa." VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'),1,'',0)");
                            mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");
                        }
                        
                    }
                else
                    {
                        $concatenar = "1/2 " . $sabor1 . " 1/2 " . $sabor2 . $preco2;
                        $produto = "1/2 " . $sabor1 . " 1/2 " . $sabor2;
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT sao_francisco.tec_products SELECT '',0000,'$produto',100,0,'no_image.png',0,$preco2,0,10,'','','',5,1;");
                                mysql_query("INSERT INTO sao_francisco.pedido_mesa".$mesa." VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '".$produto.$preco2."'),1,'',0)");
                                mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO sao_francisco.pedido_mesa".$mesa." VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'),1,'',0)");
                            mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");
                        }
                    }            

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
                                pedido_mesa".$mesa." a
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
    while($data = mysql_fetch_array($busca)){
                $return .= "<tr>";
                  $return .= "<td>" . $data['code']       .  "</td>";
                  $return .= "<td>" . $data['Produto']    .  "</td>";
                  $return .= "<td>R$ " . $data['Preço']      .  "</td>";
                $return .= "<td class='center aligned'><form action='processa_mesa.php' method='post'><input type='hidden' value='".$id_mesa."' name='mesa'><input type='hidden' name='seu_nome2' value='".$data['id']."'><input type='text' name='seu_nome' placeholder='".$data['quantidade']."' size='2'>x</td>";
                $return .= "<td>R$ " . $data['Total']      .  "</td>";
                $return .= "<td class='right aligned'>"."<a href='javascript:void(0);' onclick='deletaMesas(".$data['id'].",".$mesa.")'><i class='trash icon'></i></a>";
        $return .= "</tr>";
                $subtotal+=$data['Total'];
        }
                $return .= "</table>";
                $return .= "<table class='ui table'>";
                $return .= "<tr>";
                $return .= "<td colspan='3'><a href='balcaoDAO_mesas.php?mesa=".$mesa."&truncar=yes' class='ui red fluid button'>Cancelar</a></td>";
                // $return .= "<td colspan='1'><a href='suspender_venda.php?tipo=".$ver_consulta['id_cliente']."&total=".$subtotal."' class='ui basic fluid button'>Aguardar</a></td>";
                $return .= "<td colspan='3' rowspan='2' width='60%'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>";
                $return .= "</tr>";
                $return .= "<tr>";
                $return .= "<td colspan='1'><a href='imprimir_conta.php?mesa=".$mesa."' class='ui basic fluid button'>Fechar Mesa</a></td>";
                // $return .= "<td colspan='2'><a href='balcaoDAO_delivery.php?truncar=yes' class='ui red fluid button'>Cancelar</a></td>";
                // $return .= "<td colspan='1'><a href='#venda' id='botao' class='ui green fluid button'>Finalizar</a></td>";
                // $return .= '<td colspan="1"><a href="javascript:void(0);" id="finalizar" class="ui green fluid button" >Finalizar</a></td>';
                $return .= "</tr>";
                $return .= "</table>";
                $return .= "</p>";

echo $return;
?>

