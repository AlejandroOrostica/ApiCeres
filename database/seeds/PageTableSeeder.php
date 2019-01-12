<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Perfil Roberto 
        //Google Schoolar
        DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=zgG5YN0AAAAJ&hl=es&oi=ao#',
                'user_id' => 1
            ]
        );
        //Research
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Roberto_Gonzalez-Ibanez',
                'user_id' => 1
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=36835618300',
                'user_id' => 1
            ]
        );
        //Perfil Victor
        //Google schoolar
        DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=_z5EDa4AAAAJ&hl=es&oi=sra',
                'user_id' => 2
            ]
        );
        //Research
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Victor_Parada',
                'user_id' => 2
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=6602599875',
                'user_id' => 2
            ]
        );
//JL
        DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=Cib4lnQAAAAJ&hl=es&oi=ao',
                'user_id' => 10
            ]
        );
        //Research 
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Jose_Jara12',
                'user_id' => 10
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=36705856400',
                'user_id' => 10
            ]
        );
        

//Hector Antillanca

        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=6506547520',
                'user_id' => 3
            ]
        );

//LEONEL MEDINA
        DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=ATlebyEAAAAJ&hl=es&oi=sra',
                'user_id' => 4
            ]
        );
        //Research 
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Leonel_Medina',
                'user_id' => 4
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=9241524000',
                'user_id' => 4
            ]
        );
//Gonzalo ACUÑA        
        DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=1bKq5i8AAAAJ&hl=es&oi=ao',
                'user_id' => 5
            ]
        );
        //Research 
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Gonzalo_Acuna6',
                'user_id' => 5
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=7004008252',
                'user_id' => 5
            ]
        );

//CAROLINA BONACIC

        //Research 
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Carolina_Bonacic',
                'user_id' => 6
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus I',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=23392028000 ',
                'user_id' => 6
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'ScopusII',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=57192935212 ',
                'user_id' => 6
            ]
        );


//MAX CHACON        
                DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=n9GPFCUAAAAJ&hl=es&oi=ao',
                'user_id' => 7
            ]
        );
        //Research 
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Max_Chacon2',
                'user_id' => 7
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=36963571000',
                'user_id' => 7
            ]
        );
//FERNANDO CONTRERAS

//Mario INOSTROZA        
                DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=Cib4lnQAAAAJ&hl=es&oi=ao',
                'user_id' => 9
            ]
        );
        //Research 
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Mario_Inostroza-Ponta',
                'user_id' => 9
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=15520576800',
                'user_id' => 9
            ]
        );
       
//FERNANDA KRI

        //Research 
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Fernanda_Kri',
                'user_id' => 11
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=8525461700',
                'user_id' => 11
            ]
        );
//EDMUNDO LEIVA-LOBOS

        //Research 
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Edmundo_Leiva-Lobos',
                'user_id' => 12
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=6507530863',
                'user_id' => 12
            ]
        );
//MAURICIO MARIN
                DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=t0-RzjEAAAAJ&hl=es&oi=ao',
                'user_id' => 13
            ]
        );
        //Research 

        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=23091227400',
                'user_id' => 13
            ]
        );
//Rosa Muñoz        

        //Research 

        //Scopus

//Alcides Quispe        
                DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=s96onl8AAAAJ&hl=es&oi=ao',
                'user_id' => 15
            ]
        );
        //Research 

        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=37077922200',
                'user_id' => 15
            ]
        );
//Fernando Rannou        

        //Research 
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Fernando_Rannou',
                'user_id' => 16
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=7003416168',
                'user_id' => 16
            ]
        );
//PABLO ROMAN        
                DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=uwVKal0AAAAJ&hl=es&oi=ao',
                'user_id' => 17
            ]
        );
        //Research 

        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=26422546000',
                'user_id' => 17
            ]
        );
//MONICA VILLANUEVA        

        //Research 

        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=36807373900',
                'user_id' => 18
            ]
        );

//OTROS        
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 1
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 2
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 3
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 4
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 5
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 6
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 7
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 8
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 9
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 10
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 11
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 12
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 13
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 14
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 15
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 16
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 17
            ]
        );
        DB::table('pages')->insert(
            [
                'pageName' => 'Otros',
                'pageUrl' => '',
                'user_id' => 18
            ]
        );        
    }
}