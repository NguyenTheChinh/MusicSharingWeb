<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function run()
    {
     DB::table('user')-> insert([
        ['id'=>1,'username'=>'Dong', 'password'=>'12345678', 'full_name'=>'Vũ Đức Đông', 'birthday'=>'1997-11-07', 'email'=>'vudong71197@gmail.com', 'phone'=>'01235533984',
            'level'=>1],

        ['id'=>2,'username'=>'Tien', 'password'=>'123456', 'full_name'=>'Phạm Đức Tiến', 'birthday'=>'1997-10-05', 'email'=>'Tiendzbk@gmail.com', 'phone'=>'01236665880',
            'level'=>0] ,

        ['id'=>3,'username'=>'Vinh', 'password'=>'Vinh1997', 'full_name'=>'Trần Văn Vinh', 'birthday'=>'1997-10-05', 'email'=>'Vinhdzbk@gmail.com', 'phone'=>'0917339848',
            'level'=>0]  ]);
    } */
    public function run()
    {
        DB::table('user')-> insert([
            ['id'=>1,'username'=>'Dong', 'password'=>bcrypt('12345678'), 'full_name'=>'Vũ Đức Đông', 'birthday'=>'1997-11-07', 'email'=>'vudong71197@gmail.com', 'phone'=>'01235533984', 'level'=>1],

            ['id'=>2,'username'=>'Tien', 'password'=>bcrypt('123456'), 'full_name'=>'Phạm Đức Tiến', 'birthday'=>'1997-10-05', 'email'=>'Tiendzbk@gmail.com', 'phone'=>'01236665880', 'level'=>0] ,

            ['id'=>3,'username'=>'Vinh', 'password'=>bcrypt('Vinh1997'), 'full_name'=>'Trần Văn Vinh', 'birthday'=>'1997-10-05', 'email'=>'Vinhdzbk@gmail.com', 'phone'=>'0917339848', 'level'=>0],

            ['id'=>4,'username'=>'Chinh', 'password'=>bcrypt('123456'), 'full_name'=>'Nguyen The Chinh', 'birthday'=>'1997-05-20', 'email'=>'Chinhdzbk@gmail.com', 'phone'=>'0917339848', 'level'=>0]
        ]);
    }


}
