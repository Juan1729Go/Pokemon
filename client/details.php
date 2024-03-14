<?php
//require_once '../services/verify.php';
// Incluir el archivo de la API
require_once '../services/apipoke.php';

// Obtener nombre
$pokemonName = isset($_GET['pokemon']) ? $_GET['pokemon'] : '';
$pokemonDetails = getPokemonDetails($pokemonName);

// Verificar si se proporcionó un nombre y detalle
if (empty($pokemonName)) {
    // Si no se proporciona redirigir a la página de inicio
    header("Location: ../home.php");
    exit;
}
if (!$pokemonDetails) {
    header("Location: ../home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Details - <?php echo ucfirst($pokemonDetails['name']); ?></title>
</head>

<body>
    <h1>Pokémon Details</h1>
    <h2>Name: <?php echo ucfirst($pokemonDetails['name']); ?></h2>
    <h2>Abilities:</h2>

    <ul>
        <?php foreach ($pokemonDetails['abilities'] as $ability): ?>
            <li><?php echo ucfirst($ability['ability']['name']); ?></li>
        <?php endforeach; ?>
    </ul>

    <img src="<?php echo $pokemonDetails['sprites']['front_default']; ?>" alt="Pokemon Image">
    <br>
    
    <a href="../client/home.php">Back to Pokémon List</a>
</body>
</html>
