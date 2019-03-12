<?php

use Illuminate\Database\Seeder;
// use App\portfolio;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
        	'link' => 'https://esteelfas.com',
        	'app_type' => 'eCommerce',
        	'app_name' => 'esteelfas',
            'app_description' => 'eCommerce'
        ]);

        Portfolio::create([
        	'link' => 'http://devdip.com.ng',
        	'app_type' => 'Web',
        	'app_name' => 'DevelopmentevDip',
            'app_description' => 'Web Development'
        ]);

        Portfolio::create([
        	'link' => 'https://umpirecarport.com.ng',
        	'app_type' => 'App',
        	'app_name' => 'Aulsteel',
            'app_description' => 'Mobile App'
        ]);
    }
}
