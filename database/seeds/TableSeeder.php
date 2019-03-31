<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\Faq;
class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // for($i=1; $i<=3 ; $i++)
        // {
        //     $team = new Team;
        //     $team->name = $faker->name;
        //     $team->designation = $faker->jobTitle;
        //     $team->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
        //     $team->avatar = 1;
        //     $team->save();
        // }
        // for ($i=1; $i <= 10 ; $i++) { 
        //     $faq = new Faq;
        //     $faq->query = $faker->sentence($nbWords = 6, $variableNbWords = true);
        //     $faq->answer = $faker->paragraph($nbSentences = 3, $variableNbSentences = true) ;
        //     $faq->save();
        // }
    }
}
