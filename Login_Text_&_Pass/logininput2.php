<?php
if (isset($_POST['Login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "rakha" && $pass == "nananina") {
        echo "<h2>Login Berhasil, Selamat!!</h2>";
    } else {
        echo "<h2>Login Gagal, Coba Ulang Kembali</h2>";
    }
}
