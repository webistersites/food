<?php 
    include 'conecta.php';
    
    $din = $_GET['din'];
    $total = $_GET['total'];
    $mesa = $_GET['mesa'];
    $origem = $_GET['origem'];
    
        if ($total > $din) 
            {
                $sub = $total - $din;
                echo '<div class="ui form">
                        <div class="inline field">
                            <label>Falta: </label>
                            <input type="text" size="7" placeholder="R$ '.number_format($sub,2,',','.').'">
                        </div>
                    </div>';
                echo '<br><a class="ui basic button" href="vendaDAO_mesas.php?mesa='.$mesa.'&forma=5&din='.$din.'&resto='.$sub.'">Finalizar Crédito</a>';
                echo '<a class="ui basic right floated button" href="vendaDAO_mesas.php?mesa='.$mesa.'&forma=4&din='.$din.'&resto='.$sub.'">Finalizar Débito</a>';
                $tot = $sub;
            } 
            elseif ($total < $din) 
            {
                $troco = $din - $total;
                $aux = 1;
                echo '<div class="ui form">
                        <div class="inline field">
                            <label>Troco: </label>
                            <input type="text" size="7" placeholder="R$ '.number_format($troco,2,',','.').'">
                        </div>
                    </div>';
                echo '<br><a class="ui green right floated button" href="vendaDAO_mesas.php?mesa='.$mesa.'&forma=1&din='.$din.'&troco='.$troco.'">Finalizar</a>';
            } 
            else 
            {
                header("location: vendaDAO_mesas.php?mesa=$mesa&forma=1&din=$din&troco=0");
            }
 

?>
