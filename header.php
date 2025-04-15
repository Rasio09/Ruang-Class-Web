<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="css/style.css?<?= time() ?>">
    <script>
    // Fungsi JavaScript untuk menambah kelas aktif jika ada interaksi pengguna
    function setActiveLink(event) {
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.classList.remove('active');
        });
        event.target.classList.add('active');
    }
    </script>

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

    <script>
        // JavaScript for toggling the navbar in smaller screens
        function toggleNavbar() {
            const navbarLinks = document.querySelector('.nav-links');
            navbarLinks.classList.toggle('active');
        }
    </script>

</head>