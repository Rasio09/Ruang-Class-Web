<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="css/style.css">
    <script>
    // Fungsi JavaScript untuk menambah kelas aktif jika ada interaksi pengguna
    function setActiveLink(event) {
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.classList.remove('active');
        });
        event.target.classList.add('active');
    }
    </script>
</head>