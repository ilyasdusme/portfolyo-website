<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// MySQL bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Form verilerini al
$isim = $_POST['isim'];
$soyisim = $_POST['soyisim'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$mesaj = $_POST['mesaj'];

// Veritabanına ekle
$sql = "INSERT INTO formbilgileri (isim, soyisim, email, telefon, mesaj) VALUES ('$isim', '$soyisim', '$email','$telefon', '$mesaj')";

if ($conn->query($sql) === TRUE) {
     ?>
       <script> alert("mesaj gönderildi."); </script>
    <?php ;
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Bağlantıyı kapat
$conn->close();
?>