
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
   <title >Delete item</title>
</head>
<body>

<h3>Do you really want to delete this item?</h3>
<form action ="more_actions/a_delete_CR10.php" method="post">

   <input type="hidden" name= "isbn" value="<?php echo $data['isbn'] ?>" />
   <button type="submit">Yes, delete it!</button>
</form>

</body>
</html>

<?php
}
?>

