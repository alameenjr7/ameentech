<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('settings')->insert([
            'title' => 'AmeenTECH',
            'meta_description' => 'Création site Web, Applications, Logiciels',
            'meta_keywords' => 'Création site internet, développement d\'applications, logiciels - AmeenTECH',
            'logo' => '',
            'logo2' => '',
            'favicon' => '',
            'favicon2' => '',
            'email_1' => 'contact@ameenaltech.com',
            'email_2' => 'babangom673@gmail.com',
            'telephone1' => '(+221) 77205 06 26',
            'telephone2' => '(+221) 33868 08 36',
            'fax' => '0000',
            'adresse' => 'Ouest FOIRE',
            'lot' => ' Lot N°85',
            'appartement' => ' Dakar',
            'footer' => 'Si vous souhaitez y contribuer ou avoir de plus amples informations, n\'hésitez pas à nous contacter.',
            'text_abonnement' => 'Abonnez-vous à notre newsletter maintenant et recevez tous les jours nos pubs!',
            'image_footer' => '',
            'background_footer' => 'Notre principale mission consiste à améliorer le positionnement de votre site web sur les moteurs et annuaires.',
            'background_header' => '',
            'facebook_url' => 'https://www.facebook.com/AmeenTech-107983105160189',
            'twitter_url' => 'https://twitter.com/Ameen___Tech',
            'linkedin_url' => 'https://www.linkedin.com/company/ameentech',
            'instagram_url' => 'https://www.instagram.com/ameen___tech/',
            'youtube_url' => 'https://www.youtube.com/c/AlAmeenJRBayeNIASSUNIQUEMENT',
            'map_url' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.39976297436!2d-17.47428784997567!3d14.746493577388456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d5c47f3ea81%3A0x4a37c0a94ce6e6c4!2sOuest%20Foire%2C%20Dakar!5e0!3m2!1sfr!2ssn!4v1647731172122!5m2!1sfr!2ssn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
        ]);
    }
}
