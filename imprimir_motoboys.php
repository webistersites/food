<?php

include 'cabecalho.php';

$id_boy     = $_GET['id'];
        
    /*
	 * Gerar um arquivo .txt para imprimir na impressora Bematech MP-20 MI
	 */

        $n_colunas = 60; // 40 colunas por linha
        
        /**
         * Adiciona a quantidade necessaria de espaços no inicio 
         * da string informada para deixa-la centralizada na tela
         * 
         * @global int $n_colunas Numero maximo de caracteres aceitos
         * @param string $info String a ser centralizada
         * @return string
         */
        function centraliza($info)
        {
            global $n_colunas;
            
            $aux = strlen($info);
            
            if ($aux < $n_colunas) {
                // calcula quantos espaços devem ser adicionados
                // antes da string para deixa-la centralizada
                $espacos = floor(($n_colunas - $aux) / 2);
                
                $espaco = '';
                for ($i = 0; $i < $espacos; $i++){
                    $espaco .= ' ';
                }
                
                // retorna a string com os espaços necessários para centraliza-la
                return $espaco.$info;
                
            } else {
                // se for maior ou igual ao número de colunas
                // retorna a string cortada com o número máximo de colunas.
                return substr($info, 0, $n_colunas);
            }
            
        }
        
        /**
         * Adiciona a quantidade de espaços informados na String
         * passada na possição informada.
         * 
         * Se a string informada for maior que a quantidade de posições
         * informada, então corta a string para ela ter a quantidade
         * de caracteres exata das posições.
         * 
         * @param string $string String a ter os espaços adicionados.
         * @param int $posicoes Qtde de posições da coluna
         * @param string $onde Onde será adicionar os espaços. I (inicio) ou F (final).
         * @return string
         */
        function addEspacos($string, $posicoes, $onde)
        {
            
            $aux = strlen($string);
            
            if ($aux >= $posicoes)
                return substr ($string, 0, $posicoes);
            
            $dif = $posicoes - $aux;
            
            $espacos = '';
            
            for($i = 0; $i < $dif; $i++) {
                $espacos .= ' ';
            }
            
            if ($onde === 'I')
                return $espacos.$string;
            else
                return $string.$espacos;
            
        }
        $monta_query = "select 
	a.id_motoboy,
        b.nome,
    count(a.entregas) as Entregas,
    sum(a.total_taxas) as 'Total',
    a.horario
FROM
	vendas_motoboys a
INNER JOIN
	usuarios b
ON
	a.id_motoboy = b.id
WHERE
	a.pago = 0
AND
        id_motoboy = $id_boy
GROUP BY
	b.nome
;";
        
        $query_impressao = mysql_query($monta_query);
        //$ver_boy = mysql_fetch_array($query_impressao);
        
        $txt_cabecalho = array();
        $txt_itens = array();
        $txt_valor_total = '';
        $txt_rodape = array();
        
        $txt_cabecalho[] = 'PIZZARIA & ESFIHARIA - SAO FRANCISCO'; 
        
        $txt_cabecalho[] = 'Rua Planalto, 54 - Jardim Palmares';
        
        //$txt_cabecalho[] = ' '; // força pular uma linha entre o cabeçalho e os itens
        
        $txt_cabecalho[] = 'TEL.: 2241-2513 / 2241-3210';
        
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d/m/Y H:i');
        
        $txt_cabecalho[] = '-------------------------------------------';
        
        $txt_cabecalho[] = $date;
        
        $txt_cabecalho[] = '********************************************';
        
        $txt_cabecalho[] = 'TOTAL DE ENTREGAS';
        
        $txt_cabecalho[] = '********************************************';
        
        $txt_cabecalho[] = 'Total'; // força pular uma linha entre o cabeçalho e os itens
        
        $txt_itens[] = array('Motoboy', 'Total');
        
	$tot_itens = 0;
        
        while($ver_boy = mysql_fetch_array($query_impressao))
            {
                $txt_itens[] = array($ver_boy['nome'],'R$ '.number_format($ver_boy['Total'],2,',','.'));
                $tot_itens += $ver_boy['Total'];
                $n_cliente = $ler['name'];
                $end_cliente = $ler['endereco'];
            }
        
