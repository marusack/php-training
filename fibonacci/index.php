<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP INFO: Sucesion de Fibonacci</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <?php require 'function.php'; $cant = 20; ?> 
            <ul>
                <?php if ((isset($_GET['limit']))) {
                        foreach (fibonacci($cant + $_GET['limit']) as $key => $value){
                            echo "<li>$value</li>";
                        }
                        $cant = $cant + $_GET['limit'];
                } else {
                    foreach (fibonacci($cant) as $key => $value){
                        echo "<li>$value</li>";
                        }
                } ?>
            </ul>
            <center><a href="index.php?limit=20">More</a></center>
        </div> 
    </body>
</html>
