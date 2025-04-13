<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Daftar</title>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <script>
        function sendMessage() {
            // Get form values
            var name = document.getElementById("name2").value;
            var phone = document.getElementById("phone2").value;
            var address = document.getElementById("address").value;
            var pilihProgram = document.getElementById("pilihProgram").value;

            // Format the message with proper encoding
            var message = "Nama  " + encodeURIComponent(name) + "%0A" +
                          "No Hp : " + encodeURIComponent(phone) + "%0A" +
                          "Alamat : " + encodeURIComponent(address) + "%0A" +
                          "Daftar Program yang Diambil : " + encodeURIComponent(pilihProgram) + "%0A%0A";

            // WhatsApp link to send the message
            var whatsappLink = "https://wa.me/6287861674100?text=" + message;

            // Redirect to WhatsApp
            window.open(whatsappLink, '_blank');
        }

        // JavaScript for toggling the navbar in smaller screens
        function toggleNavbar() {
            const navbarLinks = document.querySelector('.nav-links');
            navbarLinks.classList.toggle('active');
        }
    </script>

    <style>
        /* Terapkan box-sizing pada semua elemen */
*,
*::before,
*::after {
    box-sizing: border-box;  /* Pastikan padding dan border tidak mempengaruhi lebar elemen */
}

body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 0;
    display: flex;               /* Membuat body menggunakan flexbox */
    flex-direction: column;      /* Menyusun elemen secara vertikal */
    min-height: 100vh;           /* Membuat body setinggi layar */
    width: 100%;
}

/* Navbar */
.navbar {
    width: 100%; /* Memastikan navbar 100% lebar */
    position: sticky; /* Menggunakan sticky agar tetap di atas saat scrolling */
    top: 0;
    display: flex;
    justify-content: space-between; /* Menambahkan space di antara logo dan menu */
    align-items: center;
    background-color: #98A382;
    padding: 15px;
    border-radius: 15px;
    z-index: 1000;
    box-sizing: border-box; /* Menambahkan box-sizing agar padding tidak mempengaruhi ukuran */
    box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.5);
}

/* Logo */
.logo img {
    width: 120px;
}

/* Navbar links */
.nav-links {
    display: flex;
    gap: 20px;
    transition: transform 0.3s ease-in-out;
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

/* Kontainer gambar dan teks */
.container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    margin-top: 50px;
    gap: 30px;
    padding: 0 20px;
    flex: 1; /* Memastikan konten ini mengambil ruang yang tersedia */
    width: 100%;  /* Pastikan kontainer mengambil lebar penuh */
    box-sizing: border-box;
}

/* Gambar dalam kontainer */
.image-container img {
    width: 100%;
    max-width: 400px;
    border-radius: 15px;
}

/* Desain kontainer teks */
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

/* Judul dan teks */
.text-container h2 {
    font-size: 24px;
    margin-bottom: 20px;
}
.text-container p {
    font-size: 16px;
    margin-bottom: 20px;
}

/* Input field styling */
.input-field {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    background-color: #fff;
}

/* Tombol Kirim */
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

/* Footer Styling */
.footer {
    background-color: #6a705d;
    color: white;
    padding: 40px 20px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    border-radius: 10px;
    box-shadow: 0px -12px 15px rgba(0, 0, 0, 0.5);
    margin-top: 100px;
}
.footer div {
    flex: 1;
    min-width: 200px;
    margin: 10px;
}
.footer h3 {
    margin-bottom: 10px;
    font-size: 18px;
}
.footer p, .footer a {
    font-size: 14px;
    color: white;
    text-decoration: none;
    display: block;
    margin: 5px 0;
}
.footer a:hover {
    text-decoration: underline;
}
.social-icons {
    display: flex;
    gap: 15px;
    margin-top: 10px;
    justify-content: center;
}
.social-icons a {
    font-size: 20px;
    border: 1px solid white;
    padding: 8px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
}
.footer-bottom {
    text-align: center;
    padding-top: 10px;
    font-size: 12px;
    color: rgb(0, 0, 0);
}
.up-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #ff5722;
    color: white;
    border: none;
    padding: 15px;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
}

/* Navbar Toggle (Mobile) */
.navbar .nav-links {
    display: flex;
}

.navbar .nav-links.active {
    display: block;
    position: absolute;
    left: 0;
    top: 60px;
    background-color: #98A382;
    width: 100%;
    padding: 10px;
    border-radius: 15px;
    box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.5);
}

.navbar .nav-links a {
    display: block;
    padding: 10px;
    text-align: center;
}

.navbar .toggle-btn {
    display: none;
    font-size: 25px;
    background-color: transparent;
    border: none;
    color: black;
    cursor: pointer;
}

@media (max-width: 768px) {
    .navbar .nav-links {
        display: none;
    }

    .navbar .toggle-btn {
        display: block;
    }
}

    </style>
</head>
<body>
<div class="navbar">
    <div class="logo">
        <a href="index.php"><img src="img/ss logos.PNG" alt="Logo"></a>
    </div>
    <button class="toggle-btn" onclick="toggleNavbar()">☰</button>
    <div class="nav-links">
        <a href="index.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a>
        <a href="about-me.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'about-me.php') ? 'active' : ''; ?>">About Me</a>
        <a href="about-dev.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'about-dev.php') ? 'active' : ''; ?>">About Dev</a>
        <a href="portofolio.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'portofolio.php') ? 'active' : ''; ?>">Portofolio</a>
        <a href="pertanyaan.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'pertanyaan.php') ? 'active' : ''; ?>">Tanya ?</a>
        <a href="daftar.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'daftar.php') ? 'active' : ''; ?>">Daftar</a>
    </div> 
</div>

    <div class="container">
        <div class="text-container" style="width:100%;">
            <h2 style="text-align: center;">Daftar Sekarang Juga</h2>
             <div class="image-container" style="text-align: center; margin-bottom: 20px;">
                    <img src="img/daftar.PNG" alt="Coding Image" style="max-width: 50%; height: auto;">
            </div>
            <p style="text-align: justify;">Jika Berminat untuk daftar atau melanjutkan langsung saja isi form berikut ini</p>
            
            <form id="contactForm2">
                <label for="name">Nama:</label>
                <input type="text" id="name2" name="name" class="input-field" placeholder="Masukkan nama lengkap" required>
                
                <label for="phone">Nomor HP:</label>
                <input type="text" id="phone2" name="phone" class="input-field" placeholder="Masukkan nomor HP" required>

                <label for="address">Alamat:</label>
                <input type="text" id="address" name="address" class="input-field" placeholder="Masukkan alamat" required>

                <label for="pilihProgram">Pilih Program :</label>
                <div class="input-field" style="color:black;">
                    <input type="radio" name="pilihProgram" id="pilihProgram" value="Ruang Class Web"> Ruang Class Web
                    <input type="radio" name="pilihProgram" id="pilihProgram" value="Ruang Class Baca Tulis Hitung"> Ruang Class Baca Tulis Hitung 
                </div>
            
                <br>
                
                <button type="button" onclick="sendMessage()">Kirim Wa Admin</button>
            </form>
        </div>
    </div>

    <?php
        require("footer.php");
    ?>
</body>
</html>
