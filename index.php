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

<!-- section 1 -->
<div class="section-1" style="display: flex; flex-direction: column; gap: 0px;">
    <!-- Title Section -->
    <div class="title">
        <p style="font-family: Nunito, normal; font-weight: 700; font-size: 24px; color:#111827; text-align: center; letter-spacing: 0.3px; line-height: 28px; margin-bottom: 20px; margin-top:20px;">
            Tentang Kami
        </p>
    </div>
<<<<<<< HEAD

    <!-- Main Text Section -->
    <div class="main-text">
        <p style="font-family: Nunito, sans-serif; font-weight: 600; font-size: 80px; color: #00CC99; text-align: center; line-height: 88px; margin-bottom: 20px;">
            Luarsekolah untuk Masa <br> Depan yang Lebih Baik
        </p>
    </div>

    <!-- Description Section -->
    <div class="description">
        <p style="font-family: Nunito, sans-serif; font-weight: 500; font-size: 20px; color: #4B5563; text-align: center; line-height: 30px; margin-bottom: 30px;">
            Platform edukasi vokasi dan pengembangan diri berbasis online yang mendampingi generasi muda <br> Indonesia untuk terus berkembang #sampaijadibisa
        </p>
    </div>
</div>

<!-- Profile Cards Scroll -->
<div class="kartu-section-wrapper">
    <div class="shape-sections">
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
            </div>            <div class="carousel-item">
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
            </div>            <div class="carousel-item">
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
            </div>            <div class="carousel-item">
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
    </div>
</div>

<script src="scroll-animation.js"></script>

=======
    <div class="scroll-container">
    <div class="carousel-item2">
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
                <div class="carousel-item2">
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
                <div class="carousel-item2">
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
                <div class="carousel-item2">
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
                <div class="carousel-item2">
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
                <div class="carousel-item2">
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
                <div class="carousel-item2">
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
                <div class="carousel-item2">
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
                <div class="carousel-item2">
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
                <div class="carousel-item2">
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
                <div class="carousel-item2">
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
                <div class="carousel-item2">
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
    </div>
                
>>>>>>> 9854ced44c48ff53735d1123657453fb5fa5cac2
    <!-- section 2 -->
    <section class="toggle-section">
        <div class="image-container">
            <img id="image" src="https://img.freepik.com/premium-photo/man-having-headache-while-using-laptop_13339-297315.jpg" alt="Masalah">
        </div>
        <div class="content-container">
            <h2>Apa Tantangan yang Kita Hadapi?</h2>
            <div class="toggle-switch">
                <button id="problemBtn" class="active">Masalah</button>
                <button id="solutionBtn">Solusi</button>
            </div>
            <p id="description">
                Pendidikan formal sering kali nggak cukup buat mempersiapkan kita ke dunia kerja. Banyak yang merasa:
            </p>
            <div id="content-grid" class="grid2">
                <!-- Konten "Masalah" -->
                <div class="card2">Skill dipelajari di Kampus Tidak Sesuai Dunia Kerja</div>
                <div class="card2">Bingung Harus Mulai dari Mana Setelah Lulus</div>
                <div class="card2">Salah Jurusan & Kesulitan Mengembangkan Diri</div>
                <div class="card2">Biaya Belajar yang Tinggi</div>
            </div>
        </div>
    </section>
    <script>
        // Ambil elemen yang dibutuhkan
const problemBtn = document.getElementById("problemBtn");
const solutionBtn = document.getElementById("solutionBtn");
const description = document.getElementById("description");
const contentGrid = document.getElementById("content-grid");
const image = document.getElementById("image");

// Konten untuk "Masalah" dan "Solusi"
const problemContent = [
    "Skill dipelajari di Kampus Tidak Sesuai Dunia Kerja",
    "Bingung Harus Mulai dari Mana Setelah Lulus",
    "Salah Jurusan & Kesulitan Mengembangkan Diri",
    "Biaya Belajar yang Tinggi",
];

