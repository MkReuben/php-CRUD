<?php
if (isset($_POST['btn_update'])){
    $received_id=$_POST['x'];
    $received_name=$_POST['y'];
    $received_email=$_POST['z'];
    $received_password=$_POST['pwd'];

    //connect to Db
    $conn=mysqli_connect("localhost","root","","may_syst");
    //Check if the connection is successfully
    if (!$conn){
        echo "Connection Failed";
    }else {
        //Proceed to update the database
        //Start by creating the updateQuery
        $updateQuery="UPDATE majina SET jina='$received_name',arafa='$received_email',siri='$received_password' WHERE  id=$received_id";
        //Check if the query is correct
        if (!$updateQuery){
            echo "Error on the updateQuery";
        }else{
            //proceed finally to the update
            $update=mysqli_query($conn,$updateQuery);
            //Check if the update wa succesful
            if (!$update){
                echo "Updating Failed";
            }else{
                echo "Record updated successfully";
                header("location:viewUsers.php");
            }
        }
    }
}
?>