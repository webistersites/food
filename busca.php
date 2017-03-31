<?php
// Verifica se foi feita alguma busca
// Caso contrario, redireciona o visitante pra home
echo '<div class="ui center aligned container">';
if (!isset($_GET['consulta'])) {
  //echo "<h4><i class='users icon'></i>Clientes</h4>";
  //exit;
  $busca = 28646222;
} else {
// Conecte-se ao MySQL antes desse ponto
// Salva o que foi buscado em uma variável
$busca = mysql_real_escape_string($_GET['consulta']);
// ============================================
// Monta outra consulta MySQL para a busca
$sql = "select * from clientes where phone like '%".$busca."%'";
// Executa a consulta
$query = mysql_query($sql);

// =============================================
// Verifica se Consulta retorna vazia. Se sim, cadastra cliente.
if (mysql_num_rows($query) <= 0) {
    echo "Telefone não encontrado... Deseja cadastrar cliente? ";
    echo "<br><br>";
    echo " <a href='delivery.php#cadastrar' class='ui blue mini button'>Sim</a><a href='delivery.php' class='ui mini button'>Não</a>";
    exit;
}
// ============================================
// Começa a exibição dos resultados
echo "<h4><i class='users icon'></i>Clientes</h4>";
echo "<table class='ui celled table'>";
echo "<thead>
          <th>id</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Endereço</th>
          <th class='ui center aligned'>Ações</th>
        </thead>";
while ($resultado = mysql_fetch_assoc($query)) {
  $nome = $resultado['name'];
  $telefone = $resultado['phone'];
  $email = $resultado['email'];
  $endereco = $resultado['endereco'];
  $bairro = $resultado['bairro'];
  $num = $resultado['cf1'];
  $id = $resultado['id'];

  #$link = '/noticia.php?id=' . $resultado['id'];

      echo "<tr>";
    #echo "<a href='{$link}'>";
    echo "<td>";
    echo "{$id}";
    echo "</td>";
    echo "<td>";
    echo "{$nome}";
    echo "</td>";
    echo "<td>";
    echo "{$telefone}";
    echo "</td>";
    echo "<td>";
    echo "{$email}";
    echo "</td>";
    echo "<td>";
    echo "{$endereco}" . ", " . "{$num}" . " - " . "{$bairro}";
    echo "</td>";
    echo "<td class='ui center aligned'>";
    //echo '<a href="testes.php?endereco=' . $endereco . '" target="_blank" class="ui mini basic button"><i class="map icon"></i>Mapa</a>';
    echo '<a href="delivery_alterar.php?id='.$id.'" class="ui mini button">Editar</a>';
    echo '<a href="insere_cliente_delivery.php?cliente='.$nome.'&id='.$id.'" class="ui blue mini button">Selecionar</a>';
    echo "</td>";
    #echo "</a>";
  echo "</tr>";
}
echo "</table>";
}
echo '</div>';

?>
