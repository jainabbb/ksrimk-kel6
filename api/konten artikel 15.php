<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_page'] = 2;
$_SESSION['no_artikel'] = 15;
$_SESSION['judul'] = "Insomnia";
$_SESSION['tanggal'] = "03-08-2018";

ob_start();
// Menyimpan HTML dalam variabel
?>
<div class="d-none" id="judulart">
   <h2>Insomnia</h2>
   <p>03-08-2018</p>
</div>
<img src="../images/konten artikel 15.jpg" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
    <p>Terbiasa tidur larut malam selama beberapa pekan bisa menganggu siklus tidur kita. Sempat tidur sih, tapi menjelang pagi dan akhirnya tubuh jadi tidak fit untuk melakukan kegiatan di hari berikutnya. Kamu sering mengalami hal seperti itu? Mungkin kamu mengalami insomnia. Insomnia adalah kondisi saat seseorang mengalami kesulitan untuk tidur atau tidak bisa tidur cukup lama sesuai dengan waktu yang dibutuhkan tubuh meski dia memiliki kesempatan untuk melakukannya.</p>    
    <p>Ada sebuah penelitian yang menyimpulkan bahwa kasus insomnia di negara-negara berkembang termasuk Indonesia mencapai 150 juta kasus di tahun 2010. Penelitian itu juga menyatakan bahwa di antara delapan negara yang diteliti, Indonesia memliki kasus insomnia yang termasuk sedikit, yaitu 3.9 persen untuk pria, dan 4.6 persen untuk wanita.</p>
    <br>
    <p style="font-weight: bold; text-indent: 0">Gejala insomnia itu gimana aja sih?</p>
    <p>Sebenarnya sulit menentukan ukuran tidur normal karena kebutuhan tidur masing-masing individu berbeda. Hal ini dipengaruhi usia, gaya hidup, lingkungan, juga pola makan. Umumnya orang dewasa sehat biasa tidur 7-9 jam pada malam hari. Namun semakin tua, tubuh kita akan mengalami penurunan jam tidur. Ada beberapa gejala insomnia yang umum ditemui, yaitu:</p>
    <ul class="artlist">
        <li>Susah tidur</li>
        <li>Terbangun di malam hari atau dini hari dan tidak bisa tidur kembali</li>
        <li>Merasa lelah, uring-uringan, sulit berkonsentrasi, dan tidak bisa melakukan aktivitas secara baik pada siang harinya</li>
        <li>Tidak bisa tidur siang meskipun tubuh lelah</li>
    </ul>
    <p style="font-weight: bold; text-indent: 0">Kok bisa sih seseorang mengalami insomnia?</p>
    <p style="text-indent: 0">Ada beberapa sebab nih, diantaranya:</p>
    <ul class="artlist">
        <li>Rutinitas tidur</li>
        <li>Gaya hidup yang buruk, misalnya kebiasaan mengonsumsi kopi atau minuman keras secara berlebihan</li>
        <li>Porsi olahraga</li>
        <li>Riwayat kesehatan (penyakit yang mungkin kamu derita)</li>
        <li>Obat-obatan yang mungkin kamu konsumsi</li>
    </ul>
    <p style="font-weight: bold; text-indent: 0">Lalu bagaimana cara mengobatinya?</p>
    <p>Kamu harus tetap tenang serta berusaha menciptakan suasana yang nyaman menjelang dan ketika tidur. Jika kamu merasa kesulitan untuk tidur atau sulit mempertahankan tidur, bahkan sampai berdampak kepada kehidupan sehari-hari, maka sebaiknya kamu segera berkonsultasi dengan dokter. Dalam <a href="https://www.alodokter.com/insomnia/pengobatan" class="arta" target="_blank">mengobati insomnia</a>, hal pertama yang dilakukan oleh dokter adalah mencari tahu apa yang menjadi penyebab. Jika insomnia didasari oleh kebiasaan atau pola hidup tertentu yang tidak sehat, maka dokter akan menyarankan kamu untuk memperbaikinya. Jika insomnia disebabkan oleh gangguan kesehatan (misalnya gangguan kecemasan), maka dokter akan terlebih dahulu mengatasi kondisi yang mendasari rasa cemas tersebut.</p>
    <br>
    <p>Dalam beberapa kasus insomnia, dokter akan menyarankan pasien menjalani terapi perilaku kognitif. Terapi ini bisa membantu pasien mengubah perilaku dan pola pikir yang memengaruhi tidur mereka.</p>
    <p>Jika dirasa perlu, dokter dapat meresepkan obat tidur untuk beberapa waktu. Obat tidur merupakan solusi yang bersifat sementara saja. Menangani gejala insomnia tanpa mencari solusi untuk akar penyebabnya, jarang berhasil sepenuhnya.</p>
    <p>Jadi bagaimana? Semoga setelah membaca artikel ini kamu bisa sembuh dari insomniamu dan bisa tidur nyenyaak yaaa.</p>
    <br>
    <p style="text-indent: 0;">Sumber:</p>
    <ul class="linkul" style="padding: 0">
         <a href="https://expertbeacon.com" target="_blank"><li>expertbeacon.com</li></a>
         <a href="https://alodokter.com/insomnia" target="_blank"><li>alodokter.com/insomnia</li></a>
   </ul>
</div>

<?php
   $htmlContent = ob_get_clean();
   include 'konten artikel layout.php';
?>