<?php
if (isset($_POST['Pilih'])) {
    $makanan = $_POST['makanan'];
    echo "Makanan Favorit Anda Adalah : <b><font color= 'orange'>$makanan</font></b>";
}
