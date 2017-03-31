<div class="salao sumir">
<div class="ui secondary pointing green menu">
    <a class="item active" href="#salao" >
        Salão
      </a>


</div>
<div class="ui segment">
        <h2 class="ui center aligned dividing header">
            <i class="food icon"></i> Selecionar Mesa
        </h2>
        <br>

<div class='ui ten column grid container'>
  <?php
    while ($res=mysql_fetch_array($query)) {
      if ($res['estado'] == "busy") {
        $mesinha = "images/mesa-busy.png";
                            $alert = 0;
      } elseif ($res['estado'] == "free") {
        $mesinha = "images/mesa-free.png";
                            $alert = 0;
      } else {
                $mesinha = "images/mesa-warning.png";
                $alert = 1;
            }
      echo "<div class='column'>";
      echo "<a class='' href='mesa".$res['id'].".php?mesa=".$res['id']."&alerta=$alert'>";
      echo "<p><img class='ui bordered small image' src='".$mesinha."'></p>";
      echo "<figcaption class='legenda'><h6>Mesa ".$res['id']."</h6></figcaption>";
      echo "</a>";

      echo "</div>";
    }
  ?>
</div>
</div>
</div>
