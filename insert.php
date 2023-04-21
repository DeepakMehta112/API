<?php
$success=false;
header("Content-Type:application/json");
$conn=new mysqli('localhost','root','','ob_db');
$data=array();
if(!$conn){
    die ("Connection Error!!");

} else{
    $sql="INSERT INTO movies VALUES(null,'Krish','4','all good') ";
    $result=$conn->query($sql);
    if($result===TRUE){
        $success=true;
    }

$response=array(
    'status'=>'ok',
    'success'=>$success
);
}
echo json_encode($response);
?>