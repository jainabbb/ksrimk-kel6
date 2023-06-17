<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_artikel'] = 11;
$_SESSION['judul'] = "Tidur dalam Gelap? Ini Manfaatnya!!";
$_SESSION['tanggal'] = "20-05-2019";

ob_start();
// Menyimpan HTML dalam variabel
?>
<img src="../images/pmi.jpg" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
   <p>Setiap hari tubuh manusia selalu melakukan berbagai aktivitas. Dengan berbagai aktifitas yang dijalani pastinya tubuh membutuhkan tenaga yang tidak sedikit, untuk memulihkan tenaga maka perlu istirahat. Rasa kantuk menjadi sinyal bagi tubuh untuk segera beristirahat. Tidur berkualitas sangat penting bagi tubuh. Salah satu cara mendapatkan tidur yang berkualitas adalah dengan <span style="font-weight: 600;">mematikan lampu saat tidur</span>. Selain dapat menghemat listrik, ternyata keadaan gelap saat tidur bermanfaat bagi kesehatan tubuh. Manfaat yang didapat saat tidur dalam keadaan gelap yaitu</p>
   <ol type="1" class="artol">
      <li>Meningkatkan produksi hormon melatonin</li>
      <p>Manfaat utama dari mematikan lampu saat tidur adalah meningkatkan produksi hormon melatonin. Hormon melatonin dihasilkan oleh kelenjar pineal yang berada di otak yang berfungsi sebagai antioksidan dalam tubuh, meningkatkan sistem kebalan tubuh, dan mengatur jam biologis tubuh, mengurangi diabetes, obesitas, tekanan darah tingii, dan ganggguan irama jantung. Apabila terdapat cahaya, produksi hormon ini akan menurun bahkan dapat berhenti. Oleh karena itu, produksi hormon melatonin akan meningkat pada malam hari dan menurun pada pagi hari.</p>
      <p>Salah satu bahaya dari tidur dengan lampu dinyalakan adalah menyebabkan kanker. Hormon melatonin dapat mencegah kanker. Semakin banyak jumlah hormon melatonin maka sistem kekebalan tubuh akan semakin meningkat. Menurut praktisi kesehatan, Lynne Eldridge M.D, mengatakan bahwa perempuan buta 80 persen lebih kecil terkena kanker dibandingkan perempuan rata-rata lainnya.</p>
      <p>Kelebihan hormon melatonin akan membuat tubuh menjadi lemas, gemetar, lesu, sakit kepala, gangguan pikiran, kebingungan, dan gangguan mata. Sedangkan kekurangan hormon melatonin akan menyebabkan insomnia, depresi, gelisah, katarak, kolesterol tinggi, tekanan darah tinggi, dan gangguan irama jantung.</p>
      <li>Tidur menjadi lebih cepat dan mudah</li>
      <p>Bila dibandingkan tidur dengan lampu menyala dan lampu dimatikan, pasti akan lebih mudah dengan lampu dimatikan karena mata akan menjadi lebih rileks. Cahaya tidak dapat menerobos masuk ke mata dan mengganggu kualitas tidur serta tidak akan merasa silau dengan cahaya lampu.</p>
      <li>Meningkatnya kinerja otak</li>
      <p>Apabila lampu menyala saat tidur maka cahaya akan tetap dapat menerobos masuk mata walaupun kita sudah tidur. Cahaya tersebut akan tetap merangsang otak dan otak tetap akan merespon rangsangan tersebut. Walaupun tidur, otak tetap bekerja. Lain halnya bila kita tidur dengan keadaan gelap. Otak dapat lebih optimal dalam beristirahat.</p>
      <li>Meredakan tingkat stres dan depresi</li>
      <p>Produksi hormon melatonin akan mempengaruhi produksi hormon endorfin. Hormon endorfin dikenal dengan hormon kebahagiaan dimana dapat menghasilkan efek tenang, senang, dan nyaman secara alami. Dengan efek tersebut seseorang akan merasa lebih berenergi dan bersemangat dalam melakukan suatu aktifitas.</p>
      <li>Tubuh menjadi lebih segar saat bangun</li>
      <p>Dengan mematikan lampu seluruh anggota badan akan benar-benar rileks dan tidur menjadi lebih nyenyak sehingga pada sat bangun badan menjadi lebih segar.</p>
   </ol>
   <p>Ternyata banyak menfaat yang didapat bila tidur dalam keadaan gelap. Tetaplah menjaga kualitas tidur agar tubuh menjadi lebih optimal dalam beraktivitas.</p>
</div>
<?php
$htmlContent = ob_get_clean();

include 'konten artikel layout.php';
?>
