<?php
class UserEntity{
    public $user=[];

    public function getAll(){
        return $this->user;
    }
    public function get($id){
        return array_filter(
            $this->user, 
            function($user) use ($id){
                return $user['id'] ==$id;
            }
        );
    }
    public function add($user){
        $lastId= UserEntity::$users(user)['id']??1;
        $user::$id=$lastId+1;
        UserEntity::$users[]=$user;
        return $user;
    }
}