<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/171948170811447_287x421.jpg',
                'movie_title' => 'Blackpink World Tour Born Pink In Cinemas',
                'movie_slug' => Str::slug('Blackpink World Tour Born Pink In Cinemas'),
                'movie_type' => 'Music',
                'movie_producers_id' => 1,
                'movie_directors_id' => 1,
                'movie_writers_id' => 1,
                'movie_productions_studio_id' => 1,
                'movie_casts_id' => 1,
                'movie_trailer' => 'https://youtu.be/RjRkne7tkrY?si=HeXdkywiOaUAvDcV',
                'duration' => '92 Menit',
                'movie_synopsis' => 'Tur BORN PINK BLACKPINK yang memikat dunia hadir di layar lebar, merayakan ulang tahun yang ke-8 sejak debut mereka!

Menarik penonton sebanyak 1,8 juta dan memecahkan rekor global untuk tur konser grup perempuan, rasakan energi live performance di bioskop di seluruh dunia!

Menampilkan set ikonik "Hanok" yang telah memukau penggemar dan pers di seluruh dunia, film ini menunjukkan skala produksi yang belum pernah terjadi sebelumnya, menyajikan versi aransemen eksklusif dari lagu-lagu hit BLACKPINK yang unik untuk konser ini dan menghadirkan penampilan dari Gocheok Dome Seoul serta cuplikan dari kota-kota lain di seluruh tur.

Bergabunglah bersama kami untuk semua momen menggembirakan, yang ditayangkan perdana di lebih dari 110 negara, menandai pertama kalinya bagi grup K-POP Perempuan
                ',
                'movie_ratings' => 'R13+',
                "movie_price" => 180000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/172041625938854_287x421.jpg',
                'movie_title' => 'Hijack 1971',
                'movie_slug' => Str::slug('Hijack 1971'),
                'movie_type' => 'Hijack 1971',
                'movie_producers_id' => 2,
                'movie_directors_id' => 2,
                'movie_writers_id' => 2,
                'movie_productions_studio_id' => 2,
                'movie_casts_id' => 2,
                'movie_trailer' => 'https://youtu.be/UxyutkXQnvA?si=W4VRZNRWJMhVxO6Y',
                'duration' => '100 Menit',
                'movie_synopsis' => 'Diangkat dari kisah nyata pembajakan pesawat di Korea Selatan. Seorang penumpang yang bernama Yong Dae (Yeo Jin Goo) membajak pesawat penumpang dan meminta agar pesawat untuk terbang ke Korea Utara.

Insiden ini semakin mencekam saat pelaku mengancam akan meledakan bom - hingga aksi Tae In (Ha Joong Wa) mantan pilot pesawat tempur turut mengambil alih pesawat. Akankan semua penumpang pesawat akan selamat?',
                'movie_ratings' => 'D17+',
                "movie_price" => 45000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/171767109789231_287x421.jpg',
                'movie_title' => 'Despicable Me 4 2024',
                'movie_slug' => Str::slug('Despicable Me 4 2024'),
                'movie_type' => 'Animation, Comedy',
                'movie_producers_id' => 3,
                'movie_directors_id' => 3,
                'movie_writers_id' => 3,
                'movie_productions_studio_id' => 3,
                'movie_casts_id' => 3,
                'movie_trailer' => 'https://youtu.be/9YXWQS6lwuE?si=qDL_OJAS8tOT_QIu',
                'duration' => '94 Menit',
                'movie_synopsis' => 'Gru, Lucy, Margo, Edith, dan Agnes siap menyambut anggota baru di keluarga. Di tengah kebahagiaan, Gru harus menghadapi penjahat bernama Maxime Le Mal yang berniat membalas dendam kepada Gru. Apakah Gru bisa menyelamatkan keluarga kecilnya?',
                'movie_ratings' => 'SU',
                "movie_price" => 45000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/172138934943464_287x421.jpg',
                'movie_title' => 'Seventeen Tour "Follow" Again to Cinemas',
                'movie_slug' => Str::slug('Seventeen Tour "Follow" Again to Cinemas'),
                'movie_type' => 'Music',
                'movie_producers_id' => 4,
                'movie_directors_id' => 4,
                'movie_writers_id' => 4,
                'movie_productions_studio_id' => 4,
                'movie_casts_id' => 4,
                'movie_trailer' => 'https://youtu.be/66aypGLiRc0',
                'duration' => '103 Menit',
                'movie_synopsis' => '"Rasanya kami telah bekerja keras untuk hari ini."

Menulis ulang sejarah di setiap langkah mereka, konser pertama SEVENTEEN di Seoul World Cup Stadium dan tur encore [SEVENTEEN TOUR "FOLLOW" AGAIN TO SEOUL] akan hadir ke layar lebar di seluruh dunia pada bulan Agustus ini!

