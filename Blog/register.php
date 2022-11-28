<?php
session_start();
 $random = $_SESSION['random'];

if($_POST['captcha'] == $random+1){
  $nick =  empty($_POST['nick']) ? '' : $_POST['nick'] ;
  $email =  empty($_POST['email']) ? '' : $_POST['email'] ;
  $password =  empty($_POST['password']) ? '' : $_POST['password'] ;

  echo $nick, '  ';
  echo $email, '  ';
  echo $password, '  ';
  

  $reg = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';

  if(preg_match($reg, $email))
    echo 'Poprawny adres email';
  else
    echo 'Niepoprawny adres email';
}
else{
  echo 'Nie prawidłowa captcha';
  
}  
?>