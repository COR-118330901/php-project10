<!DOCTYPE html>
<html>
    <head><style>
h1 {
  text-align: center;
}
        
body {
  background-image: url("background_2.jpg");
}
 
       </style>
    </head>
    <body>
        <h1 style="color:white;">Purchase Receipt</h1>
        
       <?php
       
       session_start();
       $totalValue = $_POST['txtTotal'];
       $fullNameValue = $_POST['txtName'];
       echo "The Name is : ".$fullNameValue.".";
       echo"<br></br>";
       echo"The total value is:  ".$totalValue.".";
       ?>
    
    </body>
       </html>
