<?php 
// include __DIR__ . '/../cabecalho.php'; 
?>
<html>
    <head>

        <title>jQuery Autocomplete Plugin</title>
        <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
        <script type='text/javascript' src="js/jquery.autocomplete.js"></script>
        <link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />
        <script type="text/javascript">
            $().ready(function() {
                $("#course2").autocomplete("autoComplete_sabores.php", {
                    width: 260,
                    matchContains: true,
                    //mustMatch: true,
                    //minChars: 0,
                    //multiple: true,
                    //highlight: false,
                    //multipleSeparator: ",",
                    selectFirst: false
                });

                $("#course3").autocomplete("autoComplete_sabores.php", {
                    width: 260,
                    matchContains: true,
                    //mustMatch: true,
                    //minChars: 0,
                    //multiple: true,
                    //highlight: false,
                    //multipleSeparator: ",",
                    selectFirst: false
                });
            });
        </script>
        <script type="text/javascript" src="ajax2.js"></script>
    </head>
    <body>
        <h2></h2>
        <div id="content">
            <form autocomplete="off" class="ui form" action="recebe_sabores.php" method="post">
              <div class="field">
                <label>1° Sabor:</label>
                <input type="text" name="course2" id="course2" placeholder="Escolha um sabor">
              </div>
              <div class="field">
                <label>2° Sabor:</label>
                <input type="text" name="course3" id="course3" placeholder="Escolha um sabor">
              </div>
              <div class="field">
              </div>
              <input type="submit" value="Ok">
            </form>
        </div>
</body>
</html>
