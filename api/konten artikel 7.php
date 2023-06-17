<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_page'] = 2;
$_SESSION['no_artikel'] = 3;
$_SESSION['judul'] = "Pola Hidup Mahasiswa Politeknik Statistika STIS 2019";
$_SESSION['tanggal'] = "31-08-2019";

ob_start();
// Menyimpan HTML dalam variabel
?>
<div class="d-none" id="judulart">
   <h2>Pola Hidup Mahasiswa Politeknik Statistika STIS 2019</h2>
   <p>31-08-2019</p>
</div>
<img src="../images/konten artikel 7.jpg" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
   <p style="font-weight: bold; text-indent: 0">Pola Tidur</p>
   <p>Konsultan Kesehatan AMLIFE Edward Yong menyebutkan bahwa ada tiga elemen yang dapat menentukan kualitas tidur yang baik, yaitu durasi, kontinuitas dan kedalaman. Durasi yaitu lamanya waktu tidur seseorang. Normalnya, orang dewasa tidur dalam waktu tujuh sampai delapan jam per hari. Kontinuitas dapat dilihat dari waktu tidur yang tidak terhenti hingga saat bangun esok hari. Bila terjaga di tengah malam tidur itu tidak masuk dalam kategori tidur yang berkualitas. Kedalaman tidur atau tingkat kenyenyakan juga menjadi penanda tidur yang berkualitas. Tidur yang nyenyak membuat tubuh merasa segar keesokan harinya dan siap memulai aktivitas.</p>
   <br>
   <p style="font-weight: bold; text-indent: 0">Pola Mandi</p>
   <p>Bagi kenyamanan tubuh, mandi sebanyak 2 kali sehari merupakan suatu keharusan. Mandi akan menyegarkan dan melepaskan dari rasa gelisah, tidak enak dan bau badan yang kurang sedap. Selain kenyamanan fisik juga merupakan kebutuhan integritas kulit dan tubuh agar terhindar dari penyakit infeksi (Wolf,2004).</p>
   <p>Banyak orang beranggapan sabun batangan lebih banyak kuman. Ternyata dalam sebuah survei, sabun batangan tidak mentransfer bakteri ke kulit. Justru yang banyak mengandung bakteri adalah penggunaan spons untuk mandi karena bentuknya berpori. Sehingga sel-sel kulit mati bisa mengendap. Tipsnya, jika masih ingin menggunakan spons mandi, maka sebaiknya spons dibersihkan atau diganti sebelum mandi. Melansir dari Medical Daily, Jumat (6/7/2018), sabun batang nyatanya masih bisa mengandung bakteri walau diklaim bersih. Centers for Disease Control and Prevention Amerika Serikat (AS) menyarankan Anda untuk lebih memilih sabun cair daripada batang. Apabila memang lebih suka dengan sabun batang, ada baiknya untuk tidak berbagi pemakaian.</p>
   <p>Kebersihan handuk juga penting untuk diperhatikan. Sebaiknya memakai handuk secara tidak bersama-sama karena mudah menularkan bakteri dari penderita ke orang lain. Apalagi bila handuk tidak pernah dijemur dibawah terik matahari ataupun tidak dicuci dalam jangka waktu yang lama maka kemungkinan jumlah bakteri yang ada pada handuk banyak sekali dan sangat beresiko untuk menularkan kepada orang lain.</p>
   <br>
   <p style="font-weight: bold; text-indent: 0">Pola Makan</p>
   <p>Mengonsumsi makanan yang kotor dan jorok akan memengaruhi kesehatan pencernaan, seperti timbul diare, kram perut, muntah, mual, dan sebagainya. Pada beberapa penelitian, kebersihan bahkan menyebutkan bahwa makanan juga dapat gangguan mental. Seperti penelitian yang dilaporkan dalam Journal of Food Protection. Penelitian ini membuktikan bahwa bakteri yang ada dalam makanan juga dapat berdampak buruk bagi kesehatan mental dan otak. Ada beberapa jenis bakteri dan patogen yang dapat langsung memengaruhi kerja otak, sehingga dapat mengganggu kesehatan mental. Contohnya, seperti parasit jenis Taenia solium dan Toxoplasma gondii, keduanya merupakan parasit yang dapat langsung memengaruhi fungsi otak. Wah jadi penting banget nih temen-temen buat selalu mengutamakan kebersihan makanan.</p>
   <br>
   <p style="font-weight: bold; text-indent: 0">Kebersihan Lingkungan</p>
   <p>Menurut Lita (2005), kuman penyebab penyakit kulit paling senang hidup dan berkembang biak di perlengkapan tidur. Dengan menjemur kasur sekali seminggu dan mengganti sprei sekali seminggu ini bisa mengurangi perkembangbiakan kuman penyakit kulit.</p>
   <p>Selain mengganti seprei,membersihkan kamar mandi juga perlu menjadi perhatian lho karena menurut Alfia Wardah (2015) selaku Home & Health Business Head Consumer Business Group PT 3M, hendaknya untuk bersihkan kamar mandi secara rutin 2 minggu sekali agar kotoran tidak menumpuk.</p>
   <br>
   <p>Udah tau kan sekarang gimana menjaga kesehatan dan kebersihan lingkungan? Terapkan yuk, salam sehat.</p>
</div>
<?php
$htmlContent = ob_get_clean();
include 'konten artikel layout.php';
?>