const solutionContent = [
    "Kelas Praktis dan Sesuai Kebutuhan Industri",
    "Panduan Karier dari Mentor Ahli",
    "Belajar Skill Sesuai Minatmu",
    "Harga Terjangkau dengan Kualitas Terjaga",
];

// Event listener untuk tombol "Masalah"
problemBtn.addEventListener("click", () => {
    problemBtn.classList.add("active");
    solutionBtn.classList.remove("active");

    // Ubah deskripsi dan konten
    description.textContent =
        "Pendidikan formal sering kali nggak cukup buat mempersiapkan kita ke dunia kerja. Banyak yang merasa:";
    image.src = "https://img.freepik.com/premium-photo/man-having-headache-while-using-laptop_13339-297315.jpg";
    updateGrid(problemContent);
});

// Event listener untuk tombol "Solusi"
solutionBtn.addEventListener("click", () => {
    solutionBtn.classList.add("active");
    problemBtn.classList.remove("active");

    // Ubah deskripsi dan konten
    description.textContent =
        "Kami hadir untuk memberikan solusi nyata yang mudah diakses semua orang:";
    image.src = "https://img.freepik.com/premium-photo/man-having-headache-while-using-laptop_13339-297315.jpg";
    updateGrid(solutionContent);
});

// Fungsi untuk memperbarui grid
function updateGrid(items) {
    contentGrid.innerHTML = ""; // Kosongkan grid
    items.forEach((item) => {
        const card = document.createElement("div");
        card.className = "card2";
        card.textContent = item;
        contentGrid.appendChild(card);
    });
}

    </script>

