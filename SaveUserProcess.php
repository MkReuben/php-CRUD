    <?php
    if (isset($_GET['btn_save'])){
        $inputedName=$_GET['x'];
        $inputedEmail=$_GET['y'];
        $inputedPassword=$_GET['z'];

        //To save data connect to the DB
        $conn=mysqli_connect("localhost","root","","may_syst");

        //Check if the connection was successfull
        if (!$conn){
            echo "Connection Failed";
        }else{
            //Proceed to save data to the DB
            //start by inserting query

            $insertQuery="INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null ,'$inputedName','$inputedEmail','$inputedPassword')";
            //Check if the insertQuery is correct
            if (!$insertQuery){
                echo "Error on the insert query ";
            }else{
                //Proceed to finally writing data to the DB
                $ingiza=mysqli_query($conn,$insertQuery);
                //Check if the data was saved successfully
                if (!$ingiza){
                    echo "Saving Failed";
                }else{
                    echo "Saved successfully";
                    header('location:saveUser.php');
                    //echo "<a href='saveuser.php'> Add More People<a/>";
                }

            }
        }
    }
    ?>