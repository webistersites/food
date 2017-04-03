<script src="ajax2.js"></script>

<div class="ui segment">
    <h2 class="ui center aligned dividing header">
        Relatórios
    </h2>
    <br><br>
    <div class="ui container grid">
        <div class="four wide column">
            <h3 class="ui header">
              <i class="file text outline icon"></i>
              <div class="content">
                <a href="javascript:void(0);" onclick="relatorioFechamento()">Fechamento</a>
                <div class="sub header">Relatório de fechamento do caixa do dia anterior</div>
              </div>
            </h3>
        </div>
        <div class="four wide column">
            <h3 class="ui header">
              <i class="file text outline icon"></i>
              <div class="content">
                <a href="javascript:void(0);" onclick="relatorioFechamentoDinheiro()">Dinheiro</a>
                <div class="sub header">Total vendido em Dinheiro</div>
              </div>
            </h3>
        </div>
        <div class="four wide column">
            <h3 class="ui header">
              <i class="file text outline icon"></i>
              <div class="content">
                <a href="javascript:void(0);" onclick="relatorioFechamentoCredito()">Crédito</a>
                <div class="sub header">Total vendido em Cartão de Crédito</div>
              </div>
            </h3>
        </div>
        <div class="four wide column">
            <h3 class="ui header">
              <i class="file text outline icon"></i>
              <div class="content">
                <a href="javascript:void(0);" onclick="relatorioFechamentoDebito()">Débito</a>
                <div class="sub header">Total vendido em Cartão de Débito</div>
              </div>
            </h3>
        </div>
    </div>
    <br>
    <div class="ui divider"></div>
    <div id="result"></div>
    <br>
</div>
</div>