<!-- section 3 -->
<section class="about-section">
        <div class="about">
            <h2>Cerita di Balik Luarsekolah</h2>
            <p>
                Di Luarsekolah, kami menyediakan mentor ahli dan program belajar yang fleksibel sejak 2019,
                membantu lebih dari 250.000 user berkembang kapan pun dan di mana pun.
            </p>
            <div class="stats">
                <div>
                    <h3>2019</h3>
                    <p>Didirikan</p>
                </div>
                <div>
                    <h3>250.000+</h3>
                    <p>Pengguna</p>
                </div>
            </div>
        </div>
        <div class="images">
            <img src="https://tips4teamwork.com/wp-content/uploads/2020/04/office-teamwork.jpg" alt="Tim bekerja sama" class="image1">
            <img src="https://i1.wp.com/hr-gazette.com/wp-content/uploads/2018/10/bigstock-196164373.jpg?resize=1024%2C594&ssl=1" alt="Kolaborasi tim" class="image2">
        </div>
    </section>




    <!-- Section 5 -->
     <div class="section-5-container">
    <div class="keunggulan">
      <div class="frame-633140">
        <div class="apa-yang-bikin-kami-beda">Apa yang Bikin Kami Beda?</div>
        <div class="kami-menawarkan-keunggulan-seperti">
          Kami menawarkan keunggulan seperti:
        </div>
      </div>
      <div class="frame-633144">
        <div class="frame-633116">
          <img
            class="bold-duotone-money-verified-check"
            src="images/bold-duotone-money-verified-check0.svg"
          />
          <div class="mentor-profesional">Mentor Profesional</div>
          <div class="belajar-dari-ahlinya">Belajar dari ahlinya</div>
        </div>
        <div class="frame-633143">
          <img
            class="bold-duotone-money-tag-price"
            src="images/bold-duotone-money-tag-price0.svg"
          />
          <div class="harga-terjangkau">Harga Terjangkau</div>
          <div class="kualitas-tinggi-harga-murah">
            Kualitas tinggi harga murah
          </div>
        </div>
        <div class="frame-633141">
          <div class="bold-duotone-electronic-devices-smartphone-update">
            <img class="clip-path-group" src="images/clip-path-group0.svg" />
          </div>
          <div class="materi-terupdate">Materi Terupdate</div>
          <div class="dibuat-sesuai-tren-industri">
            Dibuat sesuai tren industri
          </div>
        </div>
        <div class="frame-633142">
          <img
            class="bold-duotone-time-clock-circle"
            src="images/bold-duotone-time-clock-circle0.svg"
          />
          <div class="waktu-fleksibel">Waktu Fleksibel</div>
          <div class="akses-kapan-aja-dimana-aja">
            Akses kapan aja, dimana aja
          </div>
        </div>
      </div>
    </div>
    </div>


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

        <!-- section 6 -->
        <div class="" style="font-family: Nunito, sans-seriff; font-weight: bold; font-size: 24px; color: #111827; width: 100%; text-align: center; margin-top: 40px; margin-bottom: 40px;">Platform Kami Mencakup di Penjuru Nusantara</div>
        <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
            <img src="map.png" style="width: 80%;" alt="">
        </div>
    </div>

   <!-- Section 7 -->
   <div class="section-7-container">
    <div class="frame-633207">
    <div class="frame-633204">
      <div class="cerita-sukses-pengguna">Cerita Sukses Pengguna</div>
      <div class="text">
        Setiap perjalanan belajar adalah cerita yang unik. Luarsekolah, kami
        bangga telah membantu banyak individu mengubah hidup mereka melalui
        pendidikan yang relevan dan praktis.
      </div>
    </div>
    <div class="frame-633206">
      <div class="frame-633205">
        <div class="frame-633175">
          <img class="ellipse-5" src="images/satu.png" />
          <div class="frame-633196">
            <div class="fahmi-pratama">Fahmi Pratama</div>
            <div class="digital-marketing">Digital Marketing</div>
            <div class="mentor-social-media">
              <div class="gray-button">
                <img class="linked-in" src="linked-in0.svg" />
              </div>
              <div class="gray-button">
                <img class="twitter" src="twitter0.svg" />
              </div>
              <div class="gray-button">
                <img class="instagram" src="instagram0.svg" />
              </div>
              <div class="gray-button">
                <img class="youtube" src="youtube0.svg" />
              </div>
            </div>
          </div>
          <div
            class="saya-baru-saja-mengikuti-kelas-digital-marketing-di-luar-sekolah-dan-hasilnya-luar-biasa-dalam-3-bulan-omzet-usaha-saya-naik-40-kelas-ini-memberikan-wawasan-praktis-yang-langsung-bisa-saya-aplikasikan-ke-bisnis-saya-terima-kasih-mentor-mentor-di-luar-sekolah-kalian-luar-biasa"
          >
            &quot;Saya baru saja mengikuti kelas Digital Marketing di Luar
            Sekolah, dan hasilnya luar biasa! Dalam 3 bulan, omzet usaha saya naik
            40%! Kelas ini memberikan wawasan praktis yang langsung bisa saya
            aplikasikan ke bisnis saya. Terima kasih, mentor-mentor di Luar
            Sekolah. Kalian luar biasa!&quot;
          </div>
        </div>
        <div class="frame-633176">
          <img class="ellipse-5" src="images/dua.png" />
          <div class="frame-633196">
            <div class="mira-setyaningrum">Mira Setyaningrum</div>
            <div class="ui-ux-design">UI/UX Design</div>
            <div class="mentor-social-media">
              <div class="gray-button">
                <img class="linked-in2" src="linked-in1.svg" />
              </div>
              <div class="gray-button">
                <img class="twitter2" src="twitter1.svg" />
              </div>
              <div class="gray-button">
                <img class="instagram2" src="instagram1.svg" />
              </div>
              <div class="gray-button">
                <img class="youtube2" src="youtube1.svg" />
              </div>
            </div>
          </div>
          <div
            class="sebelum-bergabung-dengan-kelas-ux-design-bootcamp-saya-tidak-tahu-harus-mulai-dari-mana-tapi-sekarang-saya-bekerja-sebagai-desainer-ui-ux-di-perusahaan-teknologi-besar-semua-berkat-program-intensif-dan-dukungan-mentor-dari-luar-sekolah-sangat-direkomendasikan-untuk-siapa-pun-yang-ingin-berpindah-karier"
          >
            “Sebelum bergabung dengan kelas UX Design Bootcamp, saya tidak tahu
            harus mulai dari mana. Tapi sekarang, saya bekerja sebagai desainer
            UI/UX di perusahaan teknologi besar! Semua berkat program intensif dan
            dukungan mentor dari Luar Sekolah. Sangat direkomendasikan untuk siapa
            pun yang ingin berpindah karier!”
          </div>
        </div>
        <div class="frame-633179">
          <img class="ellipse-5" src="images/tiga.png" />
          <div class="frame-633196">
            <div class="ardi-prakoso">Ardi Prakoso</div>
            <div class="web-development">Web Development</div>
            <div class="mentor-social-media">
              <div class="gray-button">
                <img class="linked-in3" src="linked-in2.svg" />
              </div>
              <div class="gray-button">
                <img class="twitter3" src="twitter2.svg" />
              </div>
              <div class="gray-button">
                <img class="instagram3" src="instagram2.svg" />
              </div>
              <div class="gray-button">
                <img class="youtube3" src="youtube2.svg" />
              </div>
            </div>
          </div>
          <div
            class="sebagai-lulusan-baru-saya-merasa-minder-memasuki-dunia-kerja-beruntung-saya-mengikuti-program-soft-skills-di-luar-sekolah-selain-belajar-komunikasi-efektif-saya-juga-mendapat-tips-wawancara-kerja-hasilnya-saya-diterima-di-perusahaan-impian-saya-terima-kasih-luar-sekolah"
          >
            &quot;Sebagai lulusan baru, saya merasa minder memasuki dunia kerja.
            Beruntung saya mengikuti program Soft Skills di Luar Sekolah. Selain
            belajar komunikasi efektif, saya juga mendapat tips wawancara kerja.
            Hasilnya? Saya diterima di perusahaan impian saya! Terima kasih Luar
            Sekolah!&quot;
          </div>
        </div>
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
          <img class="dots" src="dots0.svg" />
        </div>
        <div class="gray-button2">
          <img class="chevron-right" src="chevron-right0.svg" />
        </div>
      </div>
    </div>
  </div>
  </div>

