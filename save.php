<?php
// Empfängt die JSON-Daten von deinem Admin-Panel
$json = file_get_contents('php://input');

if($json) {
    // Schreibt die Daten in die Datei
    file_put_contents('data.json', $json);
    echo json_encode(["status" => "Erfolgreich gespeichert"]);
} else {
    echo json_encode(["status" => "Fehler: Keine Daten empfangen"]);
}
?>

