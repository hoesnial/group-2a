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
        max-width: 150px; 
    }

    .footer-logo .textfooter {
        line-height: 1.5; 
    }

    .footer-links {
        flex: 2;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .footer-links .column {
        line-height: 1.5; 
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
        cursor: pointer; 
    }
</style>

<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="images/logo.png" alt="Logo"> 
            <p class="textfooter">Luarsekolah merupakan wadah belajar <br>dan mengajar pelajaran non-formal/
                <br>alternatif dengan cara menyediakan <br> kelas pengajaran dalam bentuk online<br> dan offline</p>
        </div>

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

        <div class="footer-playstore">
            <a href="https://play.google.com/store/apps/details?id=com.luarsekolah.mobile" target="_blank">
                <img src="images/googleplay.png" alt="Google Play">
            </a>
        </div>

        <div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
            <p style="font-family: Poppins, sans-seriff; font-weight: 500; font-size: 16px; color: #4B5563;">PT Teknologi Edukasi Indonesia</p>
            <p style="font-family: Poppins, sans-seriff; font-weight: 500; font-size: 16px; color: #4B5563;">Copyright ©2022 • All Rights Reserved</p>
        </div>
    </div>
</footer>
