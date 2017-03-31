<?php

	include 'config.php';
        

	$sabores_pizza  = $_POST['countryname'];
        $id_pizza       = $_POST['phone_code'];
        $preco          = $_POST['country_no'];
        $mesa           = $_POST['mesa'];
        
        

                if ($preco[0] >= $preco[1]) 
                    {
                        $concatenar = "1/2 " . $sabores_pizza[0] . " 1/2 " . $sabores_pizza[1] . $preco[0];
                        $produto = "1/2 " . $sabores_pizza[0] . " 1/2 " . $sabores_pizza[1];
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT sao_francisco.tec_products SELECT '',0000,'$produto',100,0,'no_image.png',0,$preco[0],0,10,'','','',5,1;");
                                mysql_query("INSERT INTO sao_francisco.pedido_mesa$mesa VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '".$produto.$preco[0]."'),1,'',1)");
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO sao_francisco.pedido_mesa$mesa VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'),1,'',1)");
                        }
                        
                    }
                else
                    {
                        $concatenar = "1/2 " . $sabores_pizza[0] . " 1/2 " . $sabores_pizza[1] . $preco[1];
                        $produto = "1/2 " . $sabores_pizza[0] . " 1/2 " . $sabores_pizza[1];
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT sao_francisco.tec_products SELECT '',0000,'$produto',100,0,'no_image.png',0,$preco[1],0,10,'','','',5,1;");
                                mysql_query("INSERT INTO sao_francisco.pedido_mesa$mesa VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '".$produto.$preco[1]."'),1,'',1)");
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO sao_francisco.pedido_mesa$mesa VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'),1,'',1)");
                        }
                    }            
                    echo '<meta http-equiv="refresh" content="0.1; url=../mesa'.$mesa.'.php">';
?>

