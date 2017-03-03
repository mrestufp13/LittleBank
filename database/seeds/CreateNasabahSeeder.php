<?php

use Illuminate\Database\Seeder;

class CreateNasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //delete users table records
         DB::table('nasabahs')->delete();
         //insert some dummy records
         DB::table('nasabahs')->insert(array(
             array('nama_lengkap'=>'john','alamat'=>'depok','no_rekening'=>'12341234'),
             array('nama_lengkap'=>'oki','alamat'=>'ciamis','no_rekening'=>'43214321'),
             array('nama_lengkap'=>'dadang','alamat'=>'bogor','no_rekening'=>'41324231'),
          ));
    }
}
