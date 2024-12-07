<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 20px;
  background-color: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.navbar:hover {
  background-color: #f6c80d; /* Warna hijau junggel */
  transition: background-color 0.3s ease; /* Efek transisi warna */
}

.logo {
  margin-left: 20px;
  display: flex;
  align-items: center;
}

.logo-image {
  height: 30px;
  margin-right: 8px;
}

/* Dropdown Menu */
.menu {
  margin-left: 200px;
  position: relative;
  font-size: 16px;
  font-weight: bold;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-trigger {
  cursor: pointer;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: white;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border: 1px solid #ddd;
  border-radius: 4px;
  z-index: 1000;
  min-width: 150px;
}

.dropdown-menu a {
  display: block;
  padding: 10px 15px;
  color: black;
  text-decoration: none;
  font-size: 14px;
}

.dropdown-menu a:hover {
  background-color: #f0f0f0;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

/* Search Bar */
.search-bar {
  display: flex;
  align-items: center;
  flex: 1;
  margin: 0 20px;
  margin-left: 20px;
}

.search-input {
  width: 100%;
  padding: 10px 15px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 20px;
  padding-right: 40px; /* Memberi ruang untuk tombol di dalam input */
}

.search-bar input {
  width: 95%;
  max-width: 400px;
  min-width: 200px;
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

.search-button {
  position: absolute;
  top: 50%;
  right: 3px;
  transform: translateY(-50%);
  border: none;
  /*Membuattombolbulat*/
  padding: 10px;
  /*Memberikanpaddinguntuktombol*/
  color: rgb(0, 0, 0);
  /*Warnaikon*/
  font-size: 12px;
  /*Ukuranikon*/
}

.search-button:hover {
  background-color: #00b372; /* Warna saat hover */
}
/* Authentication Buttons */
.auth-buttons {
  margin-right: 20px;
  display: flex;
  align-items: center;
  gap: 15px;
}

.register-button {
  padding: 8px 16px;
  background-color: #00d084;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.register-button:hover {
  background-color: #00b372;
}

.login-button {
  padding: 8px 16px;
  background-color: #ffffff;
  color: rgb(15, 10, 10);
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.login-button:hover {
  background-color: #ffffff;
}

.search-form {
  position: relative;
  width: 100%;
  max-width: 400px;
}

/* User Profile */
.dropdown {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-right: 20px;
}

.user-photo {
  width: 40px;
  height: 40px;
  border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
  object-fit: cover; /* Menjaga proporsi gambar */
  border: 2px solid #ddd; /* Opsional: menambahkan border */
}

.dropdown-trigger {
  font-size: 14px;
  color: #333; /* Warna teks */
  font-weight: bold;
}

.dropdown-menu a.logout-link {
  color: red; /* Ubah warna teks menjadi merah */
  border-top: 1px solid #ddd; /* Garis pemisah */
  margin-top: 5px; /* Memberikan sedikit jarak di atas */
  padding-top: 10px;
}

.dropdown-menu a.logout-link:hover {
  color: red; /* Ubah warna teks saat di-hover */ /* Opsional: Mengubah warna menjadi merah lebih gelap saat di-hover */
}

@media (max-width: 768px) {
  .navbar {
    flex-direction: column; /* Stack elements vertically */
    align-items: flex-start; /* Align items to the start */
  }

  .menu {
    margin-left: 0; /* Reset margin for mobile */
  }

  .search-bar {
    width: 100%; 
    margin: 10px 0; 
  }

  .auth-buttons {
    margin-top: 10px; 
  }
}

@media (max-width: 480px) {
  .search-input {
    padding: 8px; 
  }

  .search-button {
    padding: 8px; 
    font-size: 14px; 
  }
}

</style>

<nav class="navbar">
        <div class="logo">
            <img src="https://luarsekolah.com/assets-front/images/icons/logo-merah.png" alt="Luar Sekolah Logo" class="logo-image">
        </div>
        <div class="menu">
            <div class="dropdown">
                <span class="dropdown-trigger">Program <i class="fas fa-chevron-down"></i></span>
                <div class="dropdown-menu">
                    <a href="https://magang.luarsekolah.com/">Magang+</a>
                    <a href="https://www.luarsekolah.com/prakerja">Prakerja</a>
                    <a href="https://belajarbekerja.com/">Belajar Berkerja</a>
                    <a href="https://belajarbekerja.com/">Indonesia Skill Week</a>
                </div>
            </div>
        </div>
        <div class="search-bar">
            <form class="search-form">
                <input type="text" class="search-input" placeholder="Cari kelas yang ingin kamu pelajari">
                <button type="submit" class="search-button">
    <i class="fas fa-search"></i>
</button>            </form>
        </div>
        <div class="auth-buttons">
            <div class="dropdown">
                <img src="https://via.placeholder.com/40" alt="User Photo" class="user-photo">
                <span class="dropdown-trigger">Halo, Username <i class="fas fa-chevron-down"></i></span>
                <div class="dropdown-menu">
                    <a href="#">Reedem Voucher</a>
                    <a href="#">Akun Saya</a>
                    <a href="#">Kelas Saya</a>
                    <a href="#">Transaksi Saya</a>
                    <a href="#" class="logout-link">Keluar</a>
                </div>
            </div>
        </div>
    </nav>