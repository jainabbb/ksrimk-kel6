<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_page'] = 2;
$_SESSION['no_artikel'] = 17;
$_SESSION['judul'] = "Tidur di Lantai dengan Paparan Kipas Angin";
$_SESSION['tanggal'] = "09-04-2018";

ob_start();
// Menyimpan HTML dalam variabel
?>
<div class="d-none" id="judulart">
   <h2>Tidur di Lantai dengan Paparan Kipas Angin</h2>
   <p>09-04-2018</p>
</div>
<img src="../images/konten artikel 17.jpg" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
   <p>Belakangan ini, cuaca sedang panas-panasnya, apalagi bagi kaum yang pindah dari daerahnya ke ibukota Jakarta. Perubahan cuaca yang dirasakan sangat besar. Hal ini dikarenakan global warming, pepohonan yang tidak begitu banyak di daerah Jakarta, dimana-mana hanya terlihat gedung-gedung tinggi, dan juga polusi udara.</p>
   <p>Disaat cuaca sangat panas, kita sering ingin mengonsumsi makanan ataupun minuman yang dingin, selain itu jika di malam hari kita juga sering suka tidur di lantai dengan ditemani kipas angin dibandingkan tidur di atas kasur yang empuk.</p>
   <p>Namun, tidur di lantai dengan ditemani kipas angin itu berpengaruh buruk bagi kesehatan. Apalagi kalau paparan kipas angin langsung mengarah ke arah wajah, ini dapat menyebabkan penyakit Bell Palsy.</p>
   <p>Bell Palsy terjadi dikarenakan membengkaknya saluran saraf Fasialis (wajah) yang melewati telinga. Beberapa ahli menyatakan penyebab BP berupa paparan angin dingin secara terus-menerus di salah satu sisi wajah, ada juga yang mengatakan disebabkan oleh virus herpes yang menetap di tubuh dan teraktivasi kembali karena trauma, faktor lingkungan, stress dll. Sebagian penderita dapat sembuh tanpa pengobatan, namum disarankan untuk menjalani terapi dan pengobatan.</p>
   <p>Tanda-tanda terkena BP dapat dilihat pada saat seseorang tersenyum, maka bagian bibir yang satu sisi dengan pembengkakan saluran saraf akan sulit untuk bergerak mengikuti pola senyuman. Begitupun apabila anak hendak mengernyitkan alis, maka alis di sisi pembengkakan akan sulit terangkat.</p>
   <p>Selain BP, paparan kipas angin langsung ke wajah juga dapat menyebabkan masalah kesehatan lainnya seperti risiko terkena infeksi saluran pernafasan (ISP), tubuh mengalami dehidrasi, sesak napas, kulit kering, kekebalan tubuh berkurang, otot nyeri, dan kualitas tidur yang buruk.</p>
   <p>Beberapa hal bisa diterapkan untuk meminimalkan kemungkinan dampak resiko kesehatan dari penggunaan kipas angin, yaitu:</p>
   <ol type="1" class="artol m-0">
      <li>Jika ruangan tertutup dan tidak memiliki sirkulasi udara yang memadai, sebaiknya tidak menggunakan kipas angin jika tak memungkinkan untuk membuka pintu.</li>
      <li>Jangan arahkan hembusan udara dari kipas angin langsung kewajah karena bisa membuat oksigen bercampur dengan CO2.</li>
      <li>Jangan arahkan langsung udara dari kipas ke tubuh, melainkan bisa dipantulkan dulu ke dinding untuk mencegah kulit kering dan penurunan suhu tubuh.</li>
      <li>Agar tidak terlalu lama terpapar oleh kipas angin, maka settinglah timer “off” kipas angin sekitar waktu tidur.</li>
      <li>Gunakan kecepatan angin sedang atau kecil sesuai kebutuhan.</li>
   </ol>
   <p>Sedangkan untuk tidur di lantai akan berpengaruh buruk bagi kesehatan. Tidur di lantai yang lembab dan dingin memang nyaman pada awalnya, namun bila dilakukan terlalu sering akan membuat tubuh terasa sakit, demam dan masuk angin. Selain itu, tidur di lantai tidak baik karena adanya debu-debu di lantai, dimana debu mempunyai gaya berat sehingga debu akan mengendap di lantai. Kemungkinan kita untuk menghisap debu dilantai akan lebih banyak daripada kita tiduran di atas kasur.</p>
   <p>Di kalangan masyarakat, kita juga sering mendengar "jika tidur di lantai akan mengakibatkan paru-paru basah". Hal ini tentunya hanyalah mitos belaka. Menurut Spesialis Penyakit Dalam dan Spesialis Paru, Dr. M. Harun Iskandar tidak ada kaitan langsung antara paru-paru basah dengan larangan tidur di lantai. Paru-paru basah sebenarnya tidak dikenal dalam dunia medis, istilah ini hanya familiar di masyarakat awam. Paru-paru basah ini sesungguhnya diakibatkan oleh infeksi di selaput pembungkus paru (<em>efusi pleura</em>). Efusi pleura merupakan suatu gejala yang serius dan dapat mengancam jiwa penderita.</p>
   <p>Jadi, larangan tidur di lantai sesungguhnya bukan karena akan terserang paru-paru basah, namun karena efeknya pada kesehatan seperti debu-debu yang mengendap di lantai yang akan kita hirup jika tidur dilantai dan juga tubuh akan terasa sakit jika tidur terlalu lama di lantai. Dan juga tidur dengan paparan kipas angin secara langsung yang mengarah ke wajah sebaiknya dihindari agar tidak terserang penyakit Bell Palsy dan masalah kesehatan lainnya.</p>
</div>
<?php
   $htmlContent = ob_get_clean();
   include 'konten artikel layout.php';
?>

