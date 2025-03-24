<div class="navbar">
    <div class="logo">
        <a href="index.php"><img src="img/ss logos.PNG" alt="Logo"></a>
    </div>
    <div class="nav-links">
        <a href="index.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a>
        <a href="about-me.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'about-me.php') ? 'active' : ''; ?>">About Me</a>
        <a href="portofolio.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'portofolio.php') ? 'active' : ''; ?>">Portofolio</a>
        <a href="contact.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">Contact</a>
    </div> 
</div>
