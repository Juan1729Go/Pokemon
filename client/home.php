
<?php
require_once '../services/verify.php';
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

    <link rel="stylesheet" href="../style/home.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <div class="welcome">
           <h1>Pokémon List</h1> 
    </div>

    <div class="welcome">
        <form action="../services/logout.php" method="post">
            <button type="submit" class="logout-button">Cerrar Sesión</button>
        </form>
    </div>

    <ul>
        <?php foreach ($pokemonList as $pokemon): ?>
            <li>
                <div class="card">
                    <div class="card-content"> 
                        <a class="pokemon-link" href="?pokemon=<?php echo urlencode($pokemon['name']); ?>">
                            <span class="pokemon-name"><?php echo ucfirst($pokemon['name']); ?></span>
                        </a>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>