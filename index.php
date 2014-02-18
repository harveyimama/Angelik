<?php
            include('MyCore/Mymodule.php');
           //include_once 'MyCore/Angelik.php';
          // header("Location: MyCore/Angelik.php");
        
            $array = array( null, null);
            $loginpage = new Mymodule();
            $loginpage->setpostedFeildValue($array);
            $loginpage->processLoginPage();
            
            
   ?>