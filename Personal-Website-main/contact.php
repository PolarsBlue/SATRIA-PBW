<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $subjek = htmlspecialchars($_POST["subjek"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

    $to = "satriapanca29@gmail.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $body = "Nama: $nama\nEmail: $email\nSubjek: $subjek\n\nPesan:\n$pesan";

    if (mail($to, $subjek, $body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Pesan gagal dikirim.";
    }
} else {
    echo "Akses tidak valid.";
}
?>
