<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuarSekolah</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

<?php include('navbar.php'); ?>

<div class="city-container">
        <div class="" style="font-family: Nunito, sans-seriff; font-weight: bold; font-size: 36px; color: #00CC99; width: 100%; text-align: center;">Dampak Nyata, Mewujudkan Perubahan</div>
        <div class="grid-city">
            <div class="grid-item">
                <p style="font-family: Nunito, sans-seriff; font-weight: bold; font-size: 32px; color: #111827;">250.000+</p>
                <p style="font-family: Nunito, sans-seriff; font-weight: 500; font-size: 16px; color: #4B5563;">pengguna telah belajar bersama kami</p>
            </div>
            <div class="grid-item">
                <p style="font-family: Nunito, sans-seriff; font-weight: bold; font-size: 32px; color: #111827;">100+</p>
                <p style="font-family: Nunito, sans-seriff; font-weight: 500; font-size: 16px; color: #4B5563;">program relevan untuk masa depan</p>
            </div>
            <div class="grid-item">
                <p style="font-family: Nunito, sans-seriff; font-weight: bold; font-size: 32px; color: #111827;">10.000+</p>
                <p style="font-family: Nunito, sans-seriff; font-weight: 500; font-size: 16px; color: #4B5563;">telah berhasil mendapatkan pekerjaan</p>
            </div>
        </div>
        <div class="" style="font-family: Nunito, sans-seriff; font-weight: bold; font-size: 24px; color: #111827; width: 100%; text-align: center; margin-top: 40px; margin-bottom: 40px;">Platform Kami Mencakup di Penjuru Nusantara</div>
        <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
            <img src="map.png" style="width: 80%;" alt="">
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="main-container">
        <div style="display: flex; flex-direction: row; overflow-x: hidden; padding-top: 40px; padding-left:60px; padding-bottom: 40px;">
            <div class="text-container">
                <h2 class="text text-title">Belajar dari Praktisi <br>Terbaik di Bidangnya</h2>
                <p class="text text-desc">Setiap perjalanan belajar adalah cerita yang unik. Luarsekolah,
                    kami bangga telah membantu banyak individu mengubah hidup mereka melalui pendidikan
                    yang relevan dan praktis.</p>
                <button class="cta-button">Lihat Selengkapnya</button>
            </div>
            <div class="scroll-container">
                <div class="carousel-item">
                    <img src="state3.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                    <div class="carousel-banner" onclick="toggleExpand(this)">
                        <h1 class="profile-name">Rian Mahendra</h1>
                        <span class="profile-occupant">Web Development</span>
                        <span class="profile-desc">Software Engineer di TechInno</span>
                        <div class="extra-content">
                        <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="state2.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                    <div class="carousel-banner" onclick="toggleExpand(this)">
                        <h1 class="profile-name">Ahmad Fadhil</h1>
                        <span class="profile-occupant">UI/UX Design</span>
                        <span class="profile-desc">Product Designer di InnovApp</span>
                        <div class="extra-content">
                        <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="state4.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                    <div class="carousel-banner" onclick="toggleExpand(this)">
                        <h1 class="profile-name">Siti Lestari</h1>
                        <span class="profile-occupant">Data Science</span>
                        <span class="profile-desc">Product Designer di InnovApp</span>
                        <div class="extra-content">
                        <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="state5.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                    <div class="carousel-banner" onclick="toggleExpand(this)">
                        <h1 class="profile-name">Afif Setyawan</h1>
                        <span class="profile-occupant">Business Strategy</span>
                        <span class="profile-desc">Business Analyst di StartUpPros</span>
                        <div class="extra-content">
                        <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-buttons">
            <button class="scroll-button prev" onclick="scrollPrev()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2028_93)">
                        <path d="M15 6.00098L9 12.001L15 18.001" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2028_93">
                            <rect width="24" height="24" fill="white" transform="translate(0 0.000976562)" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
            <button class="scroll-button next" onclick="scrollNext()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2028_97)">
                        <path d="M9 6.00098L15 12.001L9 18.001" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2028_97">
                            <rect width="24" height="24" fill="white" transform="translate(0 0.000976562)" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </div>
    </div>

    <div class="persons-container">
        <div class="" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
            <div class="" style="flex-basis: 40%; font-family: Nunito, sans-seriff; font-weight: bold; font-size: 36px; color: #00CC99; width: 100%; text-align: center;">
                <h5 style="text-align: left; margin: 0px;">Orang-Orang Hebat di Balik Luarsekolah</h5>
            </div>
            <div class="" style="flex-basis: 55%; font-family: Nunito, sans-seriff; font-weight: bold; font-size: 16px; color: #4B5563; width: 100%; text-align: center;">
                <p style="text-align: left;">Kami bangga memiliki tim yang berdedikasi untuk memberikan pengalaman belajar terbaik bagi semua pengguna. Kenalan lebih dekat dengan tim kami yang selalu ada di balik layar kesuksesan Luarsekolah.</p>
            </div>
        </div>


        <div class="carousel-person-container">
            <div class="carousel-person-item">
                <img src="state3.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Rian Mahendra</h1>
                    <span class="profile-occupant">Web Development</span>
                    <span class="profile-desc">Software Engineer di TechInno</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="state2.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Ahmad Fadhil</h1>
                    <span class="profile-occupant">UI/UX Design</span>
                    <span class="profile-desc">Product Designer di InnovApp</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="state4.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Siti Lestari</h1>
                    <span class="profile-occupant">Data Science</span>
                    <span class="profile-desc">Product Designer di InnovApp</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="state5.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Afif Setyawan</h1>
                    <span class="profile-occupant">Business Strategy</span>
                    <span class="profile-desc">Business Analyst di StartUpPros</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-person-item">
                <img src="state3.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Rian Mahendra</h1>
                    <span class="profile-occupant">Web Development</span>
                    <span class="profile-desc">Software Engineer di TechInno</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="state2.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Ahmad Fadhil</h1>
                    <span class="profile-occupant">UI/UX Design</span>
                    <span class="profile-desc">Product Designer di InnovApp</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="state4.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Siti Lestari</h1>
                    <span class="profile-occupant">Data Science</span>
                    <span class="profile-desc">Product Designer di InnovApp</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="state5.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Afif Setyawan</h1>
                    <span class="profile-occupant">Business Strategy</span>
                    <span class="profile-desc">Business Analyst di StartUpPros</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-person-item">
                <img src="state3.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Rian Mahendra</h1>
                    <span class="profile-occupant">Web Development</span>
                    <span class="profile-desc">Software Engineer di TechInno</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="state2.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Ahmad Fadhil</h1>
                    <span class="profile-occupant">UI/UX Design</span>
                    <span class="profile-desc">Product Designer di InnovApp</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="state4.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Siti Lestari</h1>
                    <span class="profile-occupant">Data Science</span>
                    <span class="profile-desc">Product Designer di InnovApp</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="state5.png" alt="Deskripsi Gambar" class="card-image" style="width: 240px;">
                <div class="carousel-banner" onclick="toggleExpand(this)">
                    <h1 class="profile-name">Afif Setyawan</h1>
                    <span class="profile-occupant">Business Strategy</span>
                    <span class="profile-desc">Business Analyst di StartUpPros</span>
                   <div class="extra-content">
                   <img style="width: 18px; margin: 0px 8px;" src="images/linkedin.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/twitter.png" alt="">
                            <img style="width: 18px; margin: 0px 8px;" src="images/ig.png" alt="">
                            <img style="width: 14px; height: 14px; margin: 0px 8px;" src="images/youtube.png" alt="">
                        </div>
                </div>
            </div>
        </div>
    </div>


