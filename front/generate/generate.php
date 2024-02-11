<?php

require_once __DIR__ . '/view-utils.php';

$currentDateTimeObject = new DateTime();
$formattedCurrentDateTime = $currentDateTimeObject->format("F d, Y");

// Path to JSON file 
$jsonFilePath = __DIR__ . '/../data/statistics.json';

// Read the JSON file content
$jsonString = file_get_contents($jsonFilePath);

// Decode JSON string as an associative array
$data = json_decode($jsonString, true);
$translators = $data['translators'];
$languages = $data ['languages'];


function compareByCount($a, $b)
{
    return $b['count'] - $a['count'];
}

function compareByPercent($a, $b)
{
    return $b['percent'] - $a['percent'];
}


// Sort the associative array using the comparison function
usort($translators, 'compareByCount');
usort($languages, 'compareByPercent');


// Obtain the 'name' values from "translators" array 
$names = array_map(function ($item) {
    return $item['name'];
}, $translators);

// Remove duplicates based on the 'name' key
$namesUniques = array_unique($names);

foreach ($translators as $index => $item) {
    // Check if the 'name' of the current translator is in the unique names array
    if (in_array($item['name'], $namesUniques)) {
        // Exclude the first 10 translators based on 'count'

        // Add the current translator to the new array without duplicates
        $translatorsWithoutDuplicate[] = $item;
        // Remove the 'name' value to avoid adding it again
        $namesUniques = array_diff($namesUniques, [$item['name']]);
    }
}

// construct a new array without duplicates based on the 'name' key
$translatorsPionner = [];
$translatorsBackpacker = [];
$translatorsAdventurer = [];
$translatorsExplorer = [];
$translatorsTraveler = [];

foreach ($translatorsWithoutDuplicate as $key => $item) {
    if ($key > 9) {
        // processing the 10th value and beyond
        if ($item['count'] > 20000) {
            $translatorsPionner[] = $item;
        } else if ($item['count'] > 8500) {
            $translatorsExplorer[] = $item;
        } else if ($item['count'] > 5000) {
            $translatorsAdventurer[] = $item;
        } else if ($item['count'] > 2500) {
            $translatorsBackpacker[] = $item;
        } else if ($item['count'] > 500) {
            $translatorsTraveler[] = $item;
        }
    }
}

// views
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/body.php';
include __DIR__ . '/../views/templates/footer.php';
