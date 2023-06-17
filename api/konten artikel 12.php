<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_artikel'] = 12;
$_SESSION['judul'] = "Diare? Jangan Anggap Sepele!";
$_SESSION['tanggal'] = "01-01-2023";

ob_start();
// Menyimpan HTML dalam variabel
?>
<img src="../images/artikel 12.png" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
   <p>Dilansir dari <span style="font-style: italic">Buletin Diare Kementrian Kesehatan Republik Indonesia</span>, berdasarkan pola penyebab kematian semua umur; Diare merupakan penyebab kematian peringkat ke-13 dengan proporsi 3,5%. Sedangkan berdasarkan penyakit menular, diare merupakan penyebab kematian peringkat ke-3 setelah TB dan Pneumonia.</p>
   <p>Mencengangkan, bukan? penyakit yang sering dianggap sepele ini ternyata berpotensi menjadi penyebab kematian. Tapi jangan khawatir, artikel ini akan membantu Anda mengenal lebih jauh berkaitan dengan penyakit Diare. Yuk, Kepoin!</p>
   <br>
   <p style="font-weight: bold; text-indent: 0">Apa itu Diare?</p>
   <p>Pengertian diare secara operasional adalah buang air besar <span style="font-style: italic;">lembek</span>/ cair bahkan dapat berupa air saja yang frekuensinya lebih sering dari biasanya (biasanya lebih dari tiga kali sehari) dan berlangsung kurang dari 14 hari (Depkes RI, 2002).</p>
   <br>
   <p style="font-weight: bold; text-indent: 0">Apa penyebab Diare?</p>
   <ol type="1" class="artol">
      <li>Infeksi bakteri, virus, atau parasit</li>
      <li>Malabsorpsi</li>
      <li>Alergi</li>
      <li>Keracunan bahan kimia atau makanan</li>
      <li>Imunisasi Defisiensi</li>
      <li>Sebab lain</li>
   </ol>
   <p style="font-weight: bold; text-indent: 0">Bagaimana cara mencegah diare?</p>
   <ol type="1" class="artol">
      <li>Cuci tangan Anda setelah melakukan aktivitas yang rentan terkontaminasi virus/ bakteri</li>
      <li>Sajikan segera makanan atau dinginkan di kulkas setelah dimasak atau dipanaskan. Jika makanan berada pada suhu ruangan terlalu lama dapat mendorong pertumbuhan bakteri</li>
      <li>Pastikan Anda mengonsumsi makanan dan minuman yang bersih</li>
   </ol>
   <p style="font-weight: bold; text-indent: 0">Bagaimana Langkah Penanganan Diare?</p>
   <p style="font-weight: bold; text-indent: 0">Berikan Oralit</p>
   <p>Untuk mencegah terjadinya dehidrasi dapat dilakukan mulai dari rumah tangga dengan memberikan oralit osmolaritas rendah, dan bila tidak tersedia berikan cairan rumah tangga seperti air tajin, kuah sayur, air matang. Oralit saat ini yang beredar di pasaran sudah oralit yang baru dengan osmolaritas yang rendah, yang dapat mengurangi rasa mual dan muntah. Oralit merupakan cairan yang terbaik bagi penderita diare untuk mengganti cairan yang hilang. Bila penderita tidak bisa minum harus segera di bawa ke sarana kesehatan untuk mendapat pertolongan cairan melalui infus.</p>
   <br>
   <p>Gimana nih? Sudah tau kan informasi berkaitan dengan Diare. So, kamu yang anak kosan jangan sembarang pilih makanan lagi ya! Ayo jangan sepelekan Diare dan mulailah pola hidup sehat sejak dini!</p>
</div>

<?php
$htmlContent = ob_get_clean();

include 'konten artikel layout.php';
?>