<?php
   $person=[
         'name'=>'mizan',
       'age'=>20,
        'email'=>'mizan123@gmail.com'
     ];
    $person['age']=16;
     function mySelfPrint(array $informaiton,callable $callback){
     echo $informaiton['name'].'('.$informaiton['age'].')'.'<br/>';
     if($informaiton['age']>=18){
         $callback($informaiton['email']);
     }else{
         echo 'You are too little';
     }
 }
     mySelfPrint($person,function ($email){
         echo "Emial sent:".$email.'<br/>';
     });
 mySelfPrint($person,function ($email){
     echo "Email sent to server:".$email;
 });
?>
