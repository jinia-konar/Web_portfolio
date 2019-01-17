<?php
$message=$_POST['message'];
if(!empty($message)){
  $host ="https://1op9xv6w0q.codesandbox.io"
  $dbusername="root";
  $dbpassword="";
  $dbname="myweb";
  $con=new mysqli($host,$dbusername,$dbpassword,$dbname);
  if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  }else{
    $query="INSERT INTO index (message) values ($message)";
    if(!mysqli_query($db,$query))
      die('Data unable to insert');
    else
      echo 'Data Inserted';
  }
}
mysqli_close($db);
?>