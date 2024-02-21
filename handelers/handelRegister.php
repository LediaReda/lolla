<?php
session_start();

include '../core/request.php';
include '../core/validations.php';
include '../core/sessions.php';



if(postMethod()){
    
   foreach($_POST as $key => $val)
   {
       $$key = reciveInput($value) ;
  
   }
     
    if(eciveInput($name)){
        $errors[] = "name required";
    }elseif(minInput($name,3)){
        $errors[] ="name must be greeter then 3 chars";
    }elseif(maxInput($name,20)){
        $errors[] ="name must be greeter then 20 chars";
    }

    if(requiredInput($email)){
       $errors[] = "email required";
    }elseif(emailInput($email)){
        $errors[] = "please type a valid email";
    }


    if(eciveInput($password)){
        $errors[] = "password required";
    }elseif(minInput($password,6)){
        $errors[] ="password must be greeter then 6 chars";
    }elseif(maxInput($password,25)){
        $errors[] ="password must be greeter then 25 chars";
    }
     
    if(requiredInput($confirm_password)){
        $errors[] = "confirm password required";
    }elseif(same($password,$confinm_password)){
        $errors[] = "confirm password mustde equal to password";
    }

    if(empty($errors)){
        $user = [
            'name' => $name;
            'email' => $email;
        ];
        header("location:/profile.php");
    
    }elseif{
      sessionStore("errors",$errors);
         header("location:/register.php");
    }

    

}else{
    echo "method not allowed";
}
