function ubahHalaman(namaHalaman) {
    // Mengambil elemen <main> menggunakan id
    var mainContent = document.getElementById("main");
  
    // Mengubah konten <main> berdasarkan nama halaman yang dipilih
    if (namaHalaman === "dzikirpagi") {
      mainContent.innerHTML = "<h1>Halaman 1</h1><p>Ini adalah konten dari Halaman 1.</p>";
    } else if (namaHalaman === "dzikirpagi") {
      mainContent.innerHTML = "<h1>Halaman 2</h1><p>Ini adalah konten dari Halaman 2.</p>";
    } else if (namaHalaman === "dzikirpagi") {
      mainContent.innerHTML = "<h1>Halaman 3</h1><p>Ini adalah konten dari Halaman 3.</p>";
    }
  }