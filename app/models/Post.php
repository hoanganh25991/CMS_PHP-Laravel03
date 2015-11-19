<?php
class Post extends Eloquent{
    protected $fillable = array('title', 'content', 'category_id', 'user_id');
    protected $guarded = array('user_id');

    public function getCategory(){
        return $this->belongsTo('Category', 'category_id');
    }
    public function getOwner(){
        return $this->belongsTo('User', 'user_id');
    }
}