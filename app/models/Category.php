<?php
class Category extends Eloquent{
    public $timestamps = false;
    protected $table = 'categories';
    public function getPosts(){
        return $this->hasMany('Post');
    }
}