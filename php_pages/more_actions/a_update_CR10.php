<?php 

require_once '../dbconnect_CR10.php';

if ($_POST) {
   $author_id = $_POST['author_id'];
   $content_description = $_POST['content_description'];
   $fk_publisher_id= $_POST[ 'publisher_id'];
   $image= $_POST[ 'image'];
   $title= $_POST[ 'title'];
   $type= $_POST[ 'type'];

   $isbn= $_POST[ 'isbn'];


   $sql = "UPDATE media_item SET author_id = '$author_id', content_description = '$content_description', fk_publisher_id = '$fk_publisher_id', image = '$image', title = '$title', type = '$type' WHERE isbn = {$isbn}" ;
   if($conn->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update_CR10.php?isbn=" .$isbn."'><button type='button'>Back</button></a>";
       echo  "<a href='../index_CR10.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?>