<?php

	   include 'conecta.php';

	   // $sabores_pizza  = $_POST['countryname'];
        $sabor1         = $_POST['course2'];
        $sabor2         = $_POST['course3'];
        //$id_pizza       = $_POST['phone_code'];
        $ver_preco1          = mysql_query("SELECT cost FROM tec_products WHERE name = '".$sabor1."'");
        $ver_preco2          = mysql_query("SELECT cost FROM tec_products WHERE name = '".$sabor2."'");
        $preco1         = mysql_result($ver_preco1,0);
        $preco2         = mysql_result($ver_preco2,0);
        $cliente        = mysql_query("SELECT id_cliente FROM sao_francisco.pedido_delivery WHERE id = 1");
        $ver_cliente    = mysql_result($cliente,0);
        
        

                if ($preco1 >= $preco2) 
                    {
                        $concatenar = "1/2 " . $sabor1 . " 1/2 " . $sabor2 . $preco1;
                        $produto = "1/2 " . $sabor1 . " 1/2 " . $sabor2;
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT sao_francisco.tec_products SELECT '',0000,'$produto',100,0,'no_image.png',0,$preco1,0,10,'','','',5,1;");
                                mysql_query("INSERT INTO sao_francisco.pedido_delivery VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '".$produto.$preco1."'),1,'',$ver_cliente,0)");
                                $return = "Cadastrado!!!";
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO sao_francisco.pedido_delivery VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'),1,'',$ver_cliente,0)");
                            $return = "Cadastrado!!!";
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
                                mysql_query("INSERT INTO sao_francisco.pedido_delivery VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '".$produto.$preco2."'),1,'',$ver_cliente,0)");
                                $return = "Cadastrado!!!";
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO sao_francisco.pedido_delivery VALUES ('',(SELECT id FROM sao_francisco.tec_products WHERE concat(name,cost) = '$concatenar'),1,'',$ver_cliente,0)");
                            $return = "Cadastrado!!!";
                        }
                    }            

                    

                echo $return;

?>

