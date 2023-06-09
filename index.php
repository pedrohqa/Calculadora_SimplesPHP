<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora Simples</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body bgcolor="#A7CFEE">
    <div class="cal">
        <h1>Calculadora Simples</h1>
        <form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method="post">
            <label for="num1">Num1:</label>
            <input type="text" name="num1">
            <label for="num2">Num2:</label>
            <input type="text" name="num2">
            <br>
            <input type="radio" id="soma" name="calculo" value="Soma">
            <label for="soma">Soma</label><br>
            <input type="radio" id="subtracao" name="calculo" value="Subtração">
            <label for="subtracao">Subtração</label><br>
            <input type="radio" id="multiplicaçao" name="calculo" value="Multiplição">
            <label for="multipliçao">Multiplição</label><br>
            <input type="radio" id="divisao" name="calculo" value="Divisão">
            <label for="divisao">Divisão</label><br>
            <input type="submit"class="bot">
            <input type="reset" value="Reset" class="bot">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                // Verifica se os campos foram preenchidos
                if (isset($_POST["num1"]) && isset($_POST["num2"])) {
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];

                    if (is_numeric($num1) && is_numeric($num2)) {
                        $operacao = $_POST["calculo"];
                        $total = 0;

                        // Calcula o resultado da operação
                        switch ($operacao) {
                            case "Soma":
                                $total = $num1 + $num2;
                                echo "<h2>$num1 + $num2 = $total</h2>";
                                break;
                            case "Subtração":
                                $total = $num1 - $num2;
                                echo "<h2>$num1 - $num2 = $total</h2>";
                                break;
                            case "Multiplição":
                                $total = $num1 * $num2;
                                echo "<h2>$num1 x $num2 = $total</h2>";
                                break;
                            case "Divisão":
                                $total = $num1 / $num2;
                                echo "<h2>$num1 / $num2 = $total</h2>";                     
                                break;
                            default:
                                echo "<h2>Operação inválida</h2>";
                                break;
                        }
                    } else {
                        echo "<h2>Preencha os campos com valores numéricos</h2>";
                    }
                } else {
                    echo "<h2>Preencha todos os campos</h2>";
                }
            }
        ?>
    </div>
</body>
</html>
