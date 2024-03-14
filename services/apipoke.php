<?php

// Función para obtener la información
function getPokemonInfo($pokemonName) {
    $apiUrl = "https://pokeapi.co/api/v2/pokemon/$pokemonName";
    $api = curl_init($apiUrl);

    // Configurar las opciones de cURL
    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($api);

    // Cerrar la sesión cURL
    curl_close($api);

    // Decodificar 
    $pokemonData = json_decode($response, true);

    return $pokemonData;
}

// obtener la lista 
function getAllPokemon() {
    $apiUrl = "https://pokeapi.co/api/v2/pokemon?limit=1000"; // Obtenemos los primeros 1000 Pokémon

    $api = curl_init($apiUrl);

    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($api);

    curl_close($api);

    $pokemonList = json_decode($response, true);

    return $pokemonList['results'];
}

// Obtener el nombre
$pokemonName = isset($_GET['pokemon']) ? $_GET['pokemon'] : '';

// Verificar
if (!empty($pokemonName)) {
    // Obtener la información
    $pokemonInfo = getPokemonInfo($pokemonName);

    // Devolver los datos
    $pokemonData = array(
        'name' => $pokemonInfo['name'],
        'abilities' => $pokemonInfo['abilities'],
        'sprites' => $pokemonInfo['sprites']
    );

    // Devolver los datos
    return $pokemonData;
} else {
    // mensaje de error
    echo "Por favor, proporcione el nombre de un Pokémon.";
}

// Función para obtener los detalles 
function getPokemonDetails($pokemonName) {
    $apiUrl = "https://pokeapi.co/api/v2/pokemon/$pokemonName";

    $api = curl_init($apiUrl);

    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($api);

    curl_close($api);

    $pokemonData = json_decode($response, true);

    return $pokemonData;
}