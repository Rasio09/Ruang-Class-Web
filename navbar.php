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