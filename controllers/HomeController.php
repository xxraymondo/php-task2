<?php
require_once MODELS . 'User.php';
require_once ENTITIES . 'UserEntity.php';
class HomeController{
    public function index()
    {
        $me =new User([
            'user'=>'khaled yehia',
            'email'=>'kyhia32@yahoo.com',
            'avatar'=>''            
        ]);
      header("Content-Type: application/json");
      echo json_encode($me);
    }
    public function profile(){
        $me =new User([
            'user'=>'khaled yehia',
            'email'=>'kyhia32@yahoo.com',
            'avatar'=>'https://cdn-icons-png.flaticon.com/512/149/149071.png',
            'skills'=>['skillname1'=>'experience1',
                        'skillname2'=>'experience2',
                        'skillname3'=>'experience3'],
            'bio_en'=>'web dev',    
            'bio_ar'=>'انا مطور ويب'   
        ]);
        extract(["profile"=>$me]);
        require_once VIEWS .'profile.php';
        
    }
    public function add($request){
        $user =new User([
            'user'=>$request['user'],
            'email'=>$request['email'],
            'avatar'=>$request['avatar']            
        ]); 
        $newUser=UserEntity::add( $user );
        header("Content-Type: application/json");
        print json_encode($newUser);
    }
    public function myFriends(){
        $fileName= STORAGE . 'my_friends.json';
        $file =fopen($fileName,"r"); 
        $content= fread($file, filesize($fileName));  
        $json=json_decode($content,true);
        fclose($file);
        header("Content-Type: application/json");
        echo json_encode($json);
    }
}