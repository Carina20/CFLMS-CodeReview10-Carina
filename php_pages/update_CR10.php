<?php 

require_once 'dbconnect_CR10.php';

if ($_GET['isbn']) {
   $isbn = $_GET['isbn'];

   $sql = "SELECT * FROM media_item WHERE isbn = {$isbn}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Update item </title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update item</legend>

   <form action="more_actions/a_update_CR10.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>author id</th>
               <td><input type="text"  name="first_name" placeholder ="First Name" value="<?php echo $data['first_name'] ?>"  /></td>
           </tr >    
           <tr>
               <th>Last Name</th>
               <td><input type= "text" name="last_name"  placeholder="Last Name" value ="<?php echo $data['last_name'] ?>" /></td >
           </tr>
           <tr>
               <th >Date of birth</th>
               <td><input type ="text" name= "date_of_birth" placeholder= "Date of birth" value= "<?php echo $data['date_of_birth'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php"><button  type="button" >Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>