<?php

include 'cabecalho.php';

$nome_cliente = $_GET['cliente'];
$id_cliente = $_GET['id'];

$consulta_cliente = mysql_query("SELECT id_cliente FROM pedido_delivery");

$busca_taxa = mysql_query("SELECT 
                                a.id,
                                b.name,
                                a.cost
                            FROM
                                    tec_products a
                            INNER JOIN
                                    clientes b
                            ON
                                    a.cost = b.taxa_de_entrega
                            WHERE
                                    a.category_id = 102
                            AND
                                    b.id = $id_cliente
    ;");

$ver_taxa = mysql_fetch_array($busca_taxa);

if (mysql_num_rows($consulta_cliente) == 0) 
    {
        mysql_query("INSERT pedido_delivery (id_produto,id_cliente,quantidade,id_motoboy,impresso) VALUE (".$ver_taxa['id'].",$id_cliente,1,0,1)");
    }
    elseif (mysql_result($consulta_cliente,0) != $id_cliente)
    {
        mysql_query("UPDATE pedido_delivery SET id_cliente = $id_cliente");
        mysql_query("UPDATE pedido_delivery SET id_produto = ".$ver_taxa['id']." WHERE id = 1");
    }

?>

<meta http-equiv="refresh" content="0.1;url=pdv_delivery.php">