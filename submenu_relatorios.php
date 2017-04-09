<script src="ajax2.js"></script>
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.js"></script>
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
    <br>
    <div class="ui centered grid">
      <div class="ui form">
        <div class="fields">
          <div class="ui calendar field" id="example13">
            <label>Inicial:</label>
            <div class="ui input left icon">
              <i class="calendar icon"></i>
              <input type="text" placeholder="Date" id="inicial" name="example2">
            </div>
          </div>
          <div class="ui calendar field" id="example16">
            <label>Final:</label>
            <div class="ui input left icon">
              <i class="calendar icon"></i>
              <input type="text" placeholder="Date" id="final" name="example3">
            </div>
          </div>
          <!-- <div class="ui field">
            <label>&nbsp;</label>
            <input type="button" class="ui button" onclick="relatorioFechamentoDinheiro()" value="Aplicar">
          </div> -->
        </div>
      </div>
    </div>
    <br>
    <div class="ui divider"></div>
    <div id="result"></div>
    <br>
</div>
<script>
$('#example1').calendar();
$('#example2').calendar({
  type: 'date'
});
$('#example3').calendar({
  type: 'date'
});
$('#rangestart').calendar({
  type: 'date',
  endCalendar: $('#rangeend')
});
$('#rangeend').calendar({
  type: 'date',
  startCalendar: $('#rangestart')
});
$('#example4').calendar({
  startMode: 'year'
});
$('#example5').calendar();
$('#example6').calendar({
  ampm: false,
  type: 'time'
});
$('#example7').calendar({
  type: 'month'
});
$('#example8').calendar({
  type: 'year'
});
$('#example9').calendar();
$('#example10').calendar({
  on: 'hover'
});
var today = new Date();
$('#example11').calendar({
  minDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() - 5),
  maxDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 5)
});
$('#example12').calendar({
  monthFirst: false
});
$('#example13').calendar({
  monthFirst: false,
  type: 'date',
  formatter: {
    date: function (date, settings) {
      if (!date) return '';
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();
      return day + '/' + month + '/' + year;
    }
  }
});
$('#example16').calendar({
  monthFirst: false,
  type: 'date',
  formatter: {
    date: function (date, settings) {
      if (!date) return '';
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();
      return day + '/' + month + '/' + year;
    }
  }
});
$('#example14').calendar({
  inline: true
});
$('#example15').calendar();
</script>


