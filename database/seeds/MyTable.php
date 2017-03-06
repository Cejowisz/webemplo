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

        DB::table('users')->insert([
            'first_name'    =>  'Justin1',
            'last_name'     =>  'Obi1',
            'email'         =>  'cjustinobi1@gmail.com',
            'phone'         =>  '08064152318',
            'bank_name'     =>  'Zenith Bank',
            'acct_name'     =>  'Myname Justin',
            'acct_number'   =>  '0040421632',
            'profile_pix'   =>  '',
            'sme'           =>  'Agric',
            'other_sme'     =>  'myother sme',
            'password'  => bcrypt('cejowisz'),

        ]);

        DB::table('users')->insert([
            'first_name'    =>  'Justin2',
            'last_name'     =>  'Obi2',
            'email'         =>  'cjustinobi2@gmail.com',
            'phone'         =>  '08064152317',
            'bank_name'     =>  'Zenith Bank',
            'acct_name'     =>  'Myname Justin',
            'acct_number'   =>  '0040421634',
            'profile_pix'   =>  '',
            'sme'           =>  'Agric',
            'other_sme'     =>  'myother sme',
            'password'  => bcrypt('cejowisz'),

        ]);
    }
}
