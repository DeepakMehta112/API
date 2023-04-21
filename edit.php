<?php
header("Content-Type:application/json");
$success=false;
$conn=new mysqli('localhost','root','','ob_db');
if(!$conn){
    die("Connection error");
} else{
    $sql="UPDATE movies SET title='Krish' WHERE id=6";
    $result=$conn->query($sql);
    if($result===TRUE){
        $success=true;
    }
}
$response=array(
    'status'=>'ok',
    'success'=>$success
);
echo(json_encode($response));
$conn->close();
?>