Dari penampilan ketiga belas anggota yang ditunggu-tunggu hingga pertunjukan perdana "MAESTRO" serta penampilan para unit "Spell", "LALALI", "Cheers to youth", mengabadikan momen tak terlupakan dengan kamera sinematik dari berbagai sudut, memastikan pengalaman yang lebih megah.

Film konser ini dimulai dengan pertunjukan yang penuh semangat dan bertransisi menjadi sebuah acara yang penuh dengan beragam jenis musik. Berpuncak di bawah langit malam yang diterangi oleh lightstick CARAT, yang menjadi tanda keberhasilan sembilan tahun perjalanan SEVENTEEN yang selalu memecahkan rekor.',
                'movie_ratings' => 'R13+',
                "movie_price" => 100000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/171758557679390_287x421.jpg',
                'movie_title' => 'A Quiet Place: Day One',
                'movie_slug' => Str::slug('A Quiet Place Day One'),
                'movie_type' => 'Thriller, Sci-Fi',
                'movie_producers_id' => 5,
                'movie_directors_id' => 5,
                'movie_writers_id' => 5,
                'movie_productions_studio_id' => 5,
                'movie_casts_id' => 5,
                'movie_trailer' => 'https://youtu.be/E-WIb4ATfT8?si=0iz6FB9ikStrH7U2',
                'duration' => '99 Menit',
                'movie_synopsis' => 'Kisah awal mula kehancuran. Hari pertama kenapa dunia menjadi sunyi!

