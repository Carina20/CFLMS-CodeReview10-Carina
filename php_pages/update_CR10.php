<?php 

require_once 'dbconnect_CR10.php';

if ($_GET['isbn']) {
   $isbn = $_GET['isbn'];

   $sql = "SELECT * FROM media_item WHERE isbn = $isbn";
   $result = mysqli_query($conn,$sql);
   $data = $result->fetch_assoc();

   $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Update item</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
            font-family: Arial;
       }

       table  tr th {
           padding-top: 20px;
       }

       table {
        font-size:11pt;
       }

   </style>

</head>
<body>

<fieldset>
   <legend><b>Update item</b></legend>

   <form action="more_actions/a_update_CR10.php"  method="post">
       <b><table cellspacing="3" cellpadding= "3">
           <tr>
               <td>Author ID</td>
               <td><input type="number"  name="author_id" placeholder ="Author ID" value="<?php echo $data['author_id'] ?>"  /></td>
           </tr >    
           <tr>
               <td>Content description</td>
               <td><input type= "text" name="content_description"  placeholder="Content description" value ="<?php echo $data['content_description'] ?>" /></td>
           </tr>
           <tr>
               <td>Publisher ID</td>
               <td><input type ="number" name= "publisher_id" placeholder= "Publisher ID" value= "<?php echo $data['fk_publisher_id'] ?>" /></td>
           </tr>
              <tr>
               <td>Image</td>
               <td><input type ="text" name= "image" placeholder= "Image" value= "<?php echo $data['image'] ?>" /></td>
           </tr>
            <tr>
               <td>Title</td>
               <td><input type ="text" name= "title" placeholder= "Title" value= "<?php echo $data['title'] ?>" /></td>
           </tr>
              <tr>
               <td>Type</td>
               <td><input type ="text" name= "type" placeholder= "Type" value= "<?php echo $data['type'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "isbn" value= "<?php echo $data['isbn']?>" />
               <td><br><button type= "submit">Save Changes</button ></td>
               <td><br><a href= "index_CR10.php"><button type="button">Back</button ></a></td>
           </tr>
       </table></b>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>