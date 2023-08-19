<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="text-align:center;">

    <img src="<?php echo $profile->avatar?>"><br><br>
    
    <strong>Name: </strong><span><?php echo $profile->user?></span></strong><br><br>
    <strong>Email: </strong><span><?php echo $profile->email?></span></strong><br> <br>
    <strong>Bio: </strong><span><?php echo $profile->bio?></span></strong><br> <br>
    <strong>Skills: </strong><span style="text-align:start;">
    <?php
    $skillsArr=$profile->skills;

    foreach($skillsArr as $skill => $value)
      echo $skill ." ".$value ."<br>";
     ?>
     </span></strong><br><br>
</div>
</body>
</html>