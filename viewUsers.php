<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
         <table class="table table-hover table-dark">
         <tr>
             <th>Name</th>
             <th>Email</th>
             <th>Delete</th>
             <th>Update</th>
         </tr>

             <?php
//Connect to the DB
             $conn=mysqli_connect("localhost","root","","may_syst");
             //Check if the connection is successfully
             if (!$conn){
                 echo "Connection Failed";
             }else{
                 //Proceed to fetch data from the DB
                 //Start by creating the select query
                 $selectQuery="SELECT * FROM majina";
                 //Check if the select query is correct
                 if (!$selectQuery){
                     echo "Error on the select query ";
                 }else{
                     //Proceed to fetch data to the DB
                     $fetch=mysqli_query($conn,$selectQuery);
                     while ($row = mysqli_fetch_assoc($fetch)){
                         extract($row);
                             echo "
                             <tr>
                             <td>$jina</td>
                             <td>$arafa</td>
                             <td>
                             
                             <div class='container'>
  
  <!-- Button to Open the Modal -->
  <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#myModal'>
    Delete
  </button>

  <!-- The Modal -->
  <div class='modal fade' id='myModal'>
    <div class='modal-dialog modal-sm'>
      <div class='modal-content'>
      
        <!-- Modal Header -->
        <div class='modal-content'>
          <h4 class='modal-title mdttl'>Deleting</h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body mdttl'>
        Are you sure you want to delete?
        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-dismiss='modal'>No</button>
          <a href='Delete.php?id_yangu=$id' class='btn btn-danger'>Yes</a>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
                             
                             </td>
                             <td><a href='Update.php?id_yetu=$id&jina_yetu=$jina&arafa_yetu=$arafa&pass_yetu=$siri' class='btn btn-primary'>Update</a></td>
                             </tr>
                             ";
                     }
                 }
             }
             ?>


     </table>

</body>
</html>