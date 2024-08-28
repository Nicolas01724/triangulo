<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular área triângulo</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js"></script>
</head>
<body id="bodt">
    <div id="total">
        <form method="POST">
            <h1>Calcular a área do triângulo</h1>
            <p>Digite o valor da base do triângulo:</p>
            <input type="number" name="base">
            <p>Digite um valor para a altura do triângulo:</p>
            <input type="number" name="altura">
            <button type="submit" name="button" id="bottao">Calcular a área</button>
        </form>
        <div>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["button"])){
                        if(isset($_POST["base"]) and isset($_POST["altura"])){
                            $base = (int) $_POST["base"];
                            $altura = (int) $_POST["altura"];
                            $area = ($base * $altura) /2;
                            echo "<kekw>A área do triângulo é igual a $area</kekws>";
                            if($area > 100){
                                echo "<nicolas>A área $area excedeu o limite de 100.</nicolas>";
                            } else {
                                echo "<jaaj>O limite não foi excedido.</jaaj>";
                            }
                        }    
                    }
                
                }
            ?>
        </div>

    </div>
</body>
</html>