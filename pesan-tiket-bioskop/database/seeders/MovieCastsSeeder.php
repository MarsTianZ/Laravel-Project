<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieCastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_casts')->insert([
            ['movie_casts_name' => 'BLACKPINK’s JISOO, JENNIE, ROSÉ, LISA'],
            ['movie_casts_name' => 'Ha Jung Woo, Yeo Jin Goo, Sung Dong Il, Chae Soo Bin, Moon Yoo Kang'],
            ['movie_casts_name' => 'Steve Carell, Kristen Wiig, Joey King, Will Ferrell, Sofia Vergara, Miranda Cosgrove, Dana Gaier, Madison Skyy Polan, Pierre Coffin, Steve Coogan, Stephen Colbert, Chloe Fineman'],
            ['movie_casts_name' => 'SEVENTEEN'],
            ['movie_casts_name' => 'Joseph Quinn, Djimon Hounsou, Alex Wolff, Lupita Nyong`o, Thea Butler, Jennifer Woodward, Zay Domo Artist, Malik Jubal, Elijah Ungvary'],
            ['movie_casts_name' => 'Kimberly Ryder, Wulan Guritno, Ibrahim Risyad, Rowiena Umboh, Piet Pagau, Niniek Arum, Dyan Deye, Dafina Jamasir, Hanisah Halim, Sugesta Handayani, Evelyn Aurora'],
            ['movie_casts_name' => 'Amy Poehler, Phyllis Smith, Lewis Black, Tony Hale, Liza Lapira, Maya Hawke, Ayo Edebiri, Adele Exarchopoulos, Paul Walter Hauser, Kensington Tallman, Diane Lane, Kyle MacLachlan'],
            ['movie_casts_name' => 'Ryan Reynolds, Hugh Jackman, Emma Corrin, Morena Baccarin, Rob Delaney, Karan Soni, Leslie Uggams, Matthew Macfadyen'],
            ['movie_casts_name' => 'Susan Sameh, Ajil Ditto, Ully Triani, Sahila Hisyam, Shareefa Daanish, Bukie B. Mansyur, Shofia Shireen, Slamet Rahardjo, Joseph Kara, Ikhsan Samiaji, Coki Anwar'],
            ['movie_casts_name' => 'Risa Saraswati, Ranggana Purwana, Indy Ratna Pratiwi, Riana Rizki, Abimanyu Bhakti, Nicko Irham, Dimas Tri Adityo, Fahrul Rohman, Prinsa Mandagie, Sandy Pradana, Vyatra Novrisyah'],
            ['movie_casts_name' => 'Bayu Skak, Nadya Arina, Keisya Levronka, Dono Pradana, Benidictus Siregar, Indra Pramujito, Firza Valaza, Devina Aureel, Cak Kartolo, Tini Kartolo, Tri Karnadinata, Beta Sofiansyah'],
            ['movie_casts_name' => 'Glen Powell, Daisy Edgar-Jones, Maura Tierney, Kiernan Shipka, Katy O`Brian, David Corenswet, Anthony Ramos, Sasha Lane, Paul Scheer, Daryl McCormack, Brandon Perea'],
        ]);
    }
}
