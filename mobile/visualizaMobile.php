<?php 
include 'conectaMobile.php';

$id 	= $_GET['id'];
$mesa   = $_GET['mesa'];

$q_produtos   = mysql_query("SELECT
                                a.id
                                ,b.name
                                ,a.quantidade
                                ,b.cost
                              FROM
                                pedido_mesa".$mesa." a
                              INNER JOIN
                                tec_products b
                              ON
                                a.id_produto = b.id");

$prods = '<table class="centered">
            <thead>
              <tr>
                  <th data-field="id">Produto</th>
                  <th data-field="name">Qtd</th>
                  <th data-field="price">Preço</th>
                  <th data-field="action">#</th>
              </tr>
            </thead>

            <tbody>';

                while ($produto = mysql_fetch_array($q_produtos)) 
                {
                  $prods .= '<tr>
                          <td>'.$produto['name'].'</td>
                          <td>'.$produto['quantidade'].'</td>
                          <td>R$ '.$produto['cost'].'</td>
                          <td><a href="deletaItem.php?id='.$produto['id'].'&mesa='.$mesa.'"><i class="tiny material-icons">delete</i></a></td>
                        </tr> ';
                }
              
$prods .= '</tbody>
          </table>';

echo $prods;

 ?>