<?php 

//include 'conecta.php';


$q_motoboy  = mysql_query("SELECT * FROM usuarios WHERE id_cargo = 5 and id != 16");
echo '<div class="ui left aligned container" id="moto">
        <div class="ui form">
          <div class="inline field">
          <b>Motoboy:  </b>
            <select id="motoboy">
              <option value="-">Selecionar</option>';
              while ($motoboy = mysql_fetch_array($q_motoboy)) 
              {
                  echo '<option value="'.$motoboy['id'].'">'.$motoboy['nome'].'</option>';
              }
            echo '</select>
            <!--<a href="javascript:void(0);" onclick="selecionaMotoboy()">&nbsp;&nbsp;Selecionar</a>-->
          </div>
        </div>
    </div>';

?>