<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Daftar</title>
    <link rel="stylesheet" href="css/hub.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <script>
        function sendMessage() {
            // Get form values
            var name = document.getElementById("name2").value;
            var phone = document.getElementById("phone2").value;
            var address = document.getElementById("address").value;

            // Format the message with proper encoding
            var message = "Nama: " + encodeURIComponent(name) + "%0A" +
                          "No Hp: " + encodeURIComponent(phone) + "%0A" +
                          "Alamat: " + encodeURIComponent(address) + "%0A%0A" +
                          "DAFTAR PROGRAM DI RUANG CLASS WEB";

            // WhatsApp link to send the message
            var whatsappLink = "https://wa.me/6287861674100?text=" + message;

            // Redirect to WhatsApp
            window.open(whatsappLink, '_blank');
        }
    </script>
</head>
<body>
    <?php
        require("navbar.php");
    ?>

    <div class="container">
        <div class="text-container" style="width:100%;">
            <h2 style="text-align: center;">Daftar Sekarang</h2>
            <p style="text-align: justify;">Jika Berminat untuk daftar atau melanjutkan langsung saja isi form berikut ini</p>
            
            <form id="contactForm2">
                <label for="name">Nama:</label>
                <input type="text" id="name2" name="name" class="input-field" placeholder="Masukkan nama lengkap" required>
                
                <label for="phone">Nomor HP:</label>
                <input type="text" id="phone2" name="phone" class="input-field" placeholder="Masukkan nomor HP" required>

                <label for="address">Alamat:</label>
                <input type="text" id="address" name="address" class="input-field" placeholder="Masukkan alamat" required>
                
                <button type="button" onclick="sendMessage()">Kirim Wa Admin</button>
            </form>
        </div>
    </div>

    <?php
        require("footer.php");
    ?>
</body>
</html>