<?php include('footer.php'); ?>

<script>
        const scrollContainer = document.querySelector('.scroll-container');
        const scrollItems = document.querySelectorAll('.carousel-item');
        const itemWidth = scrollItems[0].offsetWidth;
        const totalItems = scrollItems.length;

        let isScrolling = false; // Untuk mencegah scroll bertumpuk

        function toggleExpand(element) {
            element.classList.toggle("expanded");
        }

        function smoothScrollTo(targetScrollLeft) {
            if (isScrolling) return; // Mencegah scroll bertumpuk

            isScrolling = true;
            const currentScrollLeft = scrollContainer.scrollLeft;
            const distance = targetScrollLeft - currentScrollLeft;
            const duration = 500; // Durasi transisi dalam milidetik
            const startTime = performance.now();

            function animateScroll(timestamp) {
                const elapsed = timestamp - startTime;
                const progress = Math.min(elapsed / duration, 1); // Batas progress di 1 (akhir)

                scrollContainer.scrollLeft = currentScrollLeft + distance * progress;

                if (progress < 1) {
                    requestAnimationFrame(animateScroll);
                } else {
                    isScrolling = false;
                }
            }

            requestAnimationFrame(animateScroll);
        }

        function scrollNext() {
            const currentScrollLeft = scrollContainer.scrollLeft;
            const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;

            if (currentScrollLeft >= maxScrollLeft) {
                smoothScrollTo(0);
            } else {
                smoothScrollTo(currentScrollLeft + itemWidth);
            }
        }

        function scrollPrev() {
            const currentScrollLeft = scrollContainer.scrollLeft;

            if (currentScrollLeft <= 0) {
                smoothScrollTo(scrollContainer.scrollWidth - scrollContainer.clientWidth);
            } else {
                smoothScrollTo(currentScrollLeft - itemWidth);
            }
        }
    </script>

</body>
</html>