<?php
include('MyLink.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Role
 *
 * @author harville
 */
class MyRole {
    private  $rolelinks; 
    private  $rolename;
    private  $roleid;
    private  $role;
    
     public function getrolelinks ()
    {
        return $this->rolelinks;
    }
    
     public function setrolelinks ($roleid)
    {
         $linkinstance = new MyLink;
         if(isset($roleid))  //could be changed for numerous roles
         {
         $link1 = $linkinstance->setlink('', 'transactions', 'y', 'newPage.php?transactions', 'VIEW TRANSACTIONS');
         $link2 = $linkinstance->setlink('', 'products', 'y', 'newPage.php?products', 'VIEW PRODUCTS');
         $link3 = $linkinstance->setlink('', 'categories', 'y', 'newPage.php?categories', 'VIEW CATEGORIES');
         }
         $this->rolelinks = array($link1,$link2,$link3);
    }
    
       public function getroleName ()
    {
        return $this->rolename;
    }
    
        public function setroleName ($rolename)
    {
         $this->rolename = $rolename;
    }
    
           public function getroleId ()
    {
        return $this->roleid;
    }
    
        public function setroleId ($roleid)
    {
         $this->roleid = $roleid;
    }
    
        public function setRole($roleid)
        {
            $this->role = new MyRole();
            $this->role->setroleId($roleid);
            $this->role->setroleName('Administrator');
            $this->role->setrolelinks($roleid);
            return $this->role;
        }
}

?>
