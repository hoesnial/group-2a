function showTab(tabId) {
  // Ambil semua tab-content
  const tabs = document.querySelectorAll(".tab-content");

  // Sembunyikan semua tab-content
  tabs.forEach((tab) => {
    tab.classList.remove("active");
  });

  // Tampilkan tab-content yang dipilih
  const activeTab = document.getElementById(tabId);
  if (activeTab) {
    activeTab.classList.add("active");
  }

  // Perbarui status aktif pada tombol tabbing
  const tabButtons = document.querySelectorAll(".tabbing > div");
  tabButtons.forEach((button) => {
    button.classList.remove("active-tab");
  });

  // Tambahkan kelas aktif pada tombol yang sesuai
  const activeButton = document.querySelector(
    `.tabbing > .frame-63326${
      tabId === "visi" ? "6" : tabId === "misi" ? "7" : "8"
    }`
  );
  if (activeButton) {
    activeButton.classList.add("active-tab");
  }
}
