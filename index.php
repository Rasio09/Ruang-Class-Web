<?php
$title = "Ruang Class Web";
require("header.php");

?>

<body>
    <?php
        require("navbar.php");
    ?>
    <div class="container">
        <div class="image-container">
            <img src="img/dashboard.PNG" alt="Coding Image"> <!-- Sesuaikan dengan file gambar utama -->
        </div>
        <div class="text-container">
            <h1 style="text-align:center;">Ruang <span style="color:black; font-weight: 900;">Class</span> Web</h1>
            <p style="text-align: justify; text-indent: 30px; margin-bottom: 10px;">
                Ruang Class Web Merupakan Website sekaligus Portofolio yang mulai untuk dikembangkan untuk mengetahui kumpulan apa saja produk yang mulai atau website yang sudah selesai dikembangkan.
                </p>
                <p style="text-align: justify; text-indent: 30px; margin-top: 0; margin-bottom: 10px;">
                Namun tidak menutup kemungkinan juga web ini dikembangkan juga untuk mewadahi anak-anak yang ingin terjun ke pemrograman website. Dimana anak-anak mulai dari usia 10 tahun ke atas.
                </p>
            <a href="daftar.php" class="contact-btn" style="margin-top: 20px; margin-left: 400px;">Contact Me</a>
        </div>
    </div>

    <div class="container">
        <div class="image-container">
            <img src="img/ruang_class_web.png" alt="Coding Image"> <!-- Sesuaikan dengan file gambar utama -->
        </div>
        <div class="text-container">
            <h2>About Me Ruang Class Web</h2>
            <p style="text-align:justify; text-indent: 30px;">Ruang Class Web adalah pelatihan atau course untuk pengetahuan anak dalam belajar mengembangkan pemrograman website sederhana. Serta mempersiapkan anak untuk menjadi seorang developer website baik FE (Front End) ataupun BE (Back End). Ruang Class Web ini diperuntukan anak mulai umur 10 tahun ke atas.</p>
            <h4>BENEFIT : </h4>
            <ul>
                <li>Materi yang dirancang mudah dipahami oleh anak</li>
                <li>Modul Materi</li>
                <li>Kalau ada event lomba (bisa mendampingi)</li>
                <li>Materi terbarukan</li>
                <li>Implementasi AI (Artificial Intelegence)</li>
            </ul>
            <h4>Syarat Pendaftaran :</h4>
            <ul>
                <li>Wajib memiliki laptop sendiri</li>
                <li>Mulai anak berumur 10 tahun keatas</li>
            </ul>
            <a href="daftar.php" class="contact-btn" style="margin-top: 20px; margin-left: 400px;">Segera Daftar</a>
        </div>
    </div>

    <div class="container">
        <div class="image-container">
            <img src="img/ruang_baca_tulis.png" alt="Coding Image"> <!-- Sesuaikan dengan file gambar utama -->
        </div>
        <div class="text-container">
            <h2>About Me Ruang Class Baca Tulis Hitung</h2>
            <p style="text-align:justify; text-indent: 30px;">Ruang Class Baca Tulis Hitung adalah les-les an diperuntukan anak-anak diluar jam sekolah untuk mengajarkan kepada anak membaca, menulis dan menghitung. Ruang Class Baca Tulis Hitung anak mulai umur 6 tahun ke atas atau anak yang sudah mulai memasuki jenjang pendidikan SD (Sekolah Dasar).</p>
            <h4>Syarat Pendaftaran :</h4>
            <ul>
                <li>Anak berumur 6 tahun keatas</li>
                <li>Anak sudah sekolah pada jenjang SD (Sekolah Dasar)</li>
            </ul>
            <a href="daftar.php" class="contact-btn" style="margin-top: 20px; margin-left: 400px;">Segera Daftar</a>
        </div>
    </div>

    <div class="container" style="text-align: center;">
        <div class="text-container" style="display: inline-block; text-align: left;">
            <div class="image-container" style="text-align: center; margin-bottom: 20px;">
                <img src="img/edutk.PNG" alt="Coding Image" style="max-width: 100%; height: auto;">
            </div>
            <h2 style="text-align: center;">WEBSITE PORTOFOLIO</h2>
            <p style="text-align: justify; text-indent: 30px;">
                Website EDUTK GAMES merupakan website yang dikembangkan untuk membuat beberapa game menjadi satu website saja yang mudah diakses oleh user pengguna. user pengguna pada web ini adalah ditujukan anak-anak mulai sekolah pada jenjang TK (Taman Kanak-Kanak). fitur-fitur dalam game ini ada game anak yang bisa dimainkan mulai dari menghubungkan objek, berhitung, menangkap angka, dan lainnya. lalu fitur lainnya juga seperti user atau pengguna bisa langsung melakukan review hingga request game yang dikembangkan kepada developer.
            </p>
            <a href="portofolio.php" class="contact-btn" style="margin-top: 20px; margin-left: 430px;">Lihat All</a>
        </div>
    </div>


    <div class="container" style="display: flex; justify-content: center; align-items: flex-start; margin-top: 50px; gap: 30px; padding: 0 20px; flex: 1; width: 100%; box-sizing: border-box;">
        <div class="text-container" style="background-color: #98A382; padding: 30px; border-radius: 15px; color: white; text-align: left; width: 100%; max-width: 600px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <h2 style="font-size: 24px; margin-bottom: 20px; text-align: center;">Daftar Sekarang</h2>
            <div class="image-container" style="text-align: center; margin-bottom: 20px;">
                    <img src="img/daftar.PNG" alt="Coding Image" style="max-width: 50%; height: auto;">
            </div>
            <p style="font-size: 16px; margin-bottom: 20px; text-align: justify;">Jika Berminat untuk daftar atau melanjutkan langsung saja isi form berikut ini</p>
            
            <form id="contactForm2">
                <label for="name" style="font-size: 16px; margin-bottom: 5px;">Nama:</label>
                <input type="text" id="name2" name="name" class="input-field" placeholder="Masukkan nama lengkap" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; background-color: #fff;">
                
                <label for="phone" style="font-size: 16px; margin-bottom: 5px;">Nomor HP:</label>
                <input type="text" id="phone2" name="phone" class="input-field" placeholder="Masukkan nomor HP" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; background-color: #fff;">

                <label for="address" style="font-size: 16px; margin-bottom: 5px;">Alamat:</label>
                <input type="text" id="address" name="address" class="input-field" placeholder="Masukkan alamat" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; background-color: #fff;">
                
                <button type="button" onclick="sendMessage()" style="padding: 12px 25px; background-color: #B0FD14; color: black; font-weight: bold; border-radius: 20px; border: none; cursor: pointer; transition: background-color 0.3s;">Kirim Wa Admin</button>
            </form>
        </div>
    </div>

    <?php
        require("footer.php");
    ?>
</body>
</html>
