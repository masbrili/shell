<?php
$url = 'https://raw.githubusercontent.com/masbrili/shell/refs/heads/main/fekrut2.php';

$data = file_get_contents($url);
if ($data === false) {
    die('Gagal mengambil data!');
}

// gunakan $data sebagai teks
echo "Data berhasil dimuat (tanpa disimpan):\n";
echo htmlspecialchars($data);
?>
