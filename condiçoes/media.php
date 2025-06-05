<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $notas= [2.2, 4, 6, 2.5, 7, 5.6, 9, 10, 8.4, 4.5];
    $soma = 0;
    foreach ($notas as $nota){
        $soma += $nota;
    }
    $media = $soma/ count($notas);
    if ($media < 5){
        echo "Voce está abaixo da média".$media."<br>Estude mais!";;
    }
    elseif ($media == 6){
        echo "Voce está na média".$media;
    }
    else{
        echo "Voce está acima da média".$media;
    }
?>  
</body>
</html>