<?php
// Ganti password di baris ini
$password_yang_diinginkan = 'guest123';

$hash_baru = password_hash($password_yang_diinginkan, PASSWORD_DEFAULT);

echo 'Salin dan tempel (paste) kode hash di bawah ini ke kolom password di database Anda:';
echo '<br><br>';
echo '<strong style="font-size: 1.2em; color: green;">' . $hash_baru . '</strong>';
?>