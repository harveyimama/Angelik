<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyReport
 *
 * @author harville
 */
class MyReport {
    private  $reportName ;
    private  $reportColumns; 
    private  $reportDiv;
    private  $reportId;
    private  $report;
    private  $reportRowCount;
   
    
     public function getreportRowCount ()
    {
       
        return $this->reportRowCount;
    }
     
     
    public function getreportName ()
    {
       
        return $this->reportName;
    }
    
     public function setreportName ($reportName)
    {
        $this->reportName = $reportName;
    }
    
    
    
       public function getreportColumns ()
    {
        return $this->reportColumns;
    }
    
     public function setreportColumns ($reportColumns)
    {
         $this->reportColumns = $reportColumns;
    }
    
     public function getreportId ()
    {
        return $this->reportId;
    }
    
     public function setreportId ($reportId)
    {
         $this->reportId = $reportId;
    }
    
       public function getreportDiv ()
    {
        return $this->reportDiv;
    }
    
     public function setreportDiv ($reportDiv)
    {
         $this->reportDiv = $reportDiv;
    }
    
    
    public function setReport ($reportName,$reportColumns,$reportDiv, $reportId)
    {
      
         $this->report = new MyReport();
         
         $this->report->setreportDiv($reportDiv);
         $this->report->setreportColumns($reportColumns);
         $this->report->setreportName($reportName);
         $this->report->setreportId($reportId);
        
         return $this->report ;
         
    }
    
    
    public function renderReport ()
    {
       $i = 0; 
      echo '<table id="'.$this->reportId.'" name="'.$this->reportName.'" class="'.$this->reportDiv.'" ><tr>';
      
       foreach ($this->reportColumns as $columns)
      {
           if($i=='0')
           {
                $this->reportRowCount = $columns->getcolumnValuesCount() ; 
                echo '<th>SN</th>';
           }
           else
           {   echo '<th>'.$columns->getcolumnDisplayName().'</th>';  }
      
      $i = $i+ 1;
       }
      echo '</tr>';
      
      $i=0;
      
      
      while( $this->reportRowCount > $i)
      {
      echo '<tr>';
      $j = 0;
      foreach ($this->reportColumns as $columns)
      {      
          $value = $columns->getcolumnValue().$columns->getcolumnValuesCurrent($i);
          $link = $columns->getcolumnLink();
          
          if($j == '0')
          {
              $linkid = $columns->getcolumnValuesCurrent($i);
          }
          
          if(trim($link) !=='')
          {
            $value = '<a href ="/newPage.php?'.$link.'='.$linkid.'">'.$value.'</a>'  ;
          }
          
          if($j=='0')
          {echo '<td>'.($i+1).'</td>';}
          else
          {echo '<td>'.$value.'</td>';}
        
        $j = $j + 1;  
      }
         echo '</tr>';
       $i = $i+ 1;
      }
      
      echo '</table>';
    }
    
    
}

?>
