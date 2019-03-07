<?php
session_start();
$fullNameValue = "";
$totalValue ="";

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue;

?>
<!DOCTYPE html>
<html>
    <head>  <style>
h1 {
  text-align: center;
}
</style>
        <style>
body {
  background-image: url("background_2.jpg");
}
 
       </style>
        <title>eBusiness 2</title>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <h1 style="color:white;">Service Calculator</h1>
                <center>
                   <table cellspacing="10">
                       <tr>
                           <td><b></b></td>
                       <td style="color:white;"><b>Enter in your details below</b></td>
                       </tr>
                     
                       <tr>
                           <td style="color:white;">Name</td>
                           <td><input type="text" id="txtName" name="txtName" value="" /></td>
                       </tr>
                    
                       <tr>
                           <td style="color:white;">Mobile</td>
                           <td><input type="text" id="txtNum" name="txtMobile" value=""  onkeypress="return isNumber(event)"/></td>
                       </tr>
                       
                       <tr>
                           <td style="color:white;">PIN</td>
                           <td><input type="text" id="txtPassword" name="txtPIN" value="" /></td>
                       </tr>
                       
                       <tr>
                           <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                       </tr>
                   </table>
             </center>
               
               <center>
                  
                   <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed with Purchase"/>
             </center>
        </div>
</form>
            <script> //This code was adapted from: https://stackoverflow.com/questions/7295843/allow-only-numbers-to-be-typed-in-a-textbox */
                function isNumber(evt) {
                    evt = (evt) ? evt : window.event;
                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                        return false;
                    }
                    return true;
                    </script>
                }
    </body>
    
</html>


