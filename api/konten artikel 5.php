<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_page'] = 2;
$_SESSION['no_artikel'] = 5;
$_SESSION['judul'] = "Yuk Kenal Lebih Dekat Dengan COVID-19";
$_SESSION['tanggal'] = "22-08-2020";

ob_start();
// Menyimpan HTML dalam variabel
?>
<div class="d-none" id="judulart">
   <h2>Yuk Kenal Lebih Dekat Dengan COVID-19</h2>
   <p>22-08-2020</p>
</div>
<img src="../images/konten artikel 5.png" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
   <p style="font-weight: bold; text-indent: 0">Apa itu Covid-19?</p>
   <p>Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia. Beberapa jenis coronavirus diketahui menyebabkan infeksi saluran pernapasan manusia. COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan.</p>
   <br>
   <p style="font-weight: bold; text-indent: 0">Gejala Covid-19</p>
   <ol type="1" class="artol">
      <li>Demam tinggi</li>
      <p>Pada sebagian orang rentan perlu mewaspadai diri dan curigalah jika sudah mengalami demam tinggi bahkan hanya mencapai suhu tubuh 37,8 derajat Celsius.</p>
      <li>Batuk dan pilek</li>
      <p>Batuk yang dimaksudkan dalam kategori kemungkinan terinfeksi virus SARS-CoV-2 adalah batuk yang terlampau sering dalam sejam.
         Umumnya batuk kering dan terjadi terus-menerus, secara lebih dari tiga kali 24 jam.</p>
      <li>Berkurang indera penciuman</li>
      <p>Dalam diskusi online bertajuk "Covid-19 Tantangan dan Alternatif Solusi Berbasis Bukti", Erlina mengatakan, berkurangnya fungsi indera penciuman bisa menjadi gejala Covid-19.</p>
      <p>Bila ada aroma kuat di sekitar kita, orang lain bisa menciumnya tapi kita tidak, ini bisa jadi tanda bahwa ada gangguan fungsi pernapasan.</p>
      <li>Berkurang indera pengecap</li>
      <p>Gangguan fungsi pernapasan tidak hanya terlihat dari berkurangnya indera penciuman.
         Erlina menyebutkan bahwa berkurangnya indera pengecap pada lidah juga harus dicurigai sebagai ada gangguan fungsi tubuh Anda, yang bisa jadi akibat infeksi Covid-19.</p>
      <li>Sesak napas</li>
      <p>Sesak napas menjadi salah satu gejala yang serius. Umumnya pasien Covid-19 dalam kasus yang serius, akan mengalami pneumonia. Di mana kondisi paru-paru pasien dipenuhi dengan nanah dan cairan.Inilah yang dapat menyebabkan pasien dengan Covid-19 serius akan mengalami sesak napas yang intens dan batuk yang menyakitkan.</p>
      <li>Sakit tenggorokan</li>
      <p>Jika Anda mengalami keluhan tenggorokan kering yang terus-menerus selama beberapa hari, Anda juga perlu mewaspadai ini.</p>
      <li>Mata merah</li>
      <p>Kondisi terbaru yang ditemukan oleh para ilmuwan di China terdapat pada gejala pasien Covid-19 adalah <span style="font-style: italic;">conjunctivitis</span>.</p>
      <p><span style="font-style: italic;">Conjunctivitis</span> adalah inflamasi atau infeksi yang terdapat pada membran transparan (conjunctiva) pada mata. Ketika <span style="font-style: italic;">conjunctivitis</span> terjadi, pembuluh darah terinflamasi sehingga menimbulkan kondisi mata merah.Serta, kemungkinan virus corona ini menyerang area mata pada pasien yang mengidap pneumonia akut.</p>
      <li>Lelah</li>
      <p>Menurut sebuah laporan dalam <span style="font-style: italic;">Journal of American Medical Association</span>, sebanyak 11-14 persen melaporkan lemah dan lelah.</p>
      <p>Orang-orang lanjut usia (lansia) dan orang-orang dengan kondisi medis yang sudah ada sebelumnya seperti tekanan darah tinggi, gangguan jantung atau diabetes, punya kemungkinan lebih besar mengalami sakit lebih serius.</p>
   </ol>
   <br>
   <p style="font-weight: bold; text-indent: 0">Penularan Covid-19</p>
   <p>Orang dapat tertular COVID-19 dari orang lain yang terjangkit virus ini. COVID-19 dapat menyebar dari orang ke orang melalui percikan-percikan dari hidung atau mulut yang keluar saat orang yang terjangkit COVID-19 batuk atau mengeluarkan napas. Oleh karena itu, penting bagi kita untuk menjaga jarak lebih dari 1 meter dari orang yang sakit.</p>
   <p>Menurut penelitian sejauh ini, virus penyebab COVID-19 ini umumnya menular melalui kontak dengan percikan dari saluran pernapasan, bukan melalui udara.Risiko penularan COVID-19 dari feses orang yang terinfeksi COVID-19 adalah kecil. Namun demikian, karena risiko tetap ada (walaupun kecil), hal ini memperkuat alasan mengapa kita harus rajin mencuci tangan setelah menggunakan kamar mandi dan sebelum makan.</p>
   <br>
   <p style="font-weight: bold; text-indent: 0">Langkah Pencegahan Covid-19</p>
   <p>Anda dapat mengurangi risiko terinfeksi atau menyebarkan COVID-19 dengan cara melakukan beberapa langkah pencegahan:</p>
   <ol type="1" class="artol">
      <li>Seringlah mencuci tangan Anda dengan air bersih mengalir dan sabun, atau cairan antiseptik berbahan dasar alkohol.</li>
      <li>Jaga jarak setidaknya 1 meter dengan orang yang batuk-batuk atau bersin-bersin.</li>
      <li>Hindari menyentuh mata, hidung, dan mulut.</li>
      <li>Pastikan Anda dan orang-orang di sekitar Anda mengikuti etika batuk dan bersin dengan cara menutup mulut dan hidung dengan siku terlipat atau tisu saat batuk atau bersin dan segera buang tisu bekas tersebut.</li>
      <li>Tetaplah tinggal di rumah jika merasa kurang sehat. Jika Anda demam, batuk dan kesulitan bernapas, segeralah cari pertolongan medis dan tetap memberitahukan kondisi Anda terlebih dahulu. Ikuti arahan Dinas Kesehatan setempat Anda.</li>
   </ol>
   <p style="font-weight: bold; text-indent: 0">Perlindungan jika sedang berada di atau pernah berkunjung ke (dalam waktu 14 hari terakhir) wilayah di mana COVID-19 menyebar</p>
   <ol type="1" class="artol">
      <li>Ikuti panduan di atas (Perlindungan untuk semua orang)</li>
      <li>Lakukan isolasi diri dengan cara tetap tinggal di rumah jika Anda mulai merasa kurang sehat, bahkan jika gejalanya ringan seperti sakit kepala, demam berskala rendah (37.3 C atau lebih) dan pilek ringan, sampai Ana sembuh. Jika orang lain harus membawakan Anda persediaan atau jika Anda harus keluar, misal untuk membeli makanan, kenakanlah masker agar tidak menginfeksi orang lain.</li>
      <li>Jika Anda demam, batuk dan kesulitan bernapas, segera minta nasihat dokter karena kondisi ini bisa jadi dikarenakan infeksi saluran pernapasan atau kondisi serius lainnya. Jika Anda sudah memberitahukan kondisi Anda terlebih dahulu, petugas kesehatan dapat lebih cepat mengarahkan Anda ke fasilitas kesehatan yang tepat. Hal ini juga membantu mencegah kemungkinan penyebaran COVID-19 dan virus-virus lainnya.</li>
   </ol>
   <br>
   <p style="font-weight: bold; text-indent: 0; font-style: italic;">Sekian artikel kesehatan kali ini.</p>
   <p style="font-weight: bold; text-indent: 0; font-style: italic;">Semoga bermanfaat!</p>
   <br>
   <p style="font-weight: bold; text-indent: 0;">Sumber</p>
   <ul class="linkul" style="padding: 0">
      <a href="https://www.who.int/indonesia/news/novel-coronavirus/qa-for-public" target="_blank">
         <li>https://www.who.int/indonesia/news/novel-coronavirus/qa-for-public</li>
      </a>
      <a href="https://amp-kontan-co-id.cdn.ampproject.org/v/s/amp.kontan.co.id/news/cemas-tertular-virus-corona-berikut-8-gejala-yang-harus-anda-curigai?amp_js_v=a3&_gsa=1&usqp=mq331AQFKAGwASA=#aoh=15979274834498&_ct=1597927486091&referrer=https%3A%2F%2Fwww.google.com&_tf=Dari%20%251%24s" target="_blank">
         <li>https://amp-kontan-co-id.cdn.ampproject.org/v/s/amp.kontan.co.id/news/cemas-tertular-virus-corona-berikut-8-gejala-yang-harus-anda-curigai?amp_js_v=a3&_gsa=1&usqp=mq331AQFKAGwASA=#aoh=15979274834498&_ct=1597927486091&referrer=https%3A%2F%2Fwww.google.com&_tf=Dari%20%251%24s</li>
      </a>
      <a href="https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan" target="_blank">
         <li>https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan</li>
      </a>
   </ul>
</div>
<?php
$htmlContent = ob_get_clean();
include 'konten artikel layout.php';
?>