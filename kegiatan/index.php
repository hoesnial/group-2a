<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Kolaborasi</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<img class="pattern-1-icon" alt="" src="images/Pattern6.png">
<img class="pattern-2-icon" alt="" src="images/Pattern5.png">

<?php include('navbar.php'); ?>

<div class="kolaborasi-container">
    <header class="kolaborasi-header">        
        <h1>Kegiatan</h1>
        <h2>Eksplorasi Tak Terbatas bersama Luarsekolah</h2>
        <p>
            Ikuti berbagai aktivitas seru yang menginspirasi dan memperkuat solidaritas. Mulai dari pelatihan, 
            penggalangan dana, hingga kolaborasi dengan berbagai komunitas, kami berkomitmen menciptakan peluang 
            bagi generasi muda untuk berbagi dan tumbuh bersama di setiap langkah.
        </p>
    </header>
</div>
        <section class="kolaborasi-cards">
    <div class="kolaborasi-card gambar-pertama">
        <img src="images/Collaborative Work Session.jpeg" alt="Kegiatan Kolaborasi">
        <h3>Kegiatan Kolaborasi</h3>
        <p>Unity for Charity by Luarsekolah X Rumah Amal Salman</p>
    </div>
    <div class="kolaborasi-card">
        <img src="images/next-academy-JyJwO0K5fWM-unsplash.jpg" alt="Magang+">
        <h3>Magang+</h3>
        <p>Program magang intensif yang menggabungkan pelatihan vokasi dan pengalaman kerja nyata.</p>
    </div>
    <div class="kolaborasi-card">
        <img src="images/Business Meeting in Modern Conference Room.jpeg" alt="Pelatihan Prakerja">
        <h3>Pelatihan Prakerja</h3>
        <p>Sapa SobatLS: Sosialisasi Prakerja Tahun 2024</p>
    </div>
    <div class="kolaborasi-card">
        <img src="images/Attentive Student in Colorful Classroom.jpeg" alt="Luarsekolah Cendikia">
        <h3>Luarsekolah Cendikia</h3>
        <p>Career GPS: Mapping Your Path to Success</p>
    </div>
</section>

<!-- Untuk section lainnya -->

<section class="collaboration">
    <h2 class="title">Kegiatan Kolaborasi</h2>
    <p class="subtitle">
      Kegiatan kolaborasi bertujuan mendorong kerja sama untuk menciptakan dampak positif bagi<br>
      komunitas dan masyarakat secara luas, dengan semangat solidaritas dan kepedulian.
    </p>
    <div class="collaboration-cards">
      <!-- Card 1 -->
      <div class="card">
        <div class="card-image">
          <img src="images/Attentive Student in Colorful Classroom.jpeg" alt="Unity for Charity">
          <h3>Unity for Charity by luarsekolah X Rumah Amal Salman</h3>
          <p>
            Kami berkomitmen mendukung pendidikan anak-anak kurang mampu melalui
            penggalangan dana dan program edukasi vokasi.
          </p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="card">
        <div class="card-image">
          <img src="images/Business Meeting in Modern Conference Room.jpeg" alt="Unity for Collaboration">
          <h3>Unity for Collaboration by luarsekolah X Perpusnas X Indonesia Book Party</h3>
          <p>
            Kami hadir untuk memperkuat literasi bangsa melalui penyediaan akses buku,
            pelatihan vokasi, dan kegiatan edukatif lainnya.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- section3-->
<div class="main-container">
        <div style="display: flex; flex-direction: row; overflow-x: hidden; padding-top: 40px; padding-left:60px; padding-bottom: 40px;">
            <div class="text-container">
                <h2 style=" color: var(--White, #FFF);
