<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_artikel'] = 10;
$_SESSION['judul'] = "Tubuh Ideal Setelah Hari Raya? Why Not?!";
$_SESSION['tanggal'] = "21-06-2019";

ob_start();
// Menyimpan HTML dalam variabel
?>
<img src="../images/pmi.jpg" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
   <p>Tidak terasa kita telah melewati bulan suci ramadhan, setelah sebulan penuh melaksanakan ibadah puasa tentu datangnya hari raya adalah sesuatu yang umat islam nanti-nantikan. Sebagaimana diketahui, hari raya lebaran adalah hari yang identik dengan makanan yang kaya akan lemak dan bersantan, makanan yang bisa memicu berbagai macam penyakit jika dikonsumsi secara berlebihan dan tentunya bisa menambah berat badanmu loh. Maka dari itu perlu untuk menjalankan pola hidup sehat saat lebaran dan tentunya juga setelah lebaran. Pola ini seperti mengatur asupan kalori, berolahraga, konsumsi air putih, dan masih banyak lagi. Berikut hal yang harus diperhatikan agar kita tetap memiliki tubuh yang ideal usai hari raya:</p>
   <ol type="1" class="artol">
      <li>Perhatikan porsi makan</li>
      <p>Selama berpuasa tubuh telah menjalani proses pengeluaran racun (detoksifikasi), maka tubuh membutuhkan <a href="http://www.pesona.co.id/read/k-konsumsi-hidangan-lebaran" target="_blank" class="arta">penyesuaian kembali terhadap makanan-makanan yang kita konsumsi</a>. Jangan memaksakan tubuh kita makan dengan porsi makan yang berlebih, berhentilah sebelum kenyang, mulailah sebelum lapar. Tubuh perlu beradaptasi kembali dengan pola waktu makan yang normal. Pelan-pelan, kembalilah pada pola makan dengan porsi kecil dengan frekuensi 5-6 kali sehari atau ambil porsi sedikit-sedikit saja.</p>
      <li>Konsumsi air minum yang cukup</li>
      <p>Dengan <a href="http://bangka.tribunnews.com/2016/07/04/tips-tetap-sehat-pola-makan-saat-lebaran-ikuti-6-langka-detoks-ini?page=all" target="_blank" class="arta">meminum banyak air putih</a>, zat-zat racun dalam tubuh dapat terbuang dengan sendirinya melalui saluran pembuangan. Atau kamu juga dapat meminum Air Alkali sebagai pengganti air putih, dengan begitu kadar asam yang ada pada dalam tubuh akan kembali netral.</p>
      <li>Kurangi makanan berlemak</li>
      <p>Makanan yang biasa dihidangkan saat lebaran berupa olahan berbagai jenis daging, baik daging sapi, kambing, maupun daging ayam. Daging, terutama daging merah, <a href="https://hellosehat.com/6-cara-tetap-makan-sehat-di-hari-lebaran/" target="_blank" class="arta">cenderung tinggi akan lemak jenuh</a>. Meskipun konsumsi daging tidak sepenuhnya dilarang, ada beberapa cara yang bisa Anda lakukan untuk menyiasati lemak yang terdapat dalam masakan daging.Misalnya, jika Anda makan ayam, Anda bisa memilih bagian dada dibanding paha atau sayap, karena bagian dada cenderung lebih sedikit kandungan lemaknya. Selain itu saat memakan ayam, sebisa mungkin hindari memakan bagian kulitnya karena lemak yang dimilki unggas biasanya tersimpan di kulitnya.</p>
      <li>Perbanyak makan buah dan sayuran</li>
      <p>Selain membantu <a href="http://www.beritasatu.com/kesehatan/291905-anjuran-pola-makan-sehat-selama-lebaran.html" target="_blank" class="arta">mengikat lemak agar tidak mudah diserap oleh tubuh</a>, secara umum konsumsi buah dan sayur penduduk Indonesia memang masih rendah. Penelitian <a href="http://health.kompas.com/read/2015/06/22/121606723/Orang.Indonesia.Kurang.Makan.Sayuran" target="_blank" class="arta">Balitbangkes</a> menunjukkan, konsumsi sayuran dan buah penduduk Indonesia hanya 91 gram per hari, sekitar setengah dari konsumsi masyarakat Thailand dan Filipina, atau seperlima dari konsumsi masyarakat Singapura yang sebesar 518 gram. Jumlah konsumsi sayur dan buah penduduk Indonesia ini masih jauh dari yang dianjurkan, yaitu sebanyak lima porsi per hari.</p>
      <li>Hindari minuman manis dan soda dalam jumlah berlebihan</li>
      <p>Saat lebaran, pasti identik dengan makanan dan minuman yang manis-manis. <a href="http://www.idntimes.com/erny/tetap-sehat-saat-lebaran-ini-11-trik-yang-bisa-kamu-coba" target="_blank" class="arta">Soda dan minuman manis</a> berpotensi menyebabkan batuk dan radang tenggorokan. Boleh saja kamu mengkonsumsi makanan dan minuman tersebut, tapi dalam porsi yang kecil.</p>
      <li>Pola olahraga sederhana</li>
      <p>Di samping mengatur pola makan, baik pula untuk mengatur pola olahraga. Misalnya, lakukan jogging singkat saat perut masih dalam keadaan kosong. Kedua, lakukan olahraga ringan seperti peregangan, latihan bodyweight seperti push up, squat, lunge, dan olahraga ringan lainnya sebanyak 15 repetisi dan 3 set. Jika masih terasa berat, kamu bisa mengatur jadwalnya. Misalnya, melakukan dua jenis olahraga tersebut secara berselang-seling.</p>
   </ol>
   <p>Dengan memperhatikan hal-hal diatas tentunya memiliki badan ideal setelah hari raya adalah hal yang sangat memungkinkan. Selamat mencoba teman-teman!</p>
</div>
<?php
$htmlContent = ob_get_clean();

include 'konten artikel layout.php';
?>
