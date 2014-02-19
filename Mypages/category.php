<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
         echo   $successfulluserdashboard->renderDashBoard();
         echo   $categoryreport->renderReport();
         echo   $myForm->renderForm('Create Category');
        ?>
    </body>
</html>