<?php $mesa = $_GET['mesa']; ?>
<script>
        // $('form').keypress(function(e) {
        //     if(e.which == 13 || e.keyCode == 13) 
        //         $('#meuBotao').click();
        // });
</script>
<html>
    <head>

        <title>jQuery Autocomplete Plugin</title>
        <style>
            #meuBotao {
                display: none;
            }
        </style>
        <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
        <script type='text/javascript' src="js/jquery.autocomplete.js"></script>
        <link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />
        <script type="text/javascript">
            $().ready(function() {
                $("#course_sabores").autocomplete("autoComplete_sabores.php", {
                    width: 300,
                    matchContains: true,
                    //mustMatch: true,
                    //minChars: 0,
                    //multiple: true,
                    //highlight: false,
                    //multipleSeparator: ",",
                    selectFirst: false
                });
            });

            $().ready(function() {
                $("#course_sabores2").autocomplete("autoComplete_sabores.php", {
                    width: 300,
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
        <div id="content" class="ui form">
            <form autocomplete="off" onsubmit="return false;">
                <div class="ui fluid icon input">
                    <i class="search icon"></i>
                    <input type="text" name="course_sabores" id="course_sabores" placeholder="Sabor 1" autofocus="" />                   
                </div>
                <br>
                <div class="ui fluid icon input">
                    <i class="search icon"></i>
                    <input type="text" name="course_sabores2" id="course_sabores2" placeholder="Sabor 2" autofocus="" />                    
                </div>
                <?php echo '<input value="Selecionar" id="meuBotao" onclick="insereSaboresMesa('.$mesa.')" type="button" />'; ?>
                <br>
                <?php echo '<a href="javascript:void(0);" class="ui teal right floated button" onclick="insereSaboresMesa('.$mesa.')">Selecionar</a>'; ?>
                <br><br>
            </form>
        </div>
        
</body>
</html>
        