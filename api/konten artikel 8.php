<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_page'] = 2;
$_SESSION['no_artikel'] = 3;
$_SESSION['judul'] = "Gempa Bumi? Jangan Panik!";
$_SESSION['tanggal'] = "17-08-2019";

ob_start();
// Menyimpan HTML dalam variabel
?>
<div class="d-none" id="judulart">
   <h2>Gempa Bumi? Jangan Panik!</h2>
   <p>17-08-2019</p>
</div>
<img src="../images/konten artikel 8.jpg" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
   <p>Gempa merupakan salah satu bencana alam yang telah merogoh harta bahkan nyawa manusia. Maka dari itu, bukan hal yang asing bila melihat manusia digeluti rasa panik saat gempa tiba-tiba menerpa. Sehingga ada baiknya kita mengetahui seluk beluk bencana Gempa bumi. Yuk, simak artikel singkat gempa bumi berikut!</p>
   <br>
   <strong>Mengapa gempa bumi terjadi di Indonesia?</strong>
   <p>Dikutip dari Buku “<em>Risiko Bencana Indonesia</em>” yang dipublikasi oleh BNPB (Badan Nasional Penanggulangan Bencana) dalam bab 1 mengenai <em>Profil Geologi Indonesia</em>, tertera bahwa Indonesia memiliki sisi geologi yang menarik, seperti yang tertera dibawah ini.</p>
   <ul class="artlist">
      <li>Indonesia memiliki wilayah paparan benua yang luas (paparan sahul dan paparan sunda).</li>
      <li>Terdapat Pegunungan lipatan tertinggi tropika yang diselimuti salju abadi (Pegunungan Tengah Papua).</li>
      <li>Satu-satunya di dunia yang mempunyai laut antarpulau dengan kedalaman yang sangat dalam (Laut Banda).</li>
      <li>Laut yang sangat dalam diantara dua busur kepulauan (Palung weber).</li>
      <li>Dua jalur gunung api dunia bertemu di nusantara.</li>
      <li>Beberapa jalur gunung lipatan dunia bertemu di nusantara.</li>
   </ul>
   <p>Poin-poin yang tertera diatas merupakan kondisi yang dihasilkan akibat adanya pertemuan tiga lempeng besar yaitu lempeng Eurasia, lempeng Indo-Australia, dan Lempeng Pasifik. Lempeng pasifik di bagian utara pulau papua dan Halmahera. Sedangkan zona pertemuan lempeng Eurasia dan Indo-Australia terdapat di lepas pantai barat sumatera, selatan jawa dan nusa tenggara. Zona ini umumnya juga ditandai dengan keberadaan palung yang cukup dalam. Aktifitas tektonik yang terjadi menyebabkan terbentuknya deretan gunungapi di sepanjang pulau Sumatera, Jawa-Bali-Nusa Tenggara, utara Sulawesi-Maluku, hingga Papua. Deret gunung api di Indonesia merupakan bagian dari deret gunungapi sepanjang Asia-Pasifik yang sering di sebut sebagai <em>Ring of Fire</em> atau deret sirkum pasifik. Zona atau wilayah yang berada diantara pertemuan lempeng dan deret gunung api sering di sebut sebagai zona aktif atau dikenal dengan istilah busur depan (<em>fore arc</em>), di wilayah ini umumnya banyak terdapat patahan aktif dan sering terjadi gempa bumi, misalnya wilayah bagian barat dari bukit barisan, pesisir selatan Jawa, dan pesisir pantai utara Papua.</p>
   <p>Sering kali setiap kejadian gempabumi di pesisir wilayah Pantai Selatan Jawa getarannya begitu kuat dirasakan oleh warga kota‐kota besar di Pulau Jawa, terutama di pusat ibukota Jakarta dan Bandung.</p>
   <br>
   <strong>Apa yang harus kita lakukan terhadap Gempa Bumi?</strong>
   <p>Mengingat rentannya bencana gempa bumi di Indonesia, tentu kita harus mengedukasi diri tentang tindakan yang harus dilakukan baik sebelum, saat, maupun sesudah gempa terjadi. Berikut tertera langkah antisipasi gempa bumi yang dikutip dari poster Palang Merah Indonesia dan poster antisipasi gempa oleh BMKG.</p>
   <ol type="A" class="artol">
      <li style="font-weight: bold;">Sebelum Gempa bumi</li>
      <ol type="1" class="artol">
         <li style="font-weight: bold;">Kunci Utama</li>
         <ul class="artlist">
            <li>Mengenali apa yang disebut gempabumi;</li>
            <li>Pastikan bahwa struktur dan letak rumah Anda dapat terhindar dari bahaya yang disebabkan oleh gempa bumi (longsor, <em>liquefaction</em> dll);</li>
            <li>Mengevaluasi dan merenovasi ulang struktur bangunan Anda agar terhindar dari bahaya gempa bumi.</li>
         </ul>
         <li style="font-weight: bold;">Kenali Lingkungan Tempat Anda Bekerja</li>
         <ul class="artlist">
            <li>Perhatikan letak pintu, <em>lift</em> serta tangga darurat, apabila terjadi gempa bumi, sudah mengetahui tempat paling aman untuk berlindung;</li>
            <li>Belajar melakukan P3K;</li>
            <li>Belajar menggunakan alat pemadam kebakaran;</li>
            <li>Catat nomor telepon penting yang dapat dihubungi pada saat terjadi gempa bumi.</li>
         </ul>
         <li style="font-weight: bold;">Persiapan Rutin pada tempat Anda bekerja dan tinggal</li>
         <ul class="artlist">
            <li>Perabotan (lemari, <em>cabinet</em>, dll) diatur menempel pada dinding (dipaku, diikat, dll) untuk menghindari jatuh, roboh, bergeser pada saat terjadi gempa bumi.</li>
            <li>Simpan bahan yang mudah terbakar pada tempat yang tidak mudah pecah agar terhindar dari kebakaran.</li>
            <li>Selalu mematikan air, gas dan listrik apabila tidak sedang digunakan.</li>
         </ul>
         <li style="font-weight: bold;">Persiapkan tas siaga gempa</li>
         <p>Kotak P3K, Senter/lampu baterai, Radio, Dokumen penting, Makanan suplemen dan air. Kebutuhan berikut dapat disiapkan dalam satu tas, agar saat gempa berlangsung kita dapat langsung membawa satu tas tanpa membuang waktu.</p>
         <li style="font-weight: bold;">Unduh aplikasi resmi BMKG</li>
         <p>Badan Meteorologi, klimatologi, dan geofisika (BMKG) menyediakan informasi resmi mengenai bencana yang selalu dimutakhirkan setiap waktu.</p>
      </ol>
      <li style="font-weight: bold;">Saat Terjadi Gempa bumi</li>
      <ol type="1" class="artol">
         <li style="font-weight: bold;">Jangan Panik</li>
         <p style="text-indent: 0;">Menjauh dari kaca, tiang, pohon, atau benda-benda yang mengancam keselamatan Anda.</p>
         <li style="font-weight: bold;">Menunduk</li>
         <p style="text-indent: 0;">Segera menunduk, jangan coba berjalan atau berlari.</p>
         <li style="font-weight: bold;">Berlindung</li>
         <p style="text-indent: 0;">Lindungi kepala Anda dengan tangan. Bila memungkinkan berlindunglah di bawah meja.</p>
         <li style="font-weight: bold;">Jangan Bergerak</li>
         <p style="text-indent: 0;">Jangan bergerak hingga gempa selesai.</p>
         <li style="font-weight: bold;">Evakuasi</li>
         <p style="text-indent: 0;">Jika gempa telah selesai, segera evakuasi diri ke jalur yang aman.</p>
         <li style="font-weight: bold;">Berkumpul</li>
         <p style="text-indent: 0;">Berkumpulah di tempat aman. Jangan kembali ke rumah karena ada kemungkinan datang gempa susulan.</p>
         <li style="font-weight: bold;">Minta Bantuan</li>
         <p style="text-indent: 0;">Hubungi pihak berwenang untuk meminta bantuan. Pantau informasi dari radio,televisi, atau internet.</p>
      </ol>
      <li style="font-weight: bold;">Setelah Terjadi Gempa bumi</li>
      <ol type="1" class="artol">
         <li style="font-weight: bold;">Jika Anda berada di dalam bangunan</li>
         <ul class="artlist">
            <li>Keluar dari bangunan tersebut dengan tertib;</li>
            <li>Jangan menggunakan tangga berjalan atau lift, gunakan tangga biasa;</li>
            <li>Periksa apa ada yang terluka, lakukan P3K;</li>
            <li>Telepon atau mintalah pertolongan apabila terjadi luka parah pada Anda atau sekitar Anda.</li>
         </ul>
         <li style="font-weight: bold;">Periksa lingkungan sekitar Anda</li>
         <p>Periksa apabila terjadi kebakaran, kebocoran gas, terjadi hubungan arus pendek listrik, aliran dan pipa air, serta hal-hal yang membahayakan (mematikan listrik, tidak menyalakan api, dll).</p>
         <li style="font-weight: bold;">Jangan memasuki bangunan yang sudah terkena gempa atau berjalan di daerah sekitar gempa</li>
         <li style="font-weight: bold;">Mendengarkan informasi</li>
         <p>Dengarkan informasi mengenai gempabumi dari radio (apabila terjadi gempa susulan) dan Jangan mudah terbawa oleh isu atau berita yang tidak jelas sumbernya.</p>
         <li style="font-weight: bold;">Mengisi angket yang diberikan oleh instansi terkait untuk mengetahui seberapa besar kerusakan yang terjadi</li>
         <li style="font-weight: bold;">Jangan panik dan jangan lupa selalu berdo'a kepada Tuhan demi keamanan dan keselamatan</li>
      </ol>
   </ol>
   <br>
   <p>Dengan mempelajari informasi gempa bumi seperti yang tertera di atas diharapkan kita dapat terus mawas diri dan selalu siap siaga saat gempa bumi menerpa. Semoga bermanfaat!</p>
   <em>Sumber:</em>
   <ol class="linkul" style="padding-left: 15px;">
      <li><a href="http://puslitbang.bmkg.go.id/litbang/wp-content/uploads/2018/01/buku-gempabumi.pdf" target="_blank">http://puslitbang.bmkg.go.id/litbang/wp-content/uploads/2018/01/buku-gempabumi.pdf</a></li>
      <li>Buku “Risiko Bencana Indonesia” , BNPB (Badan Nasional Penanggulangan Bencana)</li>
      <li>Poster Antisipasi gempa bumi BMKG</li>
      <li>Poster Antisipasi gempa PMI</li>
   </ol>
   <em>Credit : Alya Azzahra</em>
</div>
<?php
$htmlContent = ob_get_clean();
include 'konten artikel layout.php';
?>