font-family: Poppins;
font-size: 38px;
font-style: normal;
font-weight: 700px;
line-height: 50px; /* 125% */
letter-spacing: 0.3px; align-self: stretch;" > Magang+</h2>
                <p style="  font-weight: 510; font-size: 18px; line-height: 24px; letter-spacing: 0.3px; color: white;">Program ini dirancang bagi mahasiswa dan fresh graduate<br>untuk memberikan pengalaman, memperdalam<br> keterampilan, 
                    serta membangun jaringan profesional yang <br>dapat mendukung karier  di masa depan</p>
                <button class="cta-button">Kunjungi Magang+</button>
            </div>
            <div class="scroll-container">
                <div class="carousel-item">
                    <img src="images/minimagang.png" alt="Deskripsi Gambar" style="display: flex;
width: 480px;
height: 280px;
padding: 10px;;
flex-direction: column;
align-items: 
flex-start;
">
                </div>
                    <img src="images/opening.png" alt="Deskripsi Gambar" style="display: flex;
width: 480px;
height: 280px;
padding: 10px;
flex-direction: column;
align-items: 
flex-start;">
                <div class="carousel-item">
                    <img src="images/magang.png" alt="Deskripsi Gambar" style="display: flex;
width: 480px;
height: 280px;
padding: 10px;
flex-direction: column;
justify-content: flex-end;
align-items: flex-start;
">
                </div>
            </div>
        </div>
        <div class="scroll-buttons">
            <button class="scroll-button prev" onclick="scrollPrev3()">
            <img class="chevron-left1" src="images/chevron-left.svg" />
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
            <button class="scroll-button next" onclick="scrollNext3()">
            <img class="chevron-right2" src="images/chevron-right.svg" />
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



  <!-- Untuk section lainnya -->

  <section class="collaboration">
    <h2 class="title">Pelatihan Prakerja</h2>
    <p class="subtitle">
    Pelatihan Prakerja adalah pelatihan yang bertujuan 
    untuk meningkatkan kompetensi kerja dan kewirausahaan, 
    Program ini ditujukan untuk pencari kerja, atau pekerja yang terkena PHK
    </p>
    <div class="collaboration-cards">
      <!-- Card 3 -->
      <div class="card">
        <div class="card-image">
          <img src="images/Collaborative Work Session.jpeg" alt="Unity for Charity">
          <h3>Temu Raya Prakerja</h3>
          <p>
            Ajang pertemuan inspiratif bagi peserta Prakerja untuk berbagi 
            pengalaman, belajar bersama, dan menjalin koneksi baru.
          </p>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="card">
        <div class="card-image">
          <img src="images\next-academy-JyJwO0K5fWM-unsplash.jpg" alt="Unity for Collaboration">
          <h3>Sapa SobatLS: Sosialisasi Prakerja Tahun 2024</h3>
          <p>
            Kegiatan sosialisasi untuk memperkenalkan program Prakerja
            2024 dan manfaatnya bagi pengembangan keterampilan.
          </p>
        </div>
      </div>
    </div>
    <a href="#" class="button">Temukan Pelatihan Lainnya</a>
  </section>

 <!-- section 5 -->
 <div class="main-container">
        <div style="display: flex; flex-direction: row; overflow-x: hidden; padding-top: 40px; padding-left:60px; padding-bottom: 40px;">
            <div class="text-container">
                <h2 style=" color: var(--White, #FFF);
font-family: Poppins;
font-size: 38px;
font-style: normal;
font-weight: 700px;
line-height: 50px; /* 125% */
letter-spacing: 0.3px; align-self: stretch;" > Luar Sekolah Cendekia</h2>
                <p style=" font-weight: 510; font-size: 18px; line-height: 24px; letter-spacing: 0.3px; color: white;">Luar Sekolah Cendikia merupakan webinar yang <br> memberikan ilmu tambahan untuk terus berkembang di <br>dunia digital baik soft skill maupun hardskill</p>
                <button class="cta-button">Lihat Webinar Lainnya</button>
            </div>
            <div class="scroll-container-5">
                <div class="carousel-item">
                    <img src="images/digital.png" alt="Deskripsi Gambar" style="display: flex;
