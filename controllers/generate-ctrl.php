<?php

$currentDateTimeObject = new DateTime();
$formattedCurrentDateTime = $currentDateTimeObject->format("F d, Y");

// Path to JSON file 
$jsonFilePath = __DIR__ . '/../data/statistics.json';

// Read the JSON file content
$jsonString = file_get_contents($jsonFilePath);

// Decode JSON string as an associative array
$data = json_decode($jsonString, true);
$translators = $data['translators'];

// Utilise array_map pour obtenir uniquement les valeurs 'name'
$names = array_map(function($item) {
    return $item['name'];
}, $translators);

// Retire les doublons en fonction de la clé 'name'
$namesUniques = array_unique($names);

// Construit un nouveau tableau sans doublons en fonction de la clé 'name'
$translatorsWithoutDuplicate = [];
foreach ($translators as $item) {
    if (in_array($item['name'], $namesUniques)) {
        $translatorsWithoutDuplicate[] = $item;
        // Supprime la valeur pour éviter de la réajouter
        $namesUniques = array_diff($namesUniques, [$item['name']]);
    }
}

var_dump($translatorsWithoutDuplicate);
die;




// Fonction de comparaison
function comparerParCount($a, $b) {
    return $b['count'] - $a['count'];
}

// Trie le tableau en fonction de la clé 'count'
usort($translators, 'comparerParCount');

// Retire les doublons en fonction de la clé 'count'
$translatorsWithoutDuplicate = array_unique($translators, SORT_REGULAR);

var_dump($translatorsWithoutDuplicate);
die;





// views
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/generateView.php';
include __DIR__ . '/../views/templates/footer.php';