<?php
include_once('model/AngelikModel.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author harville
 */
class User {
    
    private  $username ;
    private  $password; 
    private  $User;
    private  $userRoleId;
    private  $userId;

    
    
    public function getusername ()
    {
        return $this->username;
    }
    
     public function setusername (  $username)
    {
         $this->username = $username;
    }
    
    
       public function getpassword ()
    {
        return $this->password;
    }
    
     public function setpassword ( $password)
    {
         $this->password = $password;
    }
    
          public function getUserRoleID ()
    {
        return $this->userRoleId;
    }
    
     public function setUserRoleID ( $userRoleId)
    {
         $this->userRoleId = $userRoleId;
    }
    
    public function allocateUserSession ()
    {
        $User = new AngelikModel();
        $this->userId =   $User->setUserByUsernameAndPassword($this->username,$this->password);
        if( $this->userId !== -1)
        {$this->userRoleId = $_SESSION['role_id'];}
        return $this->userId;
    }
}

?>
