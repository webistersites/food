<?php

	include 'config.php';

	$sabores_pizza  = $_POST['countryname'];
        $id_pizza       = $_POST['phone_code'];
        $preco          = $_POST['country_no'];
        $cliente        = mysql_query("SELECT id_cliente FROM sao_francisco.pedido_delivery WHERE id = 1");
        $ver_cliente   = mysql_result($cliente,0);
        
        
//        if (!isset($sabores_pizza[2])) 
//            {
//                if ($preco[0] >= $preco[1]) 
//                    {
//                        mysql_query("INSERT INTO pde.pedido_balcao VALUES ('',$id_pizza[0],1,'$preco[0]'),('',$id_pizza[1],1,'')");
//                    }
//                else
//                    {
//                        mysql_query("INSERT INTO pde.pedido_balcao VALUES ('',$id_pizza[0],1,''),('',$id_pizza[1],1,'$preco[1]')");
//                    }            
//
//            }
//        else
//            {
                if ($preco[0] >= $preco[1] && $preco[0] >= $preco[2]) 
                    {
                        $concatenar = "1/3 " . $sabores_pizza[0] . " 1/3 " . $sabores_pizza[1] ." 1/3 " . $sabores_pizza[2] . $preco[0];
                        $produto = "1/3 " . $sabores_pizza[0] . " 1/3 " . $sabores_pizza[1] . " 1/3 " . $sabores_pizza[2];
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT sao_francisco.tec_products SELECT '',0000,'$produto',101,0,'no_image.png',0,$preco[0],0,10,'','','',5,1;");
                                mysql_query("INSERT INTO sao_francisco.pedido_delivery VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '".$produto.$preco[0]."'),1,'',$ver_cliente,0)");
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO sao_francisco.pedido_delivery VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'),1,'',$ver_cliente,0)");
                        }
                    }
                elseif ($preco[1] >= $preco[0] && $preco[1] >= $preco[2]) 
                    {
                        $concatenar = "1/3 " . $sabores_pizza[0] . " 1/3 " . $sabores_pizza[1] ." 1/3 " . $sabores_pizza[2] . $preco[1];
                        $produto = "1/3 " . $sabores_pizza[0] . " 1/3 " . $sabores_pizza[1] . " 1/3 " . $sabores_pizza[2];
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT sao_francisco.tec_products SELECT '',0000,'$produto',101,0,'no_image.png',0,$preco[1],0,10,'','','',5,1;");
                                mysql_query("INSERT INTO sao_francisco.pedido_delivery VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '".$produto.$preco[1]."'),1,'',$ver_cliente,0)");
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO sao_francisco.pedido_delivery VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'),1,'',$ver_cliente,0)");
                        }
                    }
                elseif ($preco[2] >= $preco[0] && $preco[2] >= $preco[1])
                    {
                        $concatenar = "1/3 " . $sabores_pizza[0] . " 1/3 " . $sabores_pizza[1] ." 1/3 " . $sabores_pizza[2] . $preco[2];
                        $produto = "1/3 " . $sabores_pizza[0] . " 1/3 " . $sabores_pizza[1] . " 1/3 " . $sabores_pizza[2];
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT sao_francisco.tec_products SELECT '',0000,'$produto',101,0,'no_image.png',0,$preco[2],0,10,'','','',5,1;");
                                mysql_query("INSERT INTO sao_francisco.pedido_delivery VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '".$produto.$preco[2]."'),1,'',$ver_cliente,0)");
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO sao_francisco.pedido_delivery VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'),1,'',$ver_cliente,0)");
                        }
                    }
//            }


?>

<meta http-equiv="refresh" content="0.1; url=../pdv_delivery.php">