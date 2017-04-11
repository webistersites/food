<?php
    include 'cabecalho.php';
    
    //$verificaSuspensas = mysql_query("select id from vendas_suspensas");
    
    
//    if (mysql_num_rows($verificaSuspensas) > 0) 
//        {
//            echo 'Por favor, encerre as vendas suspensas';
//            exit();
//        }
//    else 
//    {
    $entrada = mysql_query("SELECT 
                                sum(a.valor) as total_entrada
                            FROM
                                    pde_movimentacao a
                            INNER JOIN
                                    pde_fato_vendas b
                            ON
                                    a.num_nota_fiscal = b.num_nota_fiscal
                            INNER JOIN
                                    caixa01 c
                            ON
                                    b.id_abertura = c.id
                            WHERE
                                    a.tipo_movimentacao = 'E'
                            AND
                                    b.id_abertura = (select max(id) from caixa01)
                            ;");
    
    $saida = mysql_query("SELECT 
                                sum(a.valor) as total_saida
                            FROM
                                    pde_movimentacao a
                            INNER JOIN
                                    pde_fato_vendas b
                            ON
                                    a.num_nota_fiscal = b.num_nota_fiscal
                            INNER JOIN
                                    caixa01 c
                            ON
                                    b.id_abertura = c.id
                            WHERE
                                    a.tipo_movimentacao = 'S'
                            AND
                                    b.id_abertura = (select max(id) from caixa01)
                            ;");
    
    $valor_inicial = mysql_query("select valor_inicial from caixa01
    where id = (select max(id) from caixa01)");
    
    $ver_entrada = mysql_result($entrada,0);
    $ver_saida = mysql_result($saida,0);
    $ver_valor_inicial = mysql_result($valor_inicial,0);
    
    $valor_final = ($ver_entrada - $ver_saida) + $ver_valor_inicial;
    
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d H:i');
    
    $fecha_caixa1 = mysql_query("UPDATE caixa01 SET valor_final=$valor_final , status='Fechado', data_fechamento='$date' WHERE status = 'Aberto'");
    $fecha_caixa2 = mysql_query("UPDATE caixa02 SET valor_final=0 , status='Fechado', data_fechamento='000-00-00 00:00' WHERE status = 'Aberto'");
    
    
//    }
?>

<meta http-equiv="refresh" content="0.1; url=ver_fechamento2.php">