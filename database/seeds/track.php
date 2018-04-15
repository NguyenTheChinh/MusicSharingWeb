<?php

use Illuminate\Database\Seeder;

class track extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('track')->insert(
            [
                ['id'=>1, 'name'=>'Starving', 'album'=>'Single', 'artist'=>'ZEDD', 'date'=>'2018-04-15', 'price'=>'10000',
                'genre_id'=>1, 'uploaded_by'=>1],
                ['id'=>2, 'name'=>'Pushing on', 'album'=>'Single', 'artist'=>'Tchami', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>2, 'uploaded_by'=>1],
                ['id'=>3, 'name'=>'Afterhours', 'album'=>'Single', 'artist'=>'Troyboi', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>4, 'uploaded_by'=>1],
                ['id'=>4, 'name'=>'Alone', 'album'=>'Single', 'artist'=>'Marshmello', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>4, 'uploaded_by'=>3],
                ['id'=>5, 'name'=>'Bangarang', 'album'=>'Single', 'artist'=>'Skrillex', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>3, 'uploaded_by'=>1],
                ['id'=>6, 'name'=>'Beautiful now', 'album'=>'Single', 'artist'=>'ZEDD', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>1, 'uploaded_by'=>2],
                ['id'=>7, 'name'=>'Deep in the night', 'album'=>'Remix', 'artist'=>'Muzzy', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>3, 'uploaded_by'=>1],
                ['id'=>8, 'name'=>'Emoji VIP', 'album'=>'Single', 'artist'=>'Pegboard Nerds', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>1, 'uploaded_by'=>3],
                ['id'=>9, 'name'=>'Faded', 'album'=>'Single', 'artist'=>'ZHU', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>2, 'uploaded_by'=>3],
                ['id'=>10, 'name'=>'In the morning', 'album'=>'Single', 'artist'=>'ZHU', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>1, 'uploaded_by'=>3],
                ['id'=>11, 'name'=>'Koala', 'album'=>'Single', 'artist'=>'Oliver Heldens', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>1, 'uploaded_by'=>1],
                ['id'=>12, 'name'=>'My window', 'album'=>'Single', 'artist'=>'Don Diablo', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>1, 'uploaded_by'=>3],
                ['id'=>13, 'name'=>'Nevada', 'album'=>'Single', 'artist'=>'Vicetone', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>1, 'uploaded_by'=>3],
                ['id'=>14, 'name'=>'O_G', 'album'=>'Single', 'artist'=>'Troyboi', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>4, 'uploaded_by'=>3],
                ['id'=>15, 'name'=>'On my mind', 'album'=>'Single', 'artist'=>'Don Diablo', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>1, 'uploaded_by'=>3],
                ['id'=>16, 'name'=>'Prison riot', 'album'=>'Single', 'artist'=>'Flosstradamus', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>4, 'uploaded_by'=>3],
                ['id'=>17, 'name'=>'Scary monsters and nice sprites', 'album'=>'Single', 'artist'=>'Skrillex', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>3, 'uploaded_by'=>1],
                ['id'=>18, 'name'=>'Shotgun', 'album'=>'Single', 'artist'=>'Yellow Claw', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>1, 'uploaded_by'=>3],
                ['id'=>19, 'name'=>'Till the sky falls down', 'album'=>'Single', 'artist'=>'Dash Berlin', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>6, 'uploaded_by'=>3],
                ['id'=>20, 'name'=>'Titanium', 'album'=>'Single', 'artist'=>'David Guetta', 'date'=>'2018-04-15', 'price'=>'10000',
                    'genre_id'=>1, 'uploaded_by'=>3]
            ]
        );//
    }
}
