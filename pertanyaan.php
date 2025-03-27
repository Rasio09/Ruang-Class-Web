<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Contact</title>
    <link rel="stylesheet" href="css/hub.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php
        require("navbar.php");
    ?>

    <div class="container">
        <div class="image-container">
            <img src="img/dashboard.PNG" alt="Coding Image">
        </div>
        <div class="text-container">
            <h2 style="text-align: center;">Pertanyaan</h2>
            <p style="text-align: justify;">Jika Anda memiliki pertanyaan atau ingin mendaftar, silakan isi formulir kontak di bawah ini untuk menghubungi kami.</p>
            
            <form id="contactForm">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" class="input-field" placeholder="Masukkan nama lengkap" required>
                
                <label for="phone">Nomor HP:</label>
                <input type="text" id="phone" name="phone" class="input-field" placeholder="Masukkan nomor HP" required>
                
                <label for="email">Email (Jika Ada, jika tidak isi dengan (-)):</label>
                <input type="email" id="email" name="email" class="input-field" placeholder="Masukkan email" required>
                
                <label for="question">Tanya:</label>
                <textarea id="question" name="question" class="input-field" placeholder="Tuliskan pertanyaan Anda di sini" required></textarea>
                
                <button type="button" onclick="sendMessage()">Kirim Wa Admin</button>
            </form>
        </div>
    </div>

    <?php
        require("footer.php");
    ?>
</body>
</html>
