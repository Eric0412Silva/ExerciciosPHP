<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Vogal ou Consoante</title>
</head>
<body>

<form method="post" action="">
    <label for="letra">Digite uma letra:</label>
    <input type="text" id="letra" name="letra" maxlength="1" required>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $letra = strtoupper($_POST["letra"]);

    
    if (ctype_alpha($letra) && strlen($letra) === 1) {
        
        if (in_array($letra, array('A', 'E', 'I', 'O', 'U'))) {
            echo "<p>A letra $letra é uma vogal.</p>";
        } else {
            echo "<p>A letra $letra é uma consoante.</p>";
        }
    } else {
        echo "<p>Por favor, digite uma única letra válida.</p>";
    }
}
?>

</body>
</html>