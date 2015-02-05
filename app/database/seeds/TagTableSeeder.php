<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 24/01/15
 * Time: 18:34
 */

class TagTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tags')->delete();
        DB::statement('ALTER TABLE tags AUTO_INCREMENT=1'); // remettre l'auto
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('tags')->insert(
            [
                [
                    'name' => 'php',


                ],
                [
                    'name' => 'AngularJS',
                    

                ],
                [
                    'name' => 'AngularJS/Laravel',
                    

                ],
                [
                    'name' => 'Fabric',
                    

                ],
                [
                    'name' => 'PHPUnit',
                    

                ],
                [
                    'name' => 'Behat',
                    

                ],
                [
                    'name' => 'Travis',
                    

                ],
                [
                    'name' => 'Gulp',
                ]
            ]);
    }

}