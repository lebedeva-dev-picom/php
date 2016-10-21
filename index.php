<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Все классы в одном файле</title>
    </head>
    <body>
        <?php
        require_once 'allClasses.php';
        $a = new Class1();
        $b = new Class2();
        ?>
    </body>
</html>