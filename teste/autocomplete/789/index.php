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
                $("#course").autocomplete("autoComplete.php", {
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
        <script type="text/javascript" src="ajax.js"></script>

    </head>
    <body>
        <div id="content" class="ui form">
            <form autocomplete="off" onsubmit="return false;" name="form_cod" id="form_cod" >
                <div class="inline fields">
                    <div class="four wide field">
                    <div class="ui fluid icon input">
                    <i class="search icon"></i>
                    <input type="text" name="course-id" id="course-id" placeholder="cód" autofocus="" onfocus="this.value='';"/>
                </div>
                </div>
                <div class="ten wide field">
                    <div class="ui fluid icon input">
                    <i class="search icon"></i>
                    <input type="text" name="course" id="course" placeholder="busque por cód. ou nome..." onfocus="this.value='';"/>
                </div>
                </div>
                <input value="Inserir" id="meuBotao" class="ui basic button" onclick="insertData();reset();" type="submit" />
                <input value="Ok" id="meuBotao" onclick="insertDataCod()" type="hidden" />
            </div>
                
                
                
            </form>
        </div>
        
</body>
</html>