width: 480px;
height: 280px;
padding: 10px;;
flex-direction: column;
align-items: 
flex-start;
">
                </div>
                <div class="carousel-item">
                    <img src="images/career.png" alt="Deskripsi Gambar" style="display: flex;
width: 480px;
height: 280px;
padding: 10px;;
flex-direction: column;
align-items: 
flex-start;
">
                </div>
                <div class="carousel-item">
                    <img src="images/mental.png" alt="Deskripsi Gambar" style="display: flex;
width: 480px;
height: 280px;
padding: 10px;;
flex-direction: column;
align-items: 
flex-start;
">
                </div>
                <div class="carousel-item">
                    <img src="images/quarter.png" alt="Deskripsi Gambar" style="display: flex;
width: 480px;
height: 280px;
padding: 10px;;
flex-direction: column;
align-items: 
flex-start;
">
                </div>
                <div class="carousel-item">
                    <img src="images/burnout.png" alt="Deskripsi Gambar" style="display: flex;
width: 480px;
height: 280px;
padding: 10px;;
flex-direction: column;
align-items: 
flex-start;
">
                </div>

            </div>
        </div>
        <div class="scroll-buttons">
            <button class="scroll-button prev" onclick="scrollPrev5()">
            <img class="chevron-right" src="images/chevron-left.svg" />
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
            <button class="scroll-button next" onclick="scrollNext5()">
            <img class="chevron-right1" src="images/chevron-right.svg" />                    <g clip-path="url(#clip0_2028_97)">
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

    <div class="container">
      <div class="header">
        <h1>Cerita dari Peserta Kami</h1>
        <p>
          Setiap perjalanan belajar adalah cerita yang unik. Luarsekolah, kami
          bangga telah membantu banyak individu mengubah hidup mereka melalui
          pendidikan yang relevan dan praktis.
        </p>
      </div>
      <div class="testimonials">
        <!-- Testimonial Eka -->
        <div class="testimonial-card">
          <img
            src="images/ellipse-51.png"
            alt="Eka Rosalia Fitria"
            class="profile-pic"
          />
          <h3 class="name">Dina Safitri</h3>
          <p class="position">Digital Marketing</p>
          <div class="social-icons">
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>
          <p class="testimonial-text">
            “Kegiatan ini bener bener bermanfaat banget sih, bukan cuman buat
            aku tapi juga buat anak anak yang ada di panti asuhan, aku jadi
            punya pengalaman seru dan belajar betapa pentingnya berbagi sesama,
            semoga program ini terus berjalan.”
          </p>
        </div>
        <!-- Testimonial Alif -->
        <div class="testimonial-card">
          <img
            src="images/ellipse-50.png"
            alt="Alif Revinsa Arafi"
            class="profile-pic"
          />
          <h3 class="name">Akhdan</h3>
          <p class="position">UI/UX Design</p>
          <div class="social-icons">
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>
          <p class="testimonial-text">
            “Webinarnya menarik, banyak ilmu baru yang aku dapetin, terutama
            buat mahasiswa yang belum punya gambaran untuk kedepannya. webinar
            ini sangat inspiratif dan ngasih aku langkah langkah yang bisa aku
            ambil setelah lulus nanti.”
          </p>
        </div>
        <!-- Testimonial Faris -->
        <div class="testimonial-card">
          <img src="images/ellipse-52.png" alt="Faris Ramadhan" class="profile-pic" />
          <h3 class="name">Haikal Gibran</h3>
          <p class="position">Web Development</p>
          <div class="social-icons">
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>
          <p class="testimonial-text">
            “Berkat pelatihan ini aku jadi punya keterampilan baru yang bisa
            berguna buat diri aku dan masyarakat, aku juga bisa punya
            penghasilan tambahan serta kompetensi kerja yang bikin aku jadi
            lebih percaya diri dalam mengadapai tantangan kedepannya.”
          </p>
        </div>
        <div class="pagination">
          <div class="indicator">
            <div class="_1">1</div>
          </div>
          <div class="indicator2">
            <div class="_2">2</div>
          </div>
          <div class="indicator2">
            <div class="_3">3</div>
          </div>
          <div class="gray-button2">
            <img class="dots" src="images/dots0.svg" />
          </div>
          <div class="gray-button2">
            <img class="chevron-right" src="images/chevron-right0.svg" />
          </div>
        </div>

