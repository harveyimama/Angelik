<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyColumn
 *
 * @author harville
 */
class MyColumn {
    private  $columnName ;
    private  $columnLink; 
    private  $columnDiv;
    private  $column;
    public   $columnValues;
    private  $columnValue;
    private  $columnDisplayName;

    
    
       public function getcolumnDisplayName ()
    {
        return $this->columnDisplayName;
    }
    
     public function setcolumnDisplayName ( $columnDisplayName)
    {
         $this->columnDisplayName = $columnDisplayName;
    }
    
    public function getcolumnName ()
    {
        return $this->columnName;
    }
    
     public function setcolumnName ( $columnName)
    {
         $this->columnName = $columnName;
    }
    
       public function getcolumnValues ()
    {
        return $this->columnValues;
    }
    
        public function getcolumnValuesCount ()
    {
        return count($this->columnValues);
    }
    
        public function getcolumnValuesCurrent ($a)
    {
           
        return $this->columnValues[$a];
    }
    
     public function setcolumnValues ( $columnValues)
    {
         $this->columnValues = $columnValues;
    }
    
     public function getcolumnValue ()
    {
        return $this->columnValue;
    }
    
     public function setcolumnValue ( $columnValue)
    {
         $this->columnValue = $columnValue;
    }
    
    
       public function getcolumnLink ()
    {
        return $this->columnLink;
    }
    
     public function setcolumnLink ( $columnLink)
    {
         $this->columnLink = $columnLink;
    }
    
    
       public function getcolumnDiv ()
    {
        return $this->columnDiv;
    }
    
     public function setcolumnDiv ( $columnDiv)
    {
         $this->columnDiv = $columnDiv;
    }
    
       public function setcolumn ($columnDiv,$columnName,$columnLink,$columnValues,$columnValue,$columnDisplayName)
    {
         
         $this->column = new MyColumn();
         $this->column->setcolumnDiv($columnDiv);
         $this->column->setcolumnName($columnName);
         $this->column->setcolumnLink($columnLink);
         $this->column->setcolumnValues($columnValues);
          $this->column->setcolumnValue($columnValue);
         $this->column->setcolumnDisplayName($columnDisplayName);
         
         return $this->column;
         
    }
    
    
    
}

?>