//    	$txt_itens[] = array(251, 'Prod. linha 1', '002', 3, '0.50', '1.50');
//	$tot_itens += 1.50;
//
//    	$txt_itens[] = array(278, 'Prod. linha 2', '005', 1, '0.75', '0.75');
//	$tot_itens += 0.75;
//
//    	$txt_itens[] = array(553, 'Prod. linha 3', '014', 10, '1.50', '15.00');
//	$tot_itens += 15.00;
        
        //$aux_valor_total = 'TOTAL GERAL '.number_format($tot_itens,2,',','.');
        
	// calcula o total de espaços que deve ser adicionado antes do "Sub-total" para alinhado a esquerda
        //$total_espacos = $n_colunas - strlen($aux_valor_total)-10;
        
        $espacos = '';
        
        for($i = 0; $i < $total_espacos; $i++){
            $espacos .= ' ';
        }
        
        $txt_valor_total = "-------------------------------------------------------\r\n";
//        
//        $txt_valor_total .= $espacos.$aux_valor_total;
//        
//        $txt_valor_total .= "\r\n-------------------------------------------------------\r\n";
        
        $txt_rodape[] = 'Impresso por: ' . $_SESSION['usuarioNome'];
        
        $txt_rodape[] = '--';
        
        
	// centraliza todas as posições do array $txt_cabecalho
        $cabecalho = array_map("centraliza", $txt_cabecalho);
        
	/* para cada linha de item (array) existente no array $txt_itens,
	 * adiciona cada posição da linha em um novo array $itens
	 * fazendo a formatação dos espaçamentos entre cada coluna
	 * da linha através da função "addEspacos"
	 */
        foreach ($txt_itens as $item) {
            
            /*
	     * Cod. => máximo de 5 colunas
	     * Produto => máximo de 11 colunas
	     * Env. => máximo de 6 colunas
	     * Qtd => máximo de 4 colunas
	     * V. UN => máximo de 7 colunas
	     * Total => máximo de 7 colunas
	     *
	     * $itens[] = 'Cod. Produto      Env. Qtd  V. UN  Total'
	     */
            
            $itens[] = addEspacos($item[0], 45, 'F')
                    . addEspacos($item[1], 10, 'F')
//                    . addEspacos($item[2], 5, 'I')
//                    . addEspacos($item[3], 4, 'I')
//                    . addEspacos($item[4], 7, 'I')
//                    . addEspacos($item[5], 7, 'I')
                ;
            
        }
        
	/* concatena o cabelhaço, os itens, o sub-total e rodapé
	 * adicionando uma quebra de linha "\r\n" ao final de cada
	 * item dos arrays $cabecalho, $itens, $txt_rodape
	 */
        $txt = implode("\r\n", $cabecalho)
            . "\r\n"
            . implode("\r\n", $itens)
            . "\r\n"
            . $txt_valor_total // Sub-total
            . "\r\n\r\n"
            . implode("\r\n", $txt_rodape);
        
        // caminho e nome onde o TXT será criado no servidor
        $file = 'cupom_entregas.txt';

        // cria o arquivo
        $_file  = fopen($file,"w");
        fwrite($_file,$txt);
        fclose($_file);

//        header("Pragma: public"); 
//        // Força o header para salvar o arquivo
//        header("Content-type: application/save");
//        header("X-Download-Options: noopen "); // For IE8
//        header("X-Content-Type-Options: nosniff"); // For IE8
//        // Pré define o nome do arquivo
//        header("Content-Disposition: attachment; filename=imprimir.txt"); 
//        header("Expires: 0"); 
//        header("Pragma: no-cache");
//
//        // Lê o arquivo para download
//        readfile($file);
        
        //exit;
  
        
        
?>

<?php
$printer = "Balcao";
if($ph = printer_open($printer))
{
   $fh = fopen("cupom_entregas.txt", "rb");
   $content = fread($fh, filesize("cupom_entregas.txt"));
   fclose($fh);
       
   printer_set_option($ph, PRINTER_MODE, "TEXT");
   printer_write($ph, $content);
   printer_close($ph);
}

echo '<meta http-equiv="refresh" content="0.1; url=configuracoes.php">';
?>