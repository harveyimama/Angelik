<?php
include('MyFeild.php');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyForm
 *
 * @author harville
 */
class MyForm {
    private  $formName ;
    private  $formClass; 
    private  $formFeilds; 
    private  $formButton;
    private  $formDiv;
    private  $formId;
    private  $form;
    private  $formError;
    private  $formErrorDiv;
    public  $validation_error_count;
    
     public function getFormErrorDiv ()
     {
         return $this->formErrorDiv; 
     }
    
     public function setFormErrorDiv ($formErrorDiv)
     {
         $this->formErrorDiv = $formErrorDiv;
     }
     
     
     public function getFormError ()
     {
         return $this->formError; 
     }
    
     public function setFormError ($formError)
     {
         $this->formError = $formError;
     }
     
     
    public function getformName ()
    {
       
        return $this->formName;
    }
    
     public function setformName ($formName)
    {
        $this->formName = $formName;
    }
    
    
       public function getformClass ()
    {
        return $this->formName;
    }
    
     public function setformClass ($formClass)
    {
         $this->formClass = $formClass;
    }
    
       public function getformFeilds ()
    {
        return $this->formFeilds;
    }
    
     public function setformFeilds ($formFeilds)
    {
         $this->formFeilds = $formFeilds;
    }
    
       public function getformButton ()
    {
        return $this->formButton;
    }
    
     public function setformButton ($formButton)
    {
         $this->formButton = $formButton;
    }
    
     public function getformId ()
    {
        return $this->formId;
    }
    
     public function setformId ($formId)
    {
         $this->formId = $formId;
    }
    
       public function getformDiv ()
    {
        return $this->formDiv;
    }
    
     public function setformDiv ($formDiv)
    {
         $this->formDiv = $formDiv;
    }
    
    
    public function setForm ($formName,$formClass,$formFeilds,$formButton,$formDiv, $formId)
    {
      
         $this->form = new MyForm();
         $this->form->setformButton($formButton);
         $this->form->setformClass($formClass);
         $this->form->setformDiv($formDiv);
         $this->form->setformFeilds($formFeilds);
         $this->form->setformName($formName);
         $this->form->setformId($formId);
        
         return $this->form ;
         
    }
    
    
    public function renderForm ($value)
    {
        
      echo '<form action="newPage.php" method="post" id="'.$this->formId.'" name="'.$this->formName.'" class="'.$this->formDiv.'" >';
      
     echo '<div class = '.$this->formErrorDiv.'>'.$this->formError.'</div>';
      
      foreach ($this->formFeilds as $feilds)
      {
         
          echo $feilds->getfeildDisplayName().': ';
          
          if($feilds->getfeildRequired()== 'y')
          {echo '*';}
                  
          echo  '<input value ="'.$feilds->getfeildValue().'" class ="'.$feilds->getfeildDiv().'" type ="'.$feilds->getfeildType().'"  name ="'.$feilds->getfeildName().'"  id ="'.$feilds->getfeildId().'"/><br/>'; 
          
           if($feilds->validateFeild() == false)
          {echo '<div class = '.$feilds->getfeildErrorDiv().'>'.$feilds->getfeildError().'</div>';}
          
      }
      
      echo '<input type="submit" name="'.$this->formButton.'" value="'.$value.'" />';
      echo '</form>';
    }
    
    
    
    public function validateFeilds($formFeilds)
    {
       
        $this->validation_error_count = 0;
        
        foreach ($formFeilds as $feildkey)
        {
            if ($feildkey->validateFeild() == false)
            {
            $feildkey->setFeildError($feildkey->getfeildDisplayName().' feild is required');
            $feildkey->setFeildErrorDiv('');
            $this->validation_error_count = $this->validation_error_count+1;
            }
           
        }
       return $formFeilds;
    }
    
    
    
    
}

?>
