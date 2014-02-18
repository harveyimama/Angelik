<?php
include('Mycore/Mymodule.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
if (isset($_POST['Login']))
{
   $array = array( $_POST['username'], $_POST['password']);
   $postedform = new Mymodule();
   $postedform->setpostedFeildValue($array);
   $postedform->processLoginPage();
   
   
}

if (isset($_GET['transactions']))
{
   
   $postedform = new Mymodule();
   $postedform->processTransactionPage();
   
   
}


if (isset($_GET['products']))
{
  echo 'do products';
   
   
}


if (isset($_GET['categories']))
{
$postedform = new Mymodule();
$postedform->processCategoryPage();
   
   
}

if (isset($_GET['logout']))
{
   $postedform = new Mymodule();
   $postedform->processLogoutPage();
   
   
}

?>
