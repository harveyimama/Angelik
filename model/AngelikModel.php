<?php
include_once('MyCore/Myconnection.php');
include_once('MyCore/Mysession.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author harville
 */
class AngelikModel {
    
    
    public function setUserByUsernameAndPassword ($u,$p)
    {
        if(trim($p)=='')
        {$p=null;}
        
        $link = new Myconnection;
        $link->connect();
        $ret = -1;
        $stmt = $link->connection->prepare("call getuserlogin_sp(?,?)");
        $stmt->bindParam(1, $u,PDO::PARAM_STR);
        $stmt->bindParam(2, $p,PDO::PARAM_STR);

        $stmt->execute();

        while ($myrow = $stmt->fetch())
        {
        $ret =  $myrow['id'];
        $_SESSION['fullname'] = $myrow['name'];
        $_SESSION['user_id'] = $myrow['id'];
        $_SESSION['role_id'] = $myrow['role'];
        }
                return $ret;
    }
    
    
    public function getAllCategories()
    {
        $link = new Myconnection;
        $link->connect();
      
        $stmt = $link->connection->prepare("call get_categories_sp()");
      

        $stmt->execute();

        while($myrow = $stmt->fetch())
        {
            $array[] = $myrow; 
        }
        
        return $array;
    }
    
    
}

?>
