<?php
class PostsSeeder extends DatabaseSeeder{
    public function run(){
        DB::table('posts')->insert(array(
            array('id'=>1, 'title'=>'post #1_', 'category_id'=>4,'user_id'=>1, 'content'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa._'),
            array('id'=>2, 'title'=>'post #2_', 'category_id'=>4,'user_id'=>2, 'content'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa._'),
            array('id'=>3, 'title'=>'post #3_', 'category_id'=>5,'user_id'=>1, 'content'=>'Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim._'),
            array('id'=>4, 'title'=>'post #4_', 'category_id'=>5,'user_id'=>1, 'content'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa._'),
            array('id'=>5, 'title'=>'post #5_', 'category_id'=>5,'user_id'=>2, 'content'=>'Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim._'),
            array('id'=>6, 'title'=>'post #6_', 'category_id'=>2,'user_id'=>2, 'content'=>'Fusce est. Vivamus a tellus._'),
            array('id'=>7, 'title'=>'post #7_', 'category_id'=>4,'user_id'=>2, 'content'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa._'),
            array('id'=>8, 'title'=>'post #8_', 'category_id'=>2,'user_id'=>1, 'content'=>'Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim._'),
            array('id'=>9, 'title'=>'post #9_', 'category_id'=>2,'user_id'=>1, 'content'=>'Fusce est. Vivamus a tellus._'),
            array('id'=>10, 'title'=>'post #10_', 'category_id'=>4,'user_id'=>2, 'content'=>'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede._'),
            array('id'=>11, 'title'=>'post #11_', 'category_id'=>1,'user_id'=>1, 'content'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa._'),
            array('id'=>12, 'title'=>'post #12_', 'category_id'=>2,'user_id'=>2, 'content'=>'Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim._'),
            array('id'=>13, 'title'=>'post #13_', 'category_id'=>4,'user_id'=>2, 'content'=>'Fusce est. Vivamus a tellus._'),
            array('id'=>14, 'title'=>'post #14_', 'category_id'=>5,'user_id'=>1, 'content'=>'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede._'),
            array('id'=>15, 'title'=>'post #15_', 'category_id'=>5,'user_id'=>2, 'content'=>'Mauris et orci. Aenean nec lorem._'),
            array('id'=>16, 'title'=>'post #16_', 'category_id'=>5,'user_id'=>1, 'content'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa._'),
            array('id'=>17, 'title'=>'post #17_', 'category_id'=>3,'user_id'=>1, 'content'=>'Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim._'),
            array('id'=>18, 'title'=>'post #18_', 'category_id'=>1,'user_id'=>1, 'content'=>'Fusce est. Vivamus a tellus._'),
            array('id'=>19, 'title'=>'post #19_', 'category_id'=>5,'user_id'=>2, 'content'=>'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede._'),
            array('id'=>20, 'title'=>'post #20_', 'category_id'=>4,'user_id'=>2, 'content'=>'Mauris et orci. Aenean nec lorem._'),
            array('id'=>21, 'title'=>'post #21_', 'category_id'=>2,'user_id'=>2, 'content'=>'In porttitor. Donec laoreet nonummy augue._')
        ));
    }
}