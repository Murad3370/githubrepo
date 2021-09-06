<?php
if(isset($_POST['btn'])){
$user_id=$_POST['userid'];
$email=$_POST['Emailaddress'];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title></title>
  </head>
  <body>
  <iframe width="100%" frameBorder="0" height="2000px" src="https://offers.cpx-research.com/index.php?app_id=8403&ext_user_id=<?php echo $user_id;?>&email=<?php echo $email;?>"</iframe> 

  </body>
  
  
  </html>