<?php

class password
{
public $salt;
public $pswd;

function set_password($pswd)
{
$this->pswd=$pswd;

}
function password_generate($pswd)
  {
    $salt="$3#9&2$1";
    if(CRYPT_SHA512==1)
   {
     $salt=  crypt($salt,$salt);
                          
  }  
      if(CRYPT_BLOWFISH==1)
       {
        $pswd=  crypt($pswd, $salt);
      }
      if(CRYPT_BLOWFISH==1)
       {
        $pswd=  crypt($pswd, $salt);
       }
            
}

}

?>