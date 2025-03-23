<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            text-align: center;
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
            position: fixed;
            top: 0; /* Memastikan navbar berada di atas */
            left: 0;
            width: 100%; /* Navbar mengisi seluruh lebar layar */
            z-index: 1000; /* Memastikan navbar tetap di atas elemen lain */
        }

        .logo img {
            width: 120px; /* Sesuaikan ukuran logo navbar */
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
            align-items: center;
            gap: 30px; /* Menambahkan jarak antara gambar dan deskripsi */
            margin-top: 100px;
        }
        .image-container img {
            width: 300px; /* Sesuaikan ukuran gambar */
        }
        .text-container {
            background-color: #98A382;
            padding: 20px;
            border-radius: 15px;
            color: white;
            text-align: left;
            width: 50%;
            height: 250px;
        }
        .contact-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #B0FD14;
            color: black;
            font-weight: bold;
            border-radius: 20px;
            text-decoration: none;
            transition: 0.3s;
        }
        .contact-btn:hover {
            background-color: #B0FD14;
        }
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #98A382;
            color: rgb(37, 37, 37);
            padding: 10px;
            border-radius: 10px;
            font-size: 15px;
            text-align: center;
        }
    </style>
    <script>
        function setActiveLink(event) {
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.classList.remove('active');
            });
            event.target.classList.add('active');
        }
    </script>
</head>