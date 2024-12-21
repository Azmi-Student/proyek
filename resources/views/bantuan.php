<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pusat Bantuan</title>
        <link rel="icon" href="./assets/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="./style/navbar.css">
        <link rel="stylesheet" href="./style/body.css">
        <link rel="stylesheet" href="./style/footer.css">

        <style>
            /* ==================== ISI ======================== */
            .isi {
                display: flex;
                justify-content: center;
            }
            .isi h2 {
                padding: 20px;
            }
            .home:hover {
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <!-- NAVBAR -->
        <div class="navbar">
            <!-- Logo -->
            <a href="#" class="logo"><img src="./assets/logo.png" alt="MamaCare+ Logo">MamaCare+</a>

            <!-- Menu Items -->
            <div class="menu">
                <a class="home" onclick="window.history.back()"><img src="./assets/img_navbar/icon_home.png" alt="Home"> HOME</a>
                <a href="#" class="notif">
                    <img src="./assets/img_navbar/icon_notif.png" alt="Notifikasi"> NOTIF
                    <span class="badge">1</span>
                </a>
                <a href="#"><img src="./assets/img_navbar/icon_profil.png" alt="Profil Mama"> PROFIL MAMA</a>
            </div>
        </div>

        <!-- ISI -->
        <div class="isi">
            <h2>Pusat Bantuan MamaCare+</h2>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br>

        </div>

        <!-- FOOTER -->
        <footer class="footer" id="footer">
            <div class="footer-container">
                <div class="footer-links">
                    <h3>Tentang kami</h3>
                    <a href="dev.html">About Developers</a>
                    <a href="privpol.html">Privacy Policy</a>
                </div>
            </div>
            <div class="footer-social">
                <a href="https://www.instagram.com" target="_blank">
                    <img src="./assets/img_footer/icon_ig.png" alt="Instagram" class="social-icon">
                    @mamacareplus
                </a>
                <a href="mailto:mamacareplus@gmail.com" target="_blank">
                    <img src="./assets/img_footer/icon_mail.png" alt="Email" class="social-icon">
                    mamacareplus@gmail.com
                </a>
            </div>
        </footer>
    </body>
</html>