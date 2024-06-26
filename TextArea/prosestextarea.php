<?php
if (isset($_POST['Proses'])) {
    $pesan = nl2br($_POST['pesan']);
    echo "Pesan dan Kesan Anda Adalah : <br>";
    echo "<b><font color= 'blue'>$pesan</font></b>";
}
