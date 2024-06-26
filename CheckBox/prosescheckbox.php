<?php
if (isset($_POST['Pilih'])) {
    echo "Tiktokers Favorit Anda Adalah : <br>";
    if (isset($_POST['tiktok1'])) {
        echo "- " . $_POST['tiktok1'] . "<br>";
    }
    if (isset($_POST['tiktok2'])) {
        echo "- " . $_POST['tiktok2'] . "<br>";
    }
    if (isset($_POST['tiktok3'])) {
        echo "- " . $_POST['tiktok3'] . "<br>";
    }
    if (isset($_POST['tiktok4'])) {
        echo "- " . $_POST['tiktok4'] . "<br>";
    }
    if (isset($_POST['tiktok5'])) {
        echo "- " . $_POST['tiktok5'] . "<br>";
    }
}
