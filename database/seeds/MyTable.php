<?php

use Illuminate\Database\Seeder;

class MyTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'        =>  'Justin',
            'last_name'     =>  'Obi',
            'email'         =>  'cjustinobi@gmail.com',
            'phone'         =>  '08064152319',
            'bank_name'     =>  'Zenith Bank',
            'acct_name'     =>  'Myname Justin',
            'acct_number'   =>  '0040421631',
            'profile_pix'   =>  '',
            'sme'           =>  'Agric',
            'other_sme'     =>  'myother sme',
            'password'  => bcrypt('cejowisz'),

        ]);
    }
}
