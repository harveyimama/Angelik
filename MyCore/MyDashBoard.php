<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyDashBoard
 *
 * @author harville
 */
class MyDashBoard {
  
  
    
    private  $dashboardDiv;
    private  $dashboard;
    private  $dashboardMessage;
    private  $dashboardrole;




     public function getDashBoardRole ()
     {
         return $this->dashboardrole; 
     }
    
     public function setDashBoardRole ($dashboardrole)
     {
         $this->dashboardrole = $dashboardrole;
     }



    public function getDashBoardMessage ()
     {
         return $this->dashboardMessage; 
     }
    
     public function setDashBoardMessage ($dashboardMessage)
     {
         $this->dashboardMessage = $dashboardMessage;
     }
     
        
    
       public function getdashboardDiv ()
    {
        return $this->dashboardDiv;
    }
    
     public function setdashboardDiv ($dashboardDiv)
    {
         $this->dashboardDiv = $dashboardDiv;
    }
    
    
    public function setDashBoard ($dashboardrole,$dashboardDiv, $dashboardMessage)
    {
      
         $this->dashboard = new MyDashBoard();
         $this->dashboard->setdashboardDiv($dashboardDiv);
         $this->dashboard->setdashboardrole($dashboardrole);
         $this->dashboard->setDashBoardMessage($dashboardMessage);
        
         return $this->dashboard ;
         
    }
    
    
    public function renderDashBoard ()
    {
        
      
      
     echo '<div class = '.$this->dashboardDiv.'>'.$this->dashboardMessage;
     
      
      foreach ($this->dashboardrole->getrolelinks() as $links)
      {
           
           
           echo  '<a href ="'.$links->getlinkValue().'" class ="'.$links->getlinkDiv().'"  id ="'.$links->getlinkId().'"/>'.$links->getlinkDisplayName().'</a><br/>'; 
          
          
          
      }
      
      echo '<a href="newPage.php?logout">Log out</a> ';
      echo '</div>';
    }
    
}

?>
