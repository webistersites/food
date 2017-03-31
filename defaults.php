<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>defaults</title>
  <meta name="description" content="defaults">
  <meta name="keywords" content="jquery, pagination, javascript, plugin"/>
  <meta name="author" content="Luís Almeida">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/jPages.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/github.css">
  <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="js/highlight.pack.js"></script>
  <script type="text/javascript" src="js/tabifier.js"></script>
  <script src="js/js.js"></script>
  <script src="js/jPages.js"></script>
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28718218-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>
  <script>
  /* when document is ready */
  $(function() {
    /* initiate plugin */
    $("div.holder").jPages({
      containerID: "itemContainer"
    });
  });
  </script>
  <style type="text/css">
  .holder {
    margin: 15px 0;
  }
  .holder a {
    font-size: 12px;
    cursor: pointer;
    margin: 0 5px;
    color: #333;
  }
  .holder a:hover {
    background-color: #222;
    color: #fff;
  }
  .holder a.jp-previous { margin-right: 15px; }
  .holder a.jp-next { margin-left: 15px; }
  .holder a.jp-current, a.jp-current:hover {
    color: #FF4242;
    font-weight: bold;
  }
  .holder a.jp-disabled, a.jp-disabled:hover {
    color: #bbb;
  }
  .holder a.jp-current, a.jp-current:hover,
  .holder a.jp-disabled, a.jp-disabled:hover {
    cursor: default;
    background: none;
  }
  .holder span { margin: 0 5px; }
  </style>
</head>
<body>

  <div id="container" class="clearfix">
    
    <div id="content" class="defaults">
      <h2>Defaults</h2>

      <!-- navigation holder -->
      <div class="holder">
      </div>
      <!-- item container -->
      <ul id="itemContainer">
        <li><img src="img/img (1).jpg" alt="image"></li>
        <li><img src="img/img (2).jpg" alt="image"></li>
        <li><img src="img/img (3).jpg" alt="image"></li>
        <li><img src="img/img (4).jpg" alt="image"></li>
        <li><img src="img/img (5).jpg" alt="image"></li>
        <li><img src="img/img (6).jpg" alt="image"></li>
        <li><img src="img/img (7).jpg" alt="image"></li>
        <li><img src="img/img (8).jpg" alt="image"></li>
        <li><img src="img/img (9).jpg" alt="image"></li>
        <li><img src="img/img (10).jpg" alt="image"></li>
        <li><img src="img/img (11).jpg" alt="image"></li>
        <li><img src="img/img (12).jpg" alt="image"></li>
        <li><img src="img/img (13).jpg" alt="image"></li>
        <li><img src="img/img (14).jpg" alt="image"></li>
        <li><img src="img/img (15).jpg" alt="image"></li>
        <li><img src="img/img (16).jpg" alt="image"></li>
        <li><img src="img/img (17).jpg" alt="image"></li>
        <li><img src="img/img (18).jpg" alt="image"></li>
        <li><img src="img/img (19).jpg" alt="image"></li>
        <li><img src="img/img (20).jpg" alt="image"></li>
       
      </ul>
      <!-- navigation holder -->
      <div class="holder">
      </div>
    </div>
    <!--! end of #content -->
  </div>
  <!--! end of #container -->

</body>
</html>
