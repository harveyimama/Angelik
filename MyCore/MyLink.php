<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyLinks
 *
 * @author harville
 */
class MyLink {
   
    private  $linkId; 
    private  $linkDiv;
    private  $link;
    private  $linkValue;
    private  $linkAuthorized;
    private  $linkDisplayName;
    
    
     
     public function getlinkDisplayName ()
    {
        return $this->linkDisplayName;
    }
    
     public function setlinkDisplayName ( $linkDisplayName)
    {
         $this->linkDisplayName = $linkDisplayName;
    }
    
        
     public function getlinkValue ()
    {
        return $this->linkValue;
    }
    
     public function setlinkValue ( $linkValue)
    {
         $this->linkValue = $linkValue;
    }
    
        public function getlinkAuthorized ()
    {
        return $this->linkAuthorized;
    }
    
     public function setlinkAuthorized ( $linkAuthorized)
    {
         $this->linkAuthorized = $linkAuthorized;
    }
    
     public function getlinkId ()
    {
        return $this->linkId;
    }
    
     public function setlinkId ( $linkId)
    {
         $this->linkId = $linkId;
    }
    
       public function getlinkDiv ()
    {
        return $this->linkDiv;
    }
    
     public function setlinkDiv ( $linkDiv)
    {
         $this->linkDiv = $linkDiv;
    }
    
       public function setlink ($linkDiv,$linkId,$linkAuthorized,$linkValue,$linkDisplayName)
    {
         
         $this->link = new MyLink();
         $this->link->setlinkDiv($linkDiv);
         $this->link->setlinkId($linkId);
         $this->link->setlinkAuthorized($linkAuthorized);
         $this->link->setlinkValue($linkValue);
         $this->link->setlinkDisplayName($linkDisplayName);
         
         return $this->link;
         
    }
    
    public function validateLink ()
    {
        //this needs to be modified to fit links
        if($this->linkValue == '' and $this->linkAuthorized == 'y')
        {
            return false;
        }
 else { return true;}
    }
    
}

?>
