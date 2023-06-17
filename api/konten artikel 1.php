<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_artikel'] = 1;
$_SESSION['judul'] = "Pentingnya \"Me Time\" Untuk Kesehatan Psikologis";
$_SESSION['tanggal'] = "01-04-2021";
ob_start();
// Menyimpan HTML dalam variabel
?>
<img src="../images/pmi.jpg" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
            <p>
            Manusia merupakan makhluk sosial yang tidak bisa hidup sendiri. Manusia perlu berinteraksi dengan orang lain dan melakukan rutinitas sehari-hari. Bahkan sampai menguras waktu, tenaga, dan pikiran. Tapi pernahkah kamu merasa penat akan segala rutinitas yang kamu lakukan? Disinilah kamu bisa meluangkan waktu sejenak untuk diri sendiri, yaitu Me Time. Banyak orang yang belum paham pentingnya Me Time untuk kesehatan psikologis. Ada yang berpikir bahwa Me Time telalu memikirkan diri sendiri, egois dan antisosial. Faktanya Me Time memberikan banyak manfaat. Yuk simak manfaatnya dibawah ini.
            </p>
            <!-- <br> -->
            <ul class="artlist">
               <li>Menjernihkan pikiran dan menyegarkan tubuh</li>
               <p>Waktu untuk diri sendiri amat berguna untuk menyegarkan pikiran karena otak beristirahat sejenak dan terbebas dari berbagai hal yang mengganggunya. Jika pikiran kamu terasa segar, tubuh pun akan merasakan hal yang sama.</p>
               <li>Meningkatkan mood dan mengurangi stress</li>
               <p>Semakin banyak dan sulit pekerjaan menjadikan diri lebih stres dan mood akan sering berubah-berubah. Oleh sebab itu, Me Time  sangat diperlukan untuk meningkatkan mood agar senantiasa senang dan mengurangi stres agar kita dapat bekerja maupun belajar lebih baik.</p>
               <li>Meningkatkan konsentrasi dan produktivitas</li>
               <p>Selain bisa membuatmu lebih berkonsentrasi kamu juga bisa menggali potensi yang ada pada dirimu. Saat kamu kembali kerutinitasmu, kamu lebih siap untuk mengadapi segala hal yang terjadi.</p>
               <li>Bisa lebih memahami diri sendiri dan introspeksi diri</li>
               <p>Saat Me Time, kamu dapat merenungkan banyak hal, termasuk memahami diri kamu sendiri. Dengan begitu, kamu bisa menilai diri lebih baik, mengurangi hal-hal negatif pada diri kamu dan berusaha menjadi pribadi yang lebih positif.</p>
               <li>Membuat keputusan yang lebih tepat</li>
               <p>Saat Me Time kamu bisa mempertimbangkan lebih dalam mengenai berbagai keputusan yang kamu ambil untuk masa depan. </p>
               <li>Meningkatkan kemampuan bersosialisasi</li>
               <p>Ketika kamu melakukan Me Time kamu bisa memikirkan lebih banyak hal yang positif. Ketika kamu kembali ke rutinitas dengan pribadi yang lebih positif, otomatis kamu punya rasa percaya diri yang lebih besar dan mengubah cara pandang dan berfikirmu tentang menjaga hubungan baik dengan orang lain  sehingga mampu bersosialisasi lebih baik. </p>
            </ul>
            <!-- <br> -->
            <p>Nah sekarang kamu sudah tahu kan betapa pentingnya Me Time untuk kesehatan psikologismu. Ada beberapa tips melakukan Me Time sederhana tetapi tetap bermanfaat. Seperti: duduk di teras rumah sambil siapkan camilan dan minuman, mendengarkan musik sendirian, duduk tenang tidak melakukan apapun sambil meregangkan badan, dan lain-lain. Me Time tidak harus dilakukan berjam-jam atau berhari-hari, bahkan 10-30 menit saja kamu bisa menggunakan waktu sebaik-baiknya. </p>
         </div>

<?php
$htmlContent = ob_get_clean();

include 'konten artikel layout.php';
?>

