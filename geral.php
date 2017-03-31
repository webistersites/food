<div class="geral sumir">
<div class="ui secondary pointing red menu">
    <a class="item active" href="#">
        Geral
      </a>
        <a class="item" href="#analises" onclick="location.reload()">
        Análises
      </a>
        <a class="item" href="#">
        Outros
      </a>
</div>
<div class="ui segment">
        <h2 class="ui center aligned dividing header">
            Métricas Gerais
        </h2>
        <br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Documentos', 'Departamentos'],
          ['RH',     11],
          ['Financeiro',      2],
          ['Comunicação',  2],
          ['Analistas', 2],
          ['Diretoria',    7]
        ]);

        var options = {
          title: 'Documentos Pendentes'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Vendas', 'Gastos'],
          ['2010',  1000,      400],
          ['2011',  1170,      460],
          ['2012',  660,       1120],
          ['2013',  1030,      540],
          ['2014',  980,       965],
          ['2015',  704,       317],
          ['2016',  1040,      420],
        ]);

        var options = {
          title: 'Performance Geral',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
          google.charts.load('current', {'packages':['line']});
          google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

          var data = new google.visualization.DataTable();
          data.addColumn('number', 'Day');
          data.addColumn('number', 'Guardians of the Galaxy');
          data.addColumn('number', 'The Avengers');
          data.addColumn('number', 'Transformers: Age of Extinction');

          data.addRows([
            [1,  37.8, 80.8, 41.8],
            [2,  30.9, 69.5, 32.4],
            [3,  25.4,   57, 25.7],
            [4,  11.7, 18.8, 10.5],
            [5,  11.9, 17.6, 10.4],
            [6,   8.8, 13.6,  7.7],
            [7,   7.6, 12.3,  9.6],
            [8,  12.3, 29.2, 10.6],
            [9,  16.9, 42.9, 14.8],
            [10, 12.8, 30.9, 11.6],
            [11,  5.3,  7.9,  4.7],
            [12,  6.6,  8.4,  5.2],
            [13,  4.8,  6.3,  3.6],
            [14,  4.2,  6.2,  3.4]
          ]);

          var options = {
            chart: {
              title: 'Box Office Earnings in First Two Weeks of Opening',
              subtitle: 'in millions of dollars (USD)'
            },
            width: 900,
            height: 500,
            axes: {
              x: {
                0: {side: 'top'}
              }
            }
          };

          var chart = new google.charts.Line(document.getElementById('line_top_x'));

          chart.draw(data, options);
        }
      </script>
        <div class="ui two column doubling stackable grid container">
            <div id="piechart" class="column" style="width: 450px; height: 400px;"></div>
            <div id="curve_chart" class="column" style="width: 600px; height: 300px"></div>
        </div>
      <div id="line_top_x" style="width: 600px; height: 300px"></div>
    </div>
</div>
