<?php

include('MyForm.php');
include('MyDashBoard.php');
include('MyRole.php');
include('MyColumn.php');
include('MyReport.php');
include('dto/User.dto.php');
include('dto/Transaction.dto');
include('dto/Category.dto');

class Mymodule
{
    private $postedfeildvalue = array();
    
    
    private function getpostedFeildValue ()
    {
        return  $this->postedfeildvalue;
    }
       
    public function setpostedFeildValue ($postedfeildvalue)
    {
        $this->postedfeildvalue = $postedfeildvalue;
    }
    
    
    
      
public function processLoginPage ()
    {
        
  //declare all expected feilds   
$feildInstance = new MyFeild();


$usernamefeild = $feildInstance->setfeild('','username','username','input','y',$this->postedfeildvalue[0],'Your Username');

$passwordfeild =  $feildInstance->setfeild('','password','password','password','n',$this->postedfeildvalue[1],'Your Password');

$feilds = array($usernamefeild,$passwordfeild);

$fromInstance = new MyForm();

//validate feilds if this form was posted

if($this->postedfeildvalue[0] !== null)
{
  
    $feildarray = $fromInstance->validateFeilds($feilds);
   
}
 
//if form was posted and validated sucessfully, perform your operation

if($this->postedfeildvalue[0] !== null and $fromInstance->validation_error_count == 0)
 {
 
  $propectiveUser =  new User();
  $propectiveUser->setpassword($this->postedfeildvalue[1]);
  $propectiveUser->setusername($this->postedfeildvalue[0]);
  $return_code =  $propectiveUser->allocateUserSession();
    
    if ($return_code !== -1)
    {
        $hompage =  new Mymodule();
        $hompage->processHomePage();
    }
 }
  
//if form wasnt posted or validation error occured or posted data did not meet business need, create form
if($this->postedfeildvalue[0] == null or $fromInstance->validation_error_count > 0 or $return_code == -1)
{
   
   if (isset($feildarray))
   {
   $myForm = $fromInstance->setForm('LoginForm', 'User', $feildarray,'Login', '', 'Login');
   }
 else {
    $myForm = $fromInstance->setForm('LoginForm', 'User', $feilds,'Login', '', 'Login');      
   }
}

//create message for rejected form
if ($this->postedfeildvalue[0] !== null and ($fromInstance->validation_error_count > 0 or $return_code == -1) )
    {
     
    if($fromInstance->validation_error_count > 0)
    {
    $myForm->setFormError('Error processing user');
    }
 else {
     $myForm->setFormError('Authentication Failed');   
    }
     include  'Mypages/index.php';
    
    }
 
 // go to fresh form
if (!isset($this->postedfeildvalue[0]))
    { include  'Mypages/index.php';}
 

   }
   
   
   
 public function processLogoutPage()
 {
     session_destroy();
     include  'Mypages/logout.php';
 }
    
 
  public function processHomePage()
 {
        $dashboardinstance =  new MyDashBoard();
        $roleinstance = new MyRole();
        
        $successfulluserrole = $roleinstance->setRole($_SESSION['role_id']);
        
        $successfulluserdashboard = $dashboardinstance->setDashBoard($successfulluserrole, '', 'Welcome :'.$_SESSION['fullname']);
        
        include  'Mypages/homepage.php';
 }
 
 
 public function processTransactionPage()
 {
   
     $alltransactions = new Transaction();
     
     $transactionarray = $alltransactions->getAllTransactions();
     
     $columnInstance = new MyColumn();

     $itemcolum = $columnInstance->setcolumn($columnDiv, $columnName, $columnLink, $transactionarray[$columnName], $columnValue, $columnDisplayName);

     $categorycolumn = $columnInstance->setcolumn($columnDiv, $columnName, $columnLink, $transactionarray[$columnName], $columnValue, $columnDisplayName);

     
    $reportinstance = new MyReport();
        
    $transactionreport = $reportinstance->setReport($reportName, $reportColumns, $reportDiv, $reportId);
    include  'Mypages/transaction.php'; 
 }
 
 
 public function processCategoryPage()
 {
   
     $allcategoriess = new Category();
     
     $categoryarray = $allcategoriess->getAllCategories();
  
     foreach ($categoryarray as $category)
     {
         $name[] =  $category['NAME'];
         $id[] =  $category['ID'];
         $product_count[] =  $category['PRODUCT_COUNT'];
         $total_sales[] =  $category['TOTAL_SALES'];
         $number_of_sales[] =  $category['NUMBER_OF_SALES'];
     }
 
         
     $columnInstance = new MyColumn();
       
     
     $idcolumn = $columnInstance->setcolumn('', 'ID', '', $id, null, 'Product ID');
     $categorycolumn = $columnInstance->setcolumn('', 'Name', 'show_category', $name, null, 'Category Name');
     $editcolumn = $columnInstance->setcolumn('', 'Edit', 'edit_category', null, 'Edit', '');
     $productcountcolumn = $columnInstance->setcolumn('', 'noProducts', 'show_products', $product_count, null, 'No Of Products');
     $totalsalescolumn = $columnInstance->setcolumn('', 'totalSales', 'show_transactions',$total_sales, null, 'Total Sales');
     $numberofsalescolumn = $columnInstance->setcolumn('', 'noSales', 'show_transactions',$number_of_sales, null, 'Number of Sales');

     $columnarray =array($idcolumn,$categorycolumn,$productcountcolumn,$totalsalescolumn,$numberofsalescolumn,$editcolumn);
    $reportinstance = new MyReport();
        
    $categoryreport = $reportinstance->setReport('All Categories', $columnarray, '', '');
    include  'Mypages/category.php'; 
 }


}
?>
