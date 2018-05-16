<html>
<head>       
<?php

    if (!isset($_POST['bilangan1']) || !isset($_POST['bilangan2'])) {
        $bil1 =0;
        $bil2 =0;
        $result = 0;
    }else{
        $bil1 = $_POST["bilangan1"];
        $bil2 = $_POST["bilangan1"];
        $result = $bil1 + $bil2;
    }
    $html = '<form action="prosedural.php" method="post">
    <input name="bilangan1" type="text" value="' . $bil1 . '" />
    <input name="bilangan2" type="text" value="' . $bil2 . '" />
    <input name="hasil" type="text" value="' . $result . '" />
    <input type="submit" value="Convert" /></form>';

    echo $html;
    ?>
    
    </head>

<body>

</body>

 </html>
