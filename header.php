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
</head>