<?php #include 'cabecalho.php'; ?>

<style>
  h1 {
    text-align: center;
    font-family: Tahoma, Arial, sans-serif;
    color: #06D85F;
    margin: 80px 0;
  }

  .box {
    width: 80%;
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

  .popup_alt {
    margin: 80px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 55%;
    position: relative;
    transition: all 5s ease-in-out;
  }

  .popup_alt h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
  }
  .popup_alt .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .popup_alt .close:hover {
    color: #000;
  }
  .popup_alt .content {
    max-height: 80%;
    overflow: auto;
  }

  @media screen and (max-width: 700px){
    .box{
      width: 70%;
    }
    .popup_alt{
      width: 70%;
    }
  }
</style>


<div id="popup_alt" class="overlay">
    <div class="popup_alt">
        <h2 class="ui center aligned header">Alterar Clientes</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
            <div class="ui center aligned grid">
                <form action="cadastrar_clientes.php" method="post">
                    <div class="ui equal width form">
                        <div class="fields">
                            <div class="field">
                                <label>Nome</label>
                                <input type="text" name="nome" placeholder="Nome" autofocus="">
                            </div>
                            <div class="field">
                                <label>Telefone</label>
                                <input type="text" name="telefone" placeholder="DDD">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="seven wide field">
                                <label>Endereço</label>
                                <input type="text" name="endereco" placeholder="Rua, número">
                            </div>
                            <div class="one wide field">
                                <label>Taxa de Entrega</label>
                                <input type="text" name="taxa" placeholder="R$" size="4">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field">
                                <label>Bairro</label>
                                <input type="text" name="bairro" placeholder="Bairro">
                            </div>
                            <div class="field">
                                <label>CEP</label>
                                <input type="text" name="cep" placeholder="00000-000">
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="ui submit right floated blue button" value="Cadastrar">
                </form>
            </div><br><br><br>
        </div>
    </div>
</div>