<?php
if (isset($_POST['Pilih'])) {
    $lagu = $_POST['lagu'];
    echo " Lagu Favorit Anda Adalah : <b><font color= 'red'>$lagu</font></b>";
}
