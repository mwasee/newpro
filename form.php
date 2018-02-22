<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="formnew";

$conn=new mysqli($hostname,$username,$password,$databasename);

$name=$_POST['name'];
$age=$_POST['age'];
$subject=$_POST['sub'];
$mobile=$_POST['mobile'];
//$photo=$_POST['photo'];
//$image=$_POST['image'];



$target_dir = "upload/";

$target_file = $target_dir . basename($_FILES['photo']['name']);

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$status=move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);

$target_dir = "upload/";

$target_file = $target_dir . basename($_FILES['image']['name']);

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$status=move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

$q="insert into demo (name,age,photo,subject,image,mobile) values('$name','$age','$target_file','$subject','$target_file','$mobile')";
    
if($conn->query($q))
{
echo " row inserted. {$status}<br>";
}
else{
    echo "not insert.{$status}<br>";
    echo $conn->error;
    echo $q;
}
?>