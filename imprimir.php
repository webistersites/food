
<?php

    include 'cabecalho.php';
    
$query_impressao = mysql_query('
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
          ORDER BY a.id');
    
?>
<style>
    @media print {
        .ui.menu{display:none;}
        .ui.table{margin: 0 25% 0 25%}
    }
</style>
<table class="ui very basic collapsing table">
    <thead>
        <th>Cód.</th>
        <th>Produto</th>
        <th>Preço</th>
        <th>Qtd.</th>
        <th>Total</th>
    </thead>
    <?php
    while ($ler = mysql_fetch_array($query_impressao))
    {
        echo '<tr>'
                . '<td>'.$ler['code'].'</td>'
                . '<td>'.$ler['Produto'].'</td>'
                . '<td>'.$ler['Preço'].'</td>'
                . '<td>'.$ler['quantidade'].'</td>'
                . '<td>'.$ler['Total'].'</td>'
            . '</tr>';
    }
    
    ?>
</table>


<?php
  date_default_timezone_set('America/Sao_Paulo');
  $date = date('d/m/Y H:i');
//ABRIR O ARQUIVO TXT
$arquivo = fopen("teste-banco.txt", "w");

//Faz a consulta no banco de dados
$query_impressao = mysql_query('
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
          ORDER BY a.id');


$cabecalho  = "\r\n" . "                PIZZARIA DO CHICO";
$cabecalho  .= "\r\n" . "                Rua Planalto,54";
$cabecalho  .= "\r\n" . "**********************************************";
$cabecalho  .= "\r\n" . "*                CUPOM FISCAL                *";
$cabecalho  .= "\r\n" . "**********************************************";
 fwrite($arquivo, $cabecalho);

 $header = "\r\n"."Cod.  ";
 $header .= ""."Produto";
 $header .= "\t\t\t\t"."V. UN";
 $header .= "  "."Qtd.";
 $header .= "  "."Total";
 fwrite($arquivo, $header);

while($ler = mysql_fetch_array($query_impressao)){
 
 $conteudo = "\r\n"  . $ler['code'];
 $conteudo .= "\t" . $ler['Produto'];
 $conteudo .= "\t\t\t" . $ler['Preço'];
 $conteudo .= "\t" . $ler['quantidade'];
 $conteudo .= "\t" . $ler['Total'];

 $total += $ler['Total'];
 //ESCREVE NO ARQUIVO TXT
 fwrite($arquivo, $conteudo);

}
$subtotal   = "\r\n". "______________________________________________";
$subtotal   .= "\r\n". "TOTAL R$                                " .$total;
 fwrite($arquivo, $subtotal);
 
 $rodape    = "\r\n" . "______________________________________________";
 $rodape    .= "\r\n" . " ";
 $rodape    .= "\r\n" . $date;
 $rodape    .= "\r\n" . "";
 $rodape    .= "\r\n" . "";
 $rodape    .= "\r\n" . "";
 $rodape    .= "\r\n" . "";
 $rodape    .= "\r\n" . "";
 $rodape    .= "\r\n" . "";
 $rodape    .= "\r\n" . ".";
 fwrite($arquivo, $rodape);
//FECHA O ARQUIVO
fclose($arquivo);
    
?>