<!-- section 8 -->
<div class="main-container">
        <div style="display: flex; flex-direction: row; overflow-x: hidden; padding-top: 40px; padding-left:60px; padding-bottom: 40px;">
            <div class="text-container">
                <h2 style=" font-family: Nunito, sans-serif;margin-right: 20px; margin-top: 10px; color: white;   font-weight: 700;
                letter-spacing: 0.3px; font-size: 28px;" >Belajar dari Praktisi <br>Terbaik di Bidangnya</h2>
                <p style="  font-weight: 600; font-size: 14px; line-height: 24px; letter-spacing: 0.3px; color: white;">Setiap perjalanan belajar adalah cerita yang unik. Luarsekolah,
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
    
<!-- section 10, 11, 12, 13 -->
    <section class="faq">
    <div class="faq-left">
      <h2>Frequently Asked Questions</h2>
      <p>Belajar dengan pendekatan praktis dan terarah. Kembangkan portofolio dan siapkan diri untuk sukses dalam karier digital!</p>
      <button class="btn-primary">Lihat Selengkapnya</button>
    </div>
    <div class="faq-right">
        <div class="faq-item"> 
            <div class="faq-question">
              <span class="question-number">01</span>
              <span class="question-text">Apakah kursus ini cocok untuk pemula?</span>
              <span class="arrow"></span>
            </div>
            <p class="faq-answer">Kursus ini dirancang untuk pemula maupun mereka yang ingin memperdalam kemampuan.</p>
          </div>

          <div class="faq-item"> 
            <div class="faq-question">
              <span class="question-number">02</span>
              <span class="question-text">Apakah saya mendapatkan sertifikat setelah menyelesaikan kursus?</span>
              <span class="arrow"></span>
            </div>
            <p class="faq-answer">Ya, sertifikat akan diberikan setelah Anda menyelesaikan semua modul pelatihan.</p>
          </div>
          
          <div class="faq-item"> 
            <div class="faq-question">
              <span class="question-number">03</span>
              <span class="question-text">Bagaimana cara mengakses materi kursus?</span>
              <span class="arrow"></span>
            </div>
            <p class="faq-answer">Materi kursus dapat diakses melalui platform belajar kami setelah pendaftaran selesai.</p>
          </div>
          
          <div class="faq-item"> 
            <div class="faq-question">
              <span class="question-number">04</span>
              <span class="question-text">Bisakah saya mendapatkan pengembalian dana jika tidak puas dengan kursus?</span>
              <span class="arrow"></span>
            </div>
            <p class="faq-answer">Kami memiliki kebijakan pengembalian dana dalam 7 hari setelah pendaftaran.</p>
          </div>
  </section>

  <!-- CTA Section -->
  <section class="cta">
    <h2>Yuk, Mulai Perjalananmu Bersama Kami!</h2>
    <p>Ikatkan dirimu pada pengalaman belajar yang tak terlupakan.</p>
    <button class="btn-secondary">Gabung Sekarang</button>
  </section>

  <!-- Contact Section -->
  <section class="contact">
    <div class="contact-form">
      <h3>Ayo Terhubung dan Berkolaborasi</h3>
      <form>
        <div class="form-row">
          <input type="text" placeholder="Nama Depan" required>
          <input type="text" placeholder="Nama Belakang" required>
        </div>
        <input type="email" placeholder="Email" required>
        <div class="form-row">
          <select>
            <option>+62</option>
            <option>+1</option>
            <option>+44</option>
          </select>
          <input type="text" placeholder="Nomor Telepon" required>
        </div>
        <textarea placeholder="Bagaimana kami dapat membantu Anda?" rows="4" required></textarea>
        <button type="submit" class="btn-primary">Kirim</button>
      </form>
    </div>
    <div class="contact-info">
      <iframe class="map-frame" 
        src="https://maps.google.com/maps?q=Jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" 
        frameborder="0" 
        width="600" 
        height="200">
