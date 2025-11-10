<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 1 - Gerador de Tabuada</title>
        <style>
        body { font-family: sans-serif; margin-left: 20px; }
        h1 { color: #004499; }
        h2 { color: #333; }
        </style>
    </head>
<body>
        <h1>Gerador de Tabuada</h1>
        <?php
        require_once 'funcoes.php';
        $j = 1;
        while($j <=10){
            echo "<h2>Tabuada do  número:$j</h2>";
            for($i = 1; $i <=10; $i++) {
                $minha_tabuada = gerarTabuada($j);  
            }
            echo $minha_tabuada;
            $j++;
        

        }
    
        
        ?>
</body>
</html>