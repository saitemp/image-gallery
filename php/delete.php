<?php
require ('./header.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
        $sno=$_POST['sno'];
        $result=array();
        $sql="DELETE FROM imagedetails WHERE sno=$sno";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
            $result["status"]="true";
            $result["message"]="Image Deletion successful";
        }
        else
        {
            $result["status"]="failed";
            $result["message"]="Image Deletion Failed";
        }
       
    echo   json_encode($result);
}

?>