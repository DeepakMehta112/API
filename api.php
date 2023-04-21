<?php
header("Content-Type:application/json");
$conn=new mysqli('localhost','root','','ob_db');
$data=array();
if(!$conn){
    die ("Connection Error!!");

} else{
    $sql="SELECT *FROM movies ";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
            # code...
            $data[]=$row;


        }
    }
}
$response=array(
    'status'=>'ok',
    'data'=>$data
);
echo json_encode($response);
?>
