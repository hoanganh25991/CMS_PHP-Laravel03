<?php

class DatabaseSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        Eloquent::unguard();
        $this->call('UsersSeeder');
        $this->call('CategoriesSeeder');
        $this->call('PostsSeeder');//Posts Foreign Key based on Users, Categories
    }

}
