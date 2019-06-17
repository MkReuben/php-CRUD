<?php
//Connnect to Db
$conn=mysqli_connect("localhost","root","","may_syst");
//Check if the connection was successful
if (!$conn){
    echo "Connection failed";
}else{
    //Proceed by deleting
    //Start by checking if  the delete has been clicked
    if (isset($_GET['id_yangu']));{
        $receive_id=$_GET['id_yangu'];
        //create the delete query
        $deleteQuery="DELETE FROM majina WHERE id=$receive_id";
        //complete by finally deleting
        $delete=mysqli_query($conn,$deleteQuery);
        //check if deleting was successfully
        if (!$delete){
            echo "Deleting failed";
        }else{
            echo " Record deleted successfully";
            header('Location:viewUsers.php');
        }
    }
}
?>