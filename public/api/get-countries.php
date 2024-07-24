<?php
header('Content-Type: application/json');
$file = '../data/countries.json'; // Chemin relatif au fichier JSON

if (file_exists($file)) {
    echo file_get_contents($file);
} else {
    echo json_encode([]);
}
?>
