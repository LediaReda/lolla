<?php

class User
{
   public $name;

   public $email;

   public $phon;

  public $password;


   public function changeName($name) 
   {
      $this->name = $name;
      //echo $this->name
   }
  
   
   public function setPassword($password)
   {
      if (strlen($password) > 6) {
        
         $this->password = md5($password);
            
      } else {
         $this->password = "hamada";
      }
   }


   public function getPassword()
   {
      return $this->password;
   }
}    
   
$user = new user();
   $user->name = "ledia";
   $user->email = "ledia@eraasorft.com";
   $user->phon = "0125879332";

   $user->changeName("hamada");
   $user->setPassword("1234567");
   echo $user->getPassword();
   // var_dump($user);