Sam (Lupita Nyong`o) berusaha selamat dari invasi makhluk asing dengan pendengaran ultrasonik yang menyerang New York.',
                'movie_ratings' => 'R13+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/171833955743357_287x421.jpg',
                'movie_title' => 'Bangsal Isolasi',
                'movie_slug' => Str::slug('Bangsal Isolasi'),
                'movie_type' => 'Action, Thriller',
                'movie_producers_id' => 6,
                'movie_directors_id' => 6,
                'movie_writers_id' => 6,
                'movie_productions_studio_id' => 6,
                'movie_casts_id' => 6,
                'movie_trailer' => 'https://youtu.be/ebOr2ZFtNEc?si=SAcogzv45khcrv19',
                'duration' => '76 Menit',
                'movie_synopsis' => 'Butuh nyali besar bagi WENI (Kimberly Ryder) seorang jurnalis yang dengan sengaja merekayasa bahwa dirinya seorang Narapidana - demi bisa mengungkap misteri kematian adiknya, RATNA (Hanisah Halim) di sebuah bangsal sangat mengerikan yang di juluki para napi ruang kutukan karena setiap yang masuk kedalamnya akan berakhir dengan kematian.Upaya Weni dibantu oleh ADIT (Ibrahim Risyad) yang berperan sebagai sipir penjara. Pembantaian dan pembullyan para NAPI wanita yang dilakukan secara keji menjadi pemandangan sehari-hari. BELA (Wulan Guritno) seorang NAPI Mafia Human Trafficking yang begitu ditakuti oleh para napi. Setiap yang berurusan dengan Bella akan berakhir dijebloskan ke dalam bangsal isolasi oleh kepala lapas HERMAN (Piet Pagau) yang keji karena dianggap melakukan pelanggaran berat.Diantara kekejian didalam lapas, hanya RUSDIAH lah (Rowiena Umboh) seorang psikolog di lapas yang lembut, baik hati dan memotivasi para NAPI.Bersama suasana mencekam, suara-suara mengerikan yang seolah teriakan para NAPI yang sudah mati, benang merah misteri kematian mereka di bangsal isolasi kian terang. Misteri Bangsal Isolasi membungkam apa yang nyata, siapa yang baik dan siapa yang palsu dalam kebenaran.',
                'movie_ratings' => 'R13+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/171706414775783_287x421.jpg',
                'movie_title' => 'Inside Out 2',
                'movie_slug' => Str::slug('Inside Out 2'),
                'movie_type' => 'Animation',
                'movie_producers_id' => 7,
                'movie_directors_id' => 7,
                'movie_writers_id' => 7,
                'movie_productions_studio_id' => 7,
                'movie_casts_id' => 7,
                'movie_trailer' => 'https://youtu.be/L4DrolmDxmw?si=CxcW260bpRQLuz0H',
                'duration' => '96 Menit',
                'movie_synopsis' => 'Petualangan kali ini akan membawa ke dunia emosi yang rumit. Riley telah tumbuh menjadi remaja berusia 13 tahun, seiring dengan itu tumbuh pula emosi baru yang harus dia hadapi.

Bersama dengan emosi Joy, Sadness, Anger, Fear, dan Disgust, Riley sekarang juga menghadapi Anxiety, sebuah emosi baru dengan warna oranye. Kehadiran Anxiety di markas besar Riley menambah drama dalam ruang kontrol emosi.',
                'movie_ratings' => 'SU',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/171922650929687_287x421.jpg',
                'movie_title' => 'Deadpool & Wolverine)',
                'movie_slug' => Str::slug('Deadpool & Wolverine'),
                'movie_type' => 'Action, Sci-Fi',
                'movie_producers_id' => 8,
                'movie_directors_id' => 8,
                'movie_writers_id' => 8,
                'movie_productions_studio_id' => 8,
                'movie_casts_id' => 8,
                'movie_trailer' => 'https://youtu.be/Idh8n5XuYIA?si=ZBXMDR7R5J0zIqi_',
                'duration' => '128 Menit',
                'movie_synopsis' => 'Sosok Deadpool atau Wade Wilson (Ryan Reynolds) yang dikenal tidak bertanggung jawab dipercaya untuk mengubah sejarah Marvel Cinematic Universe (MCU) bersama Wolverine (Hugh Jackman). Mereka bekerja sama untuk mengalahkan musuh bersama.',
                'movie_ratings' => 'D17+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/171767099728035_287x421.jpg',
                'movie_title' => 'Pusaka',
                'movie_slug' => Str::slug('Pusaka'),
                'movie_type' => 'Horror',
                'movie_producers_id' => 9,
                'movie_directors_id' => 9,
                'movie_writers_id' => 9,
                'movie_productions_studio_id' => 9,
                'movie_casts_id' => 9,
                'movie_trailer' => 'https://youtu.be/LPqGRJyHqAk?si=JD3Frcos56PAadi2',
                'duration' => '90 Menit',
                'movie_synopsis' => 'Sebuah vila besar milik seorang kolektor (Slamet Rahardjo) yang hendak dipugar menjadi museum memperangkap para pekerja projek yang tengah melakukan survei. Sebuah kutukan terlepas, membunuh satu persatu para manusia di dalamnya.',
                'movie_ratings' => 'D17+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/17181676465202_287x421.jpg',
                'movie_title' => 'Jurnal Risa by Risa Saraswati',
                'movie_slug' => Str::slug('Jurnal Risa by Risa Saraswati
'),
                'movie_type' => 'Horor',
                'movie_producers_id' => 10,
                'movie_directors_id' => 10,
                'movie_writers_id' => 10,
                'movie_productions_studio_id' => 10,
                'movie_casts_id' => 10,
                'movie_trailer' => 'https://youtu.be/-HuNHKFaW60?si=zdMcrgmsivreCFWW',
                'duration' => '92 Menit',
                'movie_synopsis' => 'Kamera dokumenter merekam sebuah perjalanan mengerikan tim Jurnal Risa dalam upaya menyelamatkan bintang tamu mereka, Prinsa, yang diikuti oleh hantu yang paling mereka takuti, Samex hantu yang selalu mendatangi siapapun yang menyebut namanya.',
                'movie_ratings' => 'R13+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/171767092079763_287x421.jpg',
                'movie_title' => 'Sekawan Limo',
                'movie_slug' => Str::slug('Sekawan Limo'),
                'movie_type' => 'Komedi, Horror',
                'movie_producers_id' => 11,
                'movie_directors_id' => 11,
                'movie_writers_id' => 11,
                'movie_productions_studio_id' => 11,
                'movie_casts_id' => 11,
                'movie_trailer' => 'https://youtu.be/UiD3K3wkeGo?si=dfscOmVtTVYvc8iR',
                'duration' => '112 Menit',
                'movie_synopsis' => 'Bagas (Bayu Skak), Lenni (Nadya Arina), Dicky (Firza Valaza), Juna (Benidictus Siregar), dan Andrew (Indra Pramujito) dipersatukan ketika mendaki Gunung Madyopuro. Mereka gagal mematuhi mitos Rombongan harus genap dan dilarang menoleh ke belakang atau akan ada yang mengikuti!. Sepanjang perjalanan mereka terus dihantui hingga akhirnya sadar kalau dari berlima salah satu bukan manusia. Siapa yang hantu di antara mereka?',
                'movie_ratings' => 'R13+',
                "movie_price" => 50000
            ],
            [
                'movie_poster' => 'https://media.21cineplex.com/webcontent/gallery/pictures/171922168412740_287x421.jpg',
                'movie_title' => 'Twisters',
                'movie_slug' => Str::slug('Twisters'),
                'movie_type' => 'Disaster, Adventure',
                'movie_producers_id' => 12,
                'movie_directors_id' => 12,
                'movie_writers_id' => 12,
                'movie_productions_studio_id' => 12,
                'movie_casts_id' => 12,
                'movie_trailer' => 'https://youtu.be/Jm27YjLnPHc?si=xANXq0NYmUIzzxjT',
                'duration' => '122 Menit',
                'movie_synopsis' => 'Tyler Owens (Glen Powell) dan Kate Cooper (Daisy Edgar-Jones) adalah peneliti badai dan pemburu badai yang mempertaruhkan nyawa mereka dalam upaya menguji sistem peringatan untuk bisa menanggulangi badai yang sering kali terjadi di Oklahoma.',
                'movie_ratings' => 'D13+',
                "movie_price" => 50000
            ],
            // Add more movies as needed
        ]);
    }
}
