<?php
class UsersSeeder extends DatabaseSeeder{
    public function run(){
        DB::table('users')->insert(array(
            array('id'=>1, 'username'=>'hoanganh25991','password'=>Hash::make('2Haianhem')),
            array('id'=>2, 'username'=>'mano','password'=>Hash::make('baxayeudau'))
        ));
    }
}