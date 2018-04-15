<?php

use Illuminate\Database\Seeder;

class genre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre') -> insert([
            ['id'=>1, 'name'=>'Dance & EDM'],
            ['id'=>2, 'name'=>'House'],
            ['id'=>3, 'name'=>'Dubstep'],
            ['id'=>4, 'name'=>'Trap'],
            ['id'=>5, 'name'=>'Drum & Bass'],
            ['id'=>6, 'name'=>'Trance']
       ]);
        // $this->call(UsersTableSeeder::class);
    }
}
