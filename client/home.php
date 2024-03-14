
<?php
//require_once '../services/verify.php';
// Incluir API
require_once '../services/apipoke.php';

// Obtener nombre
$pokemonName = isset($_GET['pokemon']) ? $_GET['pokemon'] : '';

// Verificar si es válido
if (!empty($pokemonName)) {
    // Redirigir a la página de detalles 
    header("Location: ../client/details.php?pokemon=" . urlencode($pokemonName));
    exit;
}

// Obtener la lista
$pokemonList = getAllPokemon();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon List</title>
</head>
<body>
    <h1>Pokémon List</h1>
    <ul>
        <?php foreach ($pokemonList as $pokemon): ?>
            <li>
                <a href="?pokemon=<?php echo urlencode($pokemon['name']); ?>">
                    <?php echo ucfirst($pokemon['name']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
