<?php 

require_once '../dbconnect_CR10.php';

if ($_POST) {
   $isbn = $_POST['isbn'];

   $sql = "DELETE FROM media_item WHERE isbn = $isbn";
    if($conn->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../index_CR10.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $conn->close();
}

?>