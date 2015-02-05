<?php


class AperoTableSeeder extends Seeder {

    public function run() {
        DB::table('aperos')->delete();
        DB::statement("ALTER TABLE aperos AUTO_INCREMENT=1");
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('aperos')->insert(
            [
                [
                    'title' => 'PSR-4 Autoload',
                    'user_id' => 1,
                    'tag_id' => 1,
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. ',
                    'status' => 'unpublish'
                ],
                [
                    'title' => 'Eloquent',
                    'user_id' => 1,
                    'tag_id' => 1,
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. ',
                    'status' => 'publish'
                ],
                [
                    'title' => 'apero3',
                    'user_id' => 1,
                    'tag_id' => 1,
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. ',
                    'status' => 'unpublish'
                ],
                [
                    'title' => 'apero4',
                    'user_id' => 1,
                    'tag_id' => 1,
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. ',
                    'status' => 'unpublish'
                ],
                [
                    'title' => 'apero5',
                    'user_id' => 1,
                    'tag_id' => 1,
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. ',
                    'status' => 'unpublish'
                ],
                [
                    'title' => 'apero6',
                    'user_id' => 1,
                    'tag_id' => 1,
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. ',
                    'status' => 'unpublish'
                ],
                [
                    'title' => 'apero1',
                    'user_id' => 1,
                    'tag_id' => 1,
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. ',
                    'status' => 'unpublish'
                ]
            ]
        );
    }

}