<?php include('footer.php'); ?>

<script>
// Getting the correct scroll containers
const scrollContainer3 = document.querySelector('.scroll-container');
const scrollContainer5 = document.querySelector('.scroll-container-5');

// Getting carousel items
const scrollItems3 = document.querySelectorAll('.scroll-container .carousel-item');
const scrollItems5 = document.querySelectorAll('.scroll-container-5 .carousel-item');

// Get the width of the first item in each container
const itemWidth3 = scrollItems3[0].offsetWidth;
const itemWidth5 = scrollItems5[0].offsetWidth;

let isScrolling = false; // Flag to prevent overlapping scrolls

// Scroll to the right (next) in section 3
function scrollNext3() {
    const currentScrollLeft = scrollContainer3.scrollLeft;
    const maxScrollLeft = scrollContainer3.scrollWidth - scrollContainer3.clientWidth;

    if (currentScrollLeft >= maxScrollLeft) {
        smoothScrollTo(scrollContainer3, 0); // Go back to the beginning
    } else {
        smoothScrollTo(scrollContainer3, currentScrollLeft + itemWidth3); // Move to the next item
    }
}

// Scroll to the left (prev) in section 3
function scrollPrev3() {
    const currentScrollLeft = scrollContainer3.scrollLeft;

    if (currentScrollLeft <= 0) {
        smoothScrollTo(scrollContainer3, scrollContainer3.scrollWidth - scrollContainer3.clientWidth); // Go to the end
    } else {
        smoothScrollTo(scrollContainer3, currentScrollLeft - itemWidth3); // Move to the previous item
    }
}

// Scroll to the right (next) in section 5
function scrollNext5() {
    const currentScrollLeft = scrollContainer5.scrollLeft;
    const maxScrollLeft = scrollContainer5.scrollWidth - scrollContainer5.clientWidth;

    if (currentScrollLeft >= maxScrollLeft) {
        smoothScrollTo(scrollContainer5, 0); // Go back to the beginning
    } else {
        smoothScrollTo(scrollContainer5, currentScrollLeft + itemWidth5); // Move to the next item
    }
}

// Scroll to the left (prev) in section 5
function scrollPrev5() {
    const currentScrollLeft = scrollContainer5.scrollLeft;

    if (currentScrollLeft <= 0) {
        smoothScrollTo(scrollContainer5, scrollContainer5.scrollWidth - scrollContainer5.clientWidth); // Go to the end
    } else {
        smoothScrollTo(scrollContainer5, currentScrollLeft - itemWidth5); // Move to the previous item
    }
}

// Smooth scroll function to avoid jump scrolling
function smoothScrollTo(container, targetScrollLeft) {
    if (isScrolling) return; // Avoid overlapping scrolls

    isScrolling = true;
    const currentScrollLeft = container.scrollLeft;
    const distance = targetScrollLeft - currentScrollLeft;
    const duration = 500; // Duration for smooth scroll
    const startTime = performance.now(); // Time when scrolling starts

    function animateScroll(timestamp) {
        const elapsed = timestamp - startTime;
        const progress = Math.min(elapsed / duration, 1);

        container.scrollLeft = currentScrollLeft + distance * progress;

        if (progress < 1) {
            requestAnimationFrame(animateScroll);
        } else {
            isScrolling = false; // Reset flag after scroll is done
        }
    }

    requestAnimationFrame(animateScroll);
}

    </script>
    </div>


</body>
</html>
