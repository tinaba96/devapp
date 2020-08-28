<?php

use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('entries')->insert([
          'title'=>'entry01',
          'content'=>'hello',
          'created_at'=>date('Y-m-d H:i:s'),
          'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('entries')->insert([
          'title'=>'entry02',
          'content'=>'good morning',
          'created_at'=>date('Y-m-d H:i:s'),
          'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('entries')->insert([
          'title'=>'entry03',
          'content'=>'good evening',
          'created_at'=>date('Y-m-d H:i:s'),
          'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
