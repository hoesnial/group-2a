<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    footer {
        background-color: white;
        color: #4B5563;;
        padding: 40px 0;
    }

    .footer-container {
        max-width: 1200px;
        margin: 30px auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        background-color: white;
    }

    .footer-logo {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-right: 40px;
    }

    .footer-logo img {
        max-width: 150px; /* Ganti dengan ukuran logo Anda */
    }

    .footer-logo .textfooter {
        line-height: 1.5; /* Menambahkan line-height untuk merenggangkan baris */
    }

    .footer-links {
        flex: 2;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .footer-links .column {
        line-height: 1.5; /* Menambahkan line-height untuk merenggangkan baris */
        flex: 1;
        margin-right: 40px;
    }

    .footer-links .column:last-child {
        margin-right: 0;
    }

    .footer-links h3 {
        font-size: 18px;
        margin-bottom: 10px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .footer-links ul {
        list-style: none;
        padding: 0;
    }

    .footer-links ul li {
        margin-bottom: 10px;
    }

    .footer-links ul li a {
        color: #4B5563;;
        text-decoration: none;
        font-size: 16px;
    }

    .footer-links ul li a:hover {
        text-decoration: underline;
    }

    .footer-playstore {
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1;
    }

    .footer-playstore img {
        max-width: 150px;
        cursor: pointer; /* Menambahkan cursor pointer agar pengguna tahu itu bisa diklik */
    }

    /* Footer Bottom */
    .footer-bottom {
        width: 100%;
        display: flex;
        justify-content: space-between; /* Mengatur konten di kiri dan kanan */
        font-size: 14px;
        color: #4B5563;
        margin-top: 20px;
        padding: 0 20px; /* Memberikan padding untuk jarak dari tepi */
    }

    .footer-bottom ul {
        display: flex;
        padding: 0;
        margin: 0;
    }

    .footer-bottom ul li {
        list-style: none;
    }

    /* Untuk teks di pojok kiri */
    .footer-bottom .left {
        margin-left: 0;
    }

    /* Untuk teks di pojok kanan */
    .footer-bottom .right {
        margin-left: 700px;
    }
</style>

<footer>
    <div class="footer-container">
        <!-- Logo -->
        <div class="footer-logo">
            <img src="images/logo.png" alt="Logo"> <!-- Ganti dengan path logo Anda -->
            <p class="textfooter">Luarsekolah merupakan wadah belajar <br>dan mengajar pelajaran non-formal/
                <br>alternatif dengan cara menyediakan <br> kelas pengajaran dalam bentuk online<br> dan offline</p>
        </div>

        <!-- Link Sections -->
        <div class="footer-links">
            <!-- Column 1 -->
            <div class="column">
                <ul>
                <li><a href="http://localhost/group-2a/index.php">Tentang Kami</a></li>
                    <li><a href="https://www.luarsekolah.com/article">Blog</a></li>
                    <li><a href="https://www.luarsekolah.com/promo">Promo</a></li>
                    <li><a href="https://www.luarsekolah.com/bantuan/pembelian-pelatihan">Bantuan</a></li>
                    <li><a href="https://www.luarsekolah.com/komunitas">Komunitas</a></li>
                </ul>
            </div>

            <!-- Column 2 -->
            <div class="column">
                <ul>
                    <li><a href="https://magang.luarsekolah.com/">Luar Sekolah</a></li>
                    <li><a href="https://magang.luarsekolah.com/">Magang+</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="column">
                <ul>
                    <li><a href="https://www.luarsekolah.com/komunitas#">Ajukan Penawaran</a></li>
                    <li><a href="https://www.luarsekolah.com/pages#terms-of-use">Syarat dan <br> Ketentuan</a></li>
                    <li><a href="https://www.luarsekolah.com/pages#privacy-policy">Kebijakan Privasi</a></li>
                </ul>
            </div>
        </div>

        <!-- Google Play Logo as a Button -->
        <div class="footer-playstore">
            <a href="https://play.google.com/store/apps/details?id=com.luarsekolah.mobile" target="_blank">
                <img src="images/googleplay.png" alt="Google Play">
            </a> <!-- Ganti dengan path logo Google Play -->
        </div>

        <div class="footer-bottom">
        <ul>
            <!-- Left side -->
            <li class="left">PT Teknologi Edukasi Indonesia.</li>
            <!-- Right side -->
            <li class="right">Copyright &copy;2022 All Rights Reserved.</li>
        </ul>
    </div>
    </div>
</footer>
