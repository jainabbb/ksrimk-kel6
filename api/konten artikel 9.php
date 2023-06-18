<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_page'] = 2;
$_SESSION['no_artikel'] = 9;
$_SESSION['judul'] = "Save Our Ocean, Plastic Free!";
$_SESSION['tanggal'] = "19-07-2019";

ob_start();
// Menyimpan HTML dalam variabel
?>
<div class="d-none" id="judulart">
   <h2>Save Our Ocean, Plastic Free!</h2>
   <p>19-07-2019</p>
</div>
<img src="../images/konten artikel 9.png" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
   <p>Plastik merupakan salah satu bahan yang sering digunakan masyarakat dalam kehidupan sehari-hari untuk membawa barang dan membungkus makanan. Ditambah juga banyak peralatan-peralatan rumah tangga yang berbahan dasar plastik. Seringnya plastik digunakan oleh masyarakat membuat bahan yang satu ini seolah-olah menjadi kebutuhan yang harus tersedia di kehidupan masyarakat. Diperkirakan ada 500 juta sampai 1 milyar kantong plastik digunakan penduduk dunia dalam satu tahun. Ini berarti ada sekitar 1 juta kantong plastik per menit. Untuk membuatnya, diperlukan 12 juta barel minyak per tahun, dan 14 juta pohon ditebang. Ditambah dengan fakta tentang bahan pembuat plastik, (umumnya <em>polimer polivinil</em>) terbuat dari <em>polychlorinated biphenyl</em> (PCB) yang mempunyai struktur mirip DDT dan kantong plastik yang sulit untuk diurai oleh tanah hingga membutuhkan waktu antara 100 hingga 500 tahun membuat plastik menjadi bahan yang berbahaya untuk lingkungan baik di darat maupun di laut.</p>
   <p>Kebiasaan masyarakat indonesia yang sering membuang sampah yang sebagian besar berbahan dasar plastik ke sungai menyebabkan sampah tersebut menumpuk di lautan. Tentunya ini sangat berbahaya bagi kelangsungan hidup biota-biota laut. Lalu apa saja bahaya plastik bagi lautan?</p>
   <p>Hewan-hewan laut, seperti lumba-lumba, penyu, dan anjing laut menganggap sampah atau kantong plastik sebagai makanannya sehingga mereka akhirnya bisa mati hanya gara-gara memakannya dan tidak mampu mencernanya.</p>
   <p>Seperti yang kita ketahui sampah plastik membutuhkan waktu ratusan tahun sebelum terurai sempurna. Dalam prosesnya sampah hancur menjadi partikel-partikel kecil, menyebar di seantero perairan dan tanpa sadar dikonsumsi oleh hewan-hewan di lautan. Sampah-sampah itu terus membunuh makhluk hidup di lautan. Berdasarkan penelitian yang diterbitkan Sekretariat Konvensi tentang Keanekaragaman Hayati (United Nations Convention On Biological Diversity) pada 2016, sampah di lautan telah membahayakan lebih dari 800 spesies. Dari 800 spesies itu, 40% nya adalah mamalia laut dan 44% lainnya adalah spesies burung laut. Data itu kemudian diperbarui pada Konferensi Laut PBB di New York pada 2017 lalu. Konferensi menyebut limbah plastik di lautan telah membunuh 1 juta burung laut, 100 ribu mamalia laut, kura-kura laut, dan ikan-ikan dalam jumlah besar, tiap tahun.</p>
   <p>Laut memiliki peran penting bagi berlangsungnya kehidupan makhluk hidup di bumi. Sebagian besar orang tidak berpikir bahwa satu dari dua hela nafas yang mereka tarik berasal dari lautan yang luas. Semua hal di dunia ini berkaitan satu dengan yang lain, termasuk aktivitas di daratan juga memiliki pengaruh besar terhadap kesehatan lautan di mana kelangsungan hidup manusia bergantung padanya.</p>
   <p>Sudah sepatutnya kita sebagai makhluk yang memiliki kelebihan akal untuk saling menjaga makhluk hidup lain yang lebih lemah dan menjaga bumi tercinta. Kita bukan hanya satu-satunya generasi yang hidup di bumi, masih ada generasi-generasi selanjutnya yang memiliki hak untuk menikmati keindahan di bumi ini. Untuk itu ada beberapa hal kecil yang bisa kita lakukan untuk menjaga laut kita yaitu:</p>
   <ul class="artlist">
      <li>Tukar sedotan <a href="https://nationalgeographic.grid.id/tag/plastik" target="_blank" class="arta">plastik</a>: Untuk membantu mengurangi sampah plastik, Anda bisa menggantinya dengan sedotan bambu atau baja. Bawa sedotan ramah lingkungan tersebut setiap Anda pergi ke restoran.</li>
      <li>Membawa botol minuman sendiri: Selalu bawa botol minuman sendiri ketika bepergian. Ini menghindari Anda membeli minuman dalam botol atau gelas plastik. Dengan begitu, sampah plastik pun dapat berkurang.</li>
      <li>Batasi pembelian <em>online</em> Barang-barang yang dikirim ke rumah Anda, terkadang dibungkus dengan plastik. Salah satu cara untuk mengurangi penggunaan plastik adalah dengan membatasi pembelian online. Anda bisa membeli kebutuhan di toko terdekat lalu membawanya dengan tote bag–tanpa kantung plastik.</li>
      <li>Jangan membuang sampah sembarangan: Jika Anda pergi berlibur ke pantai, pastikan tidak ada sampah plastik yang tertinggal di sana. Seperti yang sudah dijelaskan sebelumnya, sampah plastik yang mengapung di lautan dapat membahayakan kehidupan hewan di sana.</li>
   </ul>
   <p>Karena setiap sampah yang kita hasilkan membawa dampak untuk bumi tempat kita tinggal, yuk mulai sekarang kita terapkan hal-hal kecil untuk mengurangi penggunaan plastik.</p>
   <br>
   <p style="text-indent: 0">#saveourocean</p>
</div>
<?php
$htmlContent = ob_get_clean();
include 'konten artikel layout.php';
?>