</iframe>
<h3 class="ctk">Kantor Kami</h3>
<p class="alamat">Central Tower, Level 36, Jl. Gatot Subroto No.27, Karet Semanggi, Jakarta Selatan 12930, Indonesia</p>
<div class="social-icons">
  <a href="mailto:info@example.com" target="_blank">
    <img src="images/email.png" alt="Email">
  </a>
  <a href="https://www.linkedin.com" target="_blank">
    <img src="images/linkedin.png" alt="LinkedIn">
  </a>
  <a href="https://www.instagram.com" target="_blank">
    <img src="images/ig.png" alt="Instagram">
  </a>
  <a href="https://www.youtube.com" target="_blank">
    <img src="images/youtube.png" alt="YouTube">
  </a>
  <a href="https://wa.me/6281234567890" target="_blank">
    <img src="images/whatsapp.png" alt="WhatsApp">
  </a>
</div>
  </section>

  <!-- Footer Section -->
  <section class="custom-section">
    <div class="section-content">
      <div class="section-text">
        <h3 class="section-h3">Mari Membangun Sesuatu yang Hebat Bersama!</h3>
        <p>Punya ide atau proposal untuk kolaborasi? Kami ingin sekali
          mendengarnya dari Anda. Bagikan pemikiran Anda dan mari kita wujudkan!</p>
        <button class="btn-section">Ajukan Penawaran</button>
      </div>
      <div class="section-image">
        <img src="images/inspirational.png" alt="Inspirational Image">
      </div>
    </div>
  </section>
  
  <script src="faq.js"></script>

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
    <script>
      function showContent(section) {
        // Sembunyikan semua konten
        const contents = document.querySelectorAll(".content");
        contents.forEach((content) => content.classList.remove("active"));

        // Reset semua tombol
        const buttons = document.querySelectorAll(".tabs button");
        buttons.forEach((button) => button.classList.remove("active"));

        // Tampilkan konten yang dipilih dan aktifkan tombol
        document.getElementById(section).classList.add("active");
        event.target.classList.add("active");
      }
    </script>

</body>
</html>
