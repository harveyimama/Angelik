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
$array = array(null, null);
$postedform = new Mymodule();
$postedform->setpostedFeildValue($array);
$postedform->processCategoryPage();
   
   
}


if (isset($_POST['category']))
{
$array = array($_POST['category']);
$postedform = new Mymodule();
$postedform->setpostedFeildValue($array);
$postedform->processCategoryPage();
   
   
}

if (isset($_GET['logout']))
{
   $postedform = new Mymodule();
   $postedform->processLogoutPage();
   
   
}

?>
