<?php
// Incluir la clase Calculadora
require_once 'Calculadora.php';

// Inicializar la calculadora
$calculadora = new App\Calculadora();

// Inicializar variables
$resultado = null;
$error = null;

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $operador = $_POST['operador'];

    try {
        switch ($operador) {
            case '+':
                $resultado = $calculadora->suma($num1, $num2);
                break;
            case '-':
                $resultado = $calculadora->resta($num1, $num2);
                break;
            case '*':
                $resultado = $calculadora->multiplicacion($num1, $num2);
                break;
            case '/':
                $resultado = $calculadora->division($num1, $num2);
                break;
            case 'sqrt':
                $resultado = $calculadora->raizCuadrada($num1);
                break;
            default:
                $error = "Operador no válido.";
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP</title>
</head>
<body>
    <h1>Calculadora Simple</h1>
    <form method="post">
        <input type="number" name="num1" required placeholder="Número 1">
        <select name="operador" required>
            <option value="+">Sumar</option>
            <option value="-">Restar</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
            <option value="sqrt">Raíz Cuadrada</option>
        </select>
        <input type="number" name="num2" placeholder="Número 2">
        <input type="submit" value="Calcular">
    </form>
    
    <?php if ($resultado !== null): ?>
        <h2>Resultado: <?php echo $resultado; ?></h2>
    <?php endif; ?>
    <?php if ($error !== null): ?>
        <h2 style="color:red;">Error: <?php echo $error; ?></h2>
    <?php endif; ?>
</body>
</html>
