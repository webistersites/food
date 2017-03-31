
<style>

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup_d {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup_d h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup_d .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup_d .close:hover {
  color: #06D85F;
}
.popup_d .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup_d{
    width: 70%;
  }
}
</style>

<div id="popup_din_del" class="overlay">
	<div class="popup_d">
		<h2>Dinheiro</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">        
                    
                    <?php 
//                        $buscaTotal = mysql_query("select total from tabela_auxiliar_venda");
//                        if ($buscaTotal != false) {
//                            $restante = mysql_result($buscaTotal,0);  
//                            
//                        } else {
//                            echo '';
//                        }                    

                        ?>
                    
                    <div class="ui form">
                        <div class="inline field">
                            <label>Valor: </label>
                            <input name="din" id="din" type="text" size="7" autofocus="">
                        </div>
                    </div>
                    <br>
                    <?php 
                        echo '<input name="total" value="'.$subtotal.'" id="total" type="hidden" />';
                        echo '<input name="mesa" value="'.$id_mesa.'" id="mesa" type="hidden" />';
                        //echo '<input name="origem" value="delivery" id="origem" type="hidden" />';
                        echo '<div id="result">';
                                if ($aux != 1) 
                                {
                                    echo '<input value="Finalizar" onclick="getByIdMesa()" type="button" class="ui green right floated button" />';
                                }   
                            else
                            {
                                    echo '';
                            }
                                    echo '</div>';

                        ?>

                    <br>
                    
		</div>
	</div>
</div>


