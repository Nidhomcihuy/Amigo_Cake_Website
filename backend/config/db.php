<?php
require __DIR__ . '/../../vendor/autoload.php'; // pastikan path benar

try {
    // Koneksi ke MongoDB
    $client = new MongoDB\Client("mongodb://localhost:27017");

    // Pilih database
    $db = $client->amigodb; // nama database

} catch (Exception $e) {
    die("Koneksi MongoDB gagal: " . $e->getMessage());
}
?>
