<html>
<head>
  <?php
    include("classes/DBManager.php");
   ?>
   <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <title>AOV</title>
</head>
<body>
  <?php
    $connection = new DBManager("localhost","root","","aov");
   ?>
   <div class="boton">Test</div>
</body>
</html>
