
<html>
    <head>

        <title>jQuery Autocomplete Plugin</title>
        <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
        <script type='text/javascript' src="js/jquery.autocomplete.js"></script>
        <link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />
        <script type="text/javascript">
            $().ready(function() {
                $("#course").autocomplete("autoComplete.php", {
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
    </head>
    <body>
        <div id="content" class="ui form">
            <form autocomplete="off" action="insere_prod_mesas_search.php">
                <div class="ui fluid icon input">
                    <i class="search icon"></i>
                    <?php echo '<input type="hidden" name="mesa" id="mesa" value="'.$id_mesa.'">'; ?>
                    <input type="text" name="course" id="course" placeholder="busque por cód. ou nome..." autofocus=""/>
                </div>

            </form>
        </div>
</body>
</html>
