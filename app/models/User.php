<?php
use \Illuminate\Auth\UserInterface as UserInterface;
class User extends Eloquent implements UserInterface{
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
    public function getAuthIdentifier(){
        return $this->getKey();
    }
    public function getAuthPassword(){
        return $this->password;
    }
    public function getPosts(){
        return $this->hasMany('Post');
    }
}