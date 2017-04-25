<?php 
	include 'conectaMobile.php';

	$sabor1 	= $_POST['sabor1'];
	$sabor2 	= $_POST['sabor2'];
	$mesa 		= $_POST['mesa'];

		$ver_preco1          = mysql_query("SELECT cost FROM tec_products WHERE name = '".$sabor1."' AND category_id = 98");
        $ver_preco2          = mysql_query("SELECT cost FROM tec_products WHERE name = '".$sabor2."' AND category_id = 98");
        $preco1              = mysql_result($ver_preco1,0);
        $preco2              = mysql_result($ver_preco2,0);
       
        

                if ($preco1 >= $preco2) 
                    {
                        $concatenar = "1/2 " . $sabor1 . " 1/2 " . $sabor2 . $preco1;
                        $produto = "1/2 " . $sabor1 . " 1/2 " . $sabor2;
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT tec_products SELECT '',0000,'$produto',100,0,'no_image.png',0,$preco1,0,10,'','','',5,1;");
                                mysql_query("INSERT INTO pedido_mesa".$mesa." VALUES ('',(SELECT id FROM tec_products WHERE concat(name,cost) = '".$produto.$preco1."'),1,'',0,0)");
                                mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO pedido_mesa".$mesa." VALUES ('',(SELECT id FROM tec_products WHERE concat(name,cost) = '$concatenar'),1,'',0,0)");
                            mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");
                        }
                        
                    }
                else
                    {
                        $concatenar = "1/2 " . $sabor1 . " 1/2 " . $sabor2 . $preco2;
                        $produto = "1/2 " . $sabor1 . " 1/2 " . $sabor2;
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT tec_products SELECT '',0000,'$produto',100,0,'no_image.png',0,$preco2,0,10,'','','',5,1;");
                                mysql_query("INSERT INTO pedido_mesa".$mesa." VALUES ('',(SELECT id FROM tec_products WHERE concat(name,cost) = '".$produto.$preco2."'),1,'',0,0)");
                                mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO pedido_mesa".$mesa." VALUES ('',(SELECT id FROM tec_products WHERE concat(name,cost) = '$concatenar'),1,'',0,0)");
                            mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");
                        }
                    }

echo '<meta http-equiv="refresh" content="0.1; url=mob_mesa'.$mesa.'.php">';
 ?>