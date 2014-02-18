<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyFeild
 *
 * @author harville
 */
class MyFeild {
    private  $feildName ;
    private  $feildType; 
    private  $feildId; 
    private  $feildDiv;
    private  $feild;
    private  $feildValue;
    private  $feildRequired;
    private  $feildDisplayName;
    private  $feildError;
    private  $feildErrorDiv;
    
    
     public function getfeildErrorDiv ()
    {
        return $this->feildErrorDiv;
    }
    
     public function setfeildErrorDiv ( $feildErrorDiv)
    {
         $this->feildErrorDiv = $feildErrorDiv;
    }
    
     public function getfeildError ()
    {
        return $this->feildError;
    }
    
     public function setfeildError ( $feildError)
    {
         $this->feildError = $feildError;
    }
    
       public function getfeildDisplayName ()
    {
        return $this->feildDisplayName;
    }
    
     public function setfeildDisplayName ( $feildDisplayName)
    {
         $this->feildDisplayName = $feildDisplayName;
    }
    
    public function getfeildName ()
    {
        return $this->feildName;
    }
    
     public function setfeildName ( $feildName)
    {
         $this->feildName = $feildName;
    }
    
       public function getfeildValue ()
    {
        return $this->feildValue;
    }
    
     public function setfeildValue ( $feildValue)
    {
         $this->feildValue = $feildValue;
    }
    
        public function getfeildRequired ()
    {
        return $this->feildRequired;
    }
    
     public function setfeildRequired ( $feildRequired)
    {
         $this->feildRequired = $feildRequired;
    }
    
       public function getfeildType ()
    {
        return $this->feildType;
    }
    
     public function setfeildType ( $feildType)
    {
         $this->feildType = $feildType;
    }
    
       public function getfeildId ()
    {
        return $this->feildId;
    }
    
     public function setfeildId ( $feildId)
    {
         $this->feildId = $feildId;
    }
    
       public function getfeildDiv ()
    {
        return $this->feildDiv;
    }
    
     public function setfeildDiv ( $feildDiv)
    {
         $this->feildDiv = $feildDiv;
    }
    
       public function setfeild ($feildDiv,$feildId,$feildName,$feildType,$feildRequired,$feildValue,$feildDisplayName)
    {
         
         $this->feild = new MyFeild();
         $this->feild->setfeildDiv($feildDiv);
         $this->feild->setfeildId($feildId);
         $this->feild->setfeildName($feildName);
         $this->feild->setfeildType($feildType);
         $this->feild->setfeildRequired($feildRequired);
         $this->feild->setfeildValue($feildValue);
         $this->feild->setfeildDisplayName($feildDisplayName);
         
         return $this->feild;
         
    }
    
    public function validateFeild ()
    {
        if($this->feildValue == '' and $this->feildRequired == 'y')
        {
            return false;
        }
 else { return true;}
    }
    
    
}

?>
