
<?php
require_once '../services/verify.php';
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
//if (!$pokemonDetails) {
    //header("Location: ../home.php");
    //exit;
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Details - <?php echo ucfirst($pokemonDetails['name']); ?></title>

    <link rel="stylesheet" href="../style/details.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <div class="welcome">
        <h1>Pokémon Details</h1>
    </div>
    
    <div class="box">
        <div class="dates">
            <div class="dateInfo">
                <h2>Name:</h2><p><?php echo ucfirst($pokemonDetails['name']); ?></p> 
                <h2>Abilities:</h2>
            
                <ul>
                    <?php foreach ($pokemonDetails['abilities'] as $ability): ?>
                        <li><?php echo ucfirst($ability['ability']['name']); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="dateImg">
                <img src="<?php echo $pokemonDetails['sprites']['front_default']; ?>" alt="Pokemon Image">
                <br>
            </div>
        
        </div>
    </div>
    
    <a class="back" href="../client/home.php">Back to Pokémon List</a>
</body>
</html>
