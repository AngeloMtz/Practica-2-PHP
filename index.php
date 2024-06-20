<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Conversor de sistemas numericos</title>
</head>
<body>
    <div class="container">
        <h1>Conversor de Sistemas Numéricos</h1>
        <form method="post" action="">
            <label for="decimal">Introduce un número decimal:</label>
            <input type="number" name="decimal" id="decimal" required>
            <label for="conversion">Elige el sistema de conversión:</label>
            <select name="conversion" id="conversion" required>
                <option value="binario">Decimal a Binario</option>
                <option value="octal">Decimal a Octal</option>
                <option value="hexadecimal">Decimal a Hexadecimal</option>
            </select>    
            <input type="submit" name="submit" value="Convertir">
        </form>

        <?php
        if (isset($_POST['submit'])) 
        {
            $decimal = $_POST['decimal'];
            $conversion = $_POST['conversion'];

            function convertir($decimal, $conversion) 
            {
                switch ($conversion) 
                {
                    case 'binario':
                        return decbin($decimal);
                    case 'octal':
                        return decoct($decimal);
                    case 'hexadecimal':
                        return dechex($decimal);
                    default:
                        return "Conversión no válida";
                }
            }
            $resultado = convertir($decimal, $conversion);
            echo "<div class='result'><h3>Resultado:</h3>";
            echo "<p>$decimal convertido a $conversion es: $resultado</p></div>";
        }
        ?>
    </div>
</body>
</html>