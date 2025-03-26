<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Contact</title>
    <style>
        /* Style remains the same */
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #98A382;
            padding: 15px;
            border-radius: 15px;
            margin: 10px;
        }
        .logo img {
            width: 120px;
        }
        .nav-links a {
            text-decoration: none;
            padding: 10px 20px;
            color: black;
            font-weight: bold;
            border-radius: 20px;
            transition: 0.3s;
        }
        .nav-links a:hover, .nav-links a.active {
            background-color: #B0FD14;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 50px;
            gap: 30px;
            padding: 0 20px;
        }
        .image-container img {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
        }
        .text-container {
            background-color: #98A382;
            padding: 30px;
            border-radius: 15px;
            color: white;
            text-align: left;
            width: 100%;
            max-width: 600px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .text-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .text-container p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #fff;
        }
        textarea {
            width: 100%;
            height: 120px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #fff;
        }
        button {
            padding: 12px 25px;
            background-color: #B0FD14;
            color: black;
            font-weight: bold;
            border-radius: 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #9cc117;
        }
        footer {
            margin-top: 50px;
            background-color: #98A382;
            color: rgb(37, 37, 37);
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            font-size: 15px;
        }
    </style>
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

    <div class="container">
        <div class="text-container" style="width:100%;">
            <h2 style="text-align: center;">Contact</h2>
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

    <footer>
        copy Fernand 2025
    </footer>
</body>
</html>
