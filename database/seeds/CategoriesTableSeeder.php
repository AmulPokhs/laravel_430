<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $cat_data = array(
           array(
               'title' =>'News',
               'summary' =>'This is news category'
           ),
           array(
               'title' =>'Politics',
               'summary' =>'This is news category'
       ),
           array(
               'title' =>'Sports',
               'summary' =>'This is news category'
           ),
           array(
               'title' =>'Economy',
               'summary' =>'This is news category'
           ),
       );
       DB::table('categories')->insert($cat_data);
    }
}
