<?php

require_once UTILS. 'traits/Localizable.php';
class User{
    use Localizable;
    public static $id;
    public $user;
    public $email;
    public $avatar;
    public $skills;
    public $bio_en;
    public $bio_ar;
    private  $localizable=['bio'];
 public function __construct($user){
    foreach($user as $key => $value){
        $this->{$key} = $value;
    }
 }
}
// class User{
//     use Localizable;
//     public static $id;
//     public $user;
//     public $email;
//     public $city;
//     public $bio_en;
//     public $bio_ar ;
//     private  $localizable=['bio'];
//  public function __construct($user){
//     foreach($user as $key => $value){
//         $this->{$key} = $value;
//     }
//  }
// }