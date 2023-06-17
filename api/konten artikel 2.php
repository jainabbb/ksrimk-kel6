<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_artikel'] = 2;
$_SESSION['judul'] = "Menjaga 'Mindset' Sehat di Tengah Pandemi";
$_SESSION['tanggal'] = "26-02-2021";
ob_start();
?>
<img src="../images/artikel 2.png" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
   <p>Di tengah pandemi COVID-19 yang penuh ketidakpastian, sulit rasanya untuk berpikir positif. Setiap hari, kita melihat berita tentang jumlah pasien positif yang terus meningkat, menipisnya persediaan alat pelindung diri, hingga cerita masyarakat yang kesusahan karena tidak dapat mencari nafkah.</p>
   <p>Berpikir positif memang tidak akan mengakhiri pandemi COVID-19 begitu saja. Situasi yang tidak stabil saat ini mungkin akan tetap membuat kita cemas. Meski demikian, pikiran yang positif dan realistis setidaknya dapat membantu kita berpikir lebih jernih sebelum mengambil keputusan.</p>
   <p style="text-indent: 0;">Kita dapat menjaga mindset sehat dengan cara berikut.</p>
   <ol type="1" class="artol">
      <li>Batasi konsumsi berita tentang COVID-19</li>
      <p>Pertama, yang perlu diperhatikan adalah perilaku. Sebisa mungkin kita harus membatasi diri untuk menonton atau membaca berita tentang update kasus virus corona di Indonesia maupun dunia. Cara ini mampu mengurangi kecemasan dan bisa tetap fokus terhadap apa yang harus dikerjakan.</p>
      <li>Tetaplah bangun dan mandi di pagi hari</li>
      <p>Walaupun aktivitas kita hampir setahun ini dilakukan secara daring yang memungkinkan kita untuk bermalas-malasan, usahakan untuk bangun pagi secara teratur dan dilanjutkan dengan mandi pagi. Bangun di pagi hari dapat memperbanyak waktu beraktivitas agar tidak dihabiskan dengan tidur saja. Manfaat lain adalah bisa mendapat vitamin D dari sinar matahari pagi yang tentunya belum terkontaminasi polusi udara. Mandi di pagi hari bisa meningkatkan tingkat produktivitas seseorang di hari tersebut. Tubuh yang segar dapat memengaruhi kondisi pikiran menjadi segar juga.</p>
      <li>Targetkan apa saja yang harus dikerjakan</li>
      <p>Agar tugas tidak berantakan, cobalah untuk mencatat apa saja yang perlu dikerjakan dan diselesaikan di hari tersebut. Cara ini mampu membuat hari tersebut lebih disiplin dan tertata sehingga tidak terlalu stres karena menumpuknya tugas. </p>
      <li>Konsumsi makanan sehat, buah, dan sayuran</li>
      <p>Makanan yang enak sering kali tidak bisa dikategorikan sehat. Mencoba memasak sendiri dengan bahan-bahan sehat yang sesuai dengan selera dapat menyehatkan tubuh kita. Dengan mengonsumsi makanan sehat, buah, dan sayuran, kekebalan tubuh akan terjaga sehingga dapat membantu kita untuk terhindar dari virus COVID-19.</p>
      <li>Mencoba hal baru</li>
      <p>Ada banyak sekali hobi di dunia ini. Cobalah untuk mengerjakan sesuatu yang bisa dijadikan hobi agar tidak terlalu sering bermalas-malasan bermain sosial media. Bahkan banyak juga hobi yang bisa dikerjakan sembari bersantai sendirian, seperti menyulam, melukis, membaca buku, bermain musik, membuat jurnal, dll. Bisa juga menjadikan olahraga sebagai hobi supaya bisa menjaga kebugaran tubuh. Atau hobi yang bisa menjadikan uang dengan menjadi distributor menjual ulang suatu produk dan menjajakannya ke daerah lingkungan sekitar.</p>
   </ol>
   <p>Pikiran yang positif akan terjaga jika kita mengatur dan membiasakannya. Kita bisa menjaga mindset tetap sehat di segala situasi jika kita mau untuk menjaganya. Tetaplah sehat, teman-teman!</p>
</div>
<?php
$htmlContent = ob_get_clean();

include 'konten artikel layout.php';
?>