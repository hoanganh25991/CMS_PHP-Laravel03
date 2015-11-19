<?php
class CategoriesSeeder extends DatabaseSeeder{
    public function run(){
        DB::table('categories')->insert(array(
            array('id'=>1,'name'=>'php'),
            array('id'=>2,'name'=>'javascript'),
            array('id'=>3,'name'=>'html'),
            array('id'=>4,'name'=>'css'),
            array('id'=>5,'name'=>'jquery')
        ));
    }
}