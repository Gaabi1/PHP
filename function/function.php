<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    function calc_media($n1, $n2){
        return ($n1 + $n2)/2;
    }
    $aluno = array("João", 9.3, 7.6);

    $media= calc_media($aluno[1], $aluno[2]);

    echo $aluno[0]." tem média igual a ".$media;
?>
</body>
</html>