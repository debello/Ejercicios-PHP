<?


?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>

<body>

<?php
session_start();
session_destroy();
echo "Ha abandonado la página. Pulse <a href='index.html'> aqui</a> para volver al inicio";

?>
    
</body>
</html>