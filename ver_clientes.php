<?php
    //include 'cabecalho.php';
    
    $ver_clientes = mysql_query("SELECT * FROM clientes");
    
    echo "<table class='ui small compact celled table'>"
              ."<thead>"                
                ."<th class='center aligned'>ID</th>"
                ."<th>Nome</th>"
                . "<th>Telefone</th>"
                ."<th>Endereço</th>"
                ."<th>CEP</th>"
                ."<th>Taxa</th>"
                . "<th class='right aligned' width='2%'>Ação</th>"
              ."</thead>"
            ;
    
    while ($cliente=mysql_fetch_array($ver_clientes)) {
            echo "<tr>"
            ."<td class='collapsing center aligned'>".$cliente['id']."</td>"    
            ."<td class='collapsing'>".$cliente['name']."</td>"
            ."<td class='collapsing'>".$cliente['phone']."</td>"      
              ."<td class='collapsing'>".$cliente['endereco']. ', ' . $cliente['cf1'] . ' - ' . $cliente['bairro'] ."</td>"
              ."<td class='collapsing'>".$cliente['cep']."</td>"
                ."<td class='collapsing'>R$ ".$cliente['taxa_de_entrega']."</td>"
                . "<td class='collapsing right aligned'>
                        <a href='delivery_alterar.php?id=".$cliente['id']."'><i class='pencil large icon'></i></a>
                        <a href='deletar_cliente.php?id=".$cliente['id']."'><i class='trash large icon'></i></a>
                    </td>"

            ."</tr>"
        ;
    }
    echo '</table>';

?>
