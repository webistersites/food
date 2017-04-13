<?php

	   include 'conecta.php';

	   // $sabores_pizza  = $_POST['countryname'];
        $sabor1         = $_GET['sb1'];
        $sabor2         = $_GET['sb2'];

        if ($sabor1 == "" || $sabor2 == "") 
        {
            echo '<div class="ui visible warning message">
                    <div class="header">Atenção!</div>
                    <p>Favor selecionar 2 sabores neste campo.</p>
                    </div>';
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
                                pedido_balcao a
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
                $return .= "<td class='center aligned'><form action='processa.php' method='post'><input type='hidden' name='seu_nome2' value='".$data['id']."'><input type='text' name='seu_nome' placeholder='".$data['quantidade']."' size='2'>x</td>";
                $return .= "<td>R$ " . $data['Total']      .  "</td>";
                $return .= "<td class='center aligned'>"."<a href='javascript:void(0);' onclick='deleta(".$data['id'].")'><i class='trash icon'></i></a>";
        $return .= "</tr>";
                $subtotal+=$data['Total'];
            }
                $return .= "</table>";
                $return .= "<table class='ui table'>";
                $return .= "<tr>";
                $return .= "<td><a href='balcaoDAO.php?truncar=yes' class='ui red fluid button'>Cancelar</a></td>";
                $return .= "<td><a href='suspender_venda.php?tipo=balcao&total=".$subtotal."' class='ui basic fluid button'>Aguardar</a></td>";
                $return .= "<td colspan='4' rowspan='2'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>";
                $return .= "</tr>";
                $return .= "<tr>";
                // $return .= "<td colspan='2'><a href='#venda' id='botao' class='ui green fluid button'>Finalizar</a></td>";
                $return .= "</tr>";
                $return .= "</table>";
                $return .= "</p>";

            echo $return;
        }
        else
        {
        // $id_pizza       = $_POST['phone_code'];
        $ver_preco1          = mysql_query("SELECT cost FROM tec_products WHERE name = '".$sabor1."' AND category_id = 99");
        $ver_preco2          = mysql_query("SELECT cost FROM tec_products WHERE name = '".$sabor2."' AND category_id = 99");
        $preco1              = mysql_result($ver_preco1,0);
        $preco2              = mysql_result($ver_preco2,0);
        // $cliente        = mysql_query("SELECT id_cliente FROM pedido_balcao WHERE id = 1");
        // $ver_cliente    = mysql_result($cliente,0);
        
        

                if ($preco1 >= $preco2) 
                    {
                        $concatenar = "1/2 " . $sabor1 . " 1/2 " . $sabor2 . $preco1;
                        $produto = "1/2 " . $sabor1 . " 1/2 " . $sabor2;
                        $consulta = mysql_query("SELECT id, concat(name,cost) as chave FROM tec_products WHERE concat(name,cost) = '$concatenar'");
                        if (mysql_num_rows($consulta) == 0) 
                            {
                                mysql_query("INSERT tec_products SELECT '',0000,'$produto',100,0,'no_image.png',0,$preco1,0,10,'','','',5,1;");
                                mysql_query("INSERT INTO pedido_balcao VALUES ('',(SELECT id FROM tec_products WHERE concat(name,cost) = '".$produto.$preco1."'),1,'')");
                                // $return = "Cadastrado!!!";
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO pedido_balcao VALUES ('',(SELECT id FROM tec_products WHERE concat(name,cost) = '$concatenar'),1,'')");
                            // $return = "Cadastrado!!!";
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
                                mysql_query("INSERT INTO pedido_balcao VALUES ('',(SELECT id FROM tec_products WHERE concat(name,cost) = '".$produto.$preco2."'),1,'')");
                                // $return = "Cadastrado!!!";
                            }
                        else
                        {
                            //$resultado = mysql_fecth_array($consulta);
                            mysql_query("INSERT INTO pedido_balcao VALUES ('',(SELECT id FROM tec_products WHERE concat(name,cost) = '$concatenar'),1,'')");
                            // $return = "Cadastrado!!!";
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
                                pedido_balcao a
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
                $return .= "<td class='center aligned'><form action='processa.php' method='post'><input type='hidden' name='seu_nome2' value='".$data['id']."'><input type='text' name='seu_nome' placeholder='".$data['quantidade']."' size='2'>x</td>";
                $return .= "<td>R$ " . $data['Total']      .  "</td>";
                $return .= "<td class='center aligned'>"."<a href='javascript:void(0);' onclick='deleta(".$data['id'].")'><i class='trash icon'></i></a>";
        $return .= "</tr>";
                $subtotal+=$data['Total'];
            }
                $return .= "</table>";
                $return .= "<table class='ui table'>";
                $return .= "<tr>";
                $return .= "<td><a href='balcaoDAO.php?truncar=yes' class='ui red fluid button'>Cancelar</a></td>";
                $return .= "<td><a href='suspender_venda.php?tipo=balcao&total=".$subtotal."' class='ui basic fluid button'>Aguardar</a></td>";
                $return .= "<td colspan='4' rowspan='2'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>";
                $return .= "</tr>";
                $return .= "<tr>";
                // $return .= "<td colspan='2'><a href='#venda' id='botao' class='ui green fluid button'>Finalizar</a></td>";
                $return .= "</tr>";
                $return .= "</table>";
                $return .= "</p>";

echo $return;